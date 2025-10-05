<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use kornrunner\Blurhash\Blurhash;

class PlaceholderController extends Controller
{
    /**
     * Generate a placeholder image.
     */
    public function generate(Request $request, int $width = 640, int $height = 480): Response
    {
        $seed = (string) $request->get('seed', 'default');
        $cx   = (int) $request->get('cx', 4); // blurhash components on X axis
        $cy   = (int) $request->get('cy', 3); // blurhash components on Y axis

        // Validate dimensions
        $width  = max(1, min(2000, $width));
        $height = max(1, min(2000, $height));
        $cx     = max(1, min(9, $cx));
        $cy     = max(1, min(9, $cy));

        // Build a small deterministic pixel matrix based on seed
        // Small source image keeps blurhash fast and deterministic
        $srcW     = 4;
        $srcH     = 3;
        $pixels   = [];
        $seedHash = crc32($seed);
        // Lightweight LCG based on seed for reproducible pseudo-random colors
        $rand = function () use (&$seedHash): int {
            $seedHash = (1103515245 * $seedHash + 12345) & 0x7fffffff;

            return $seedHash & 0xff;
        };

        for ($y = 0; $y < $srcH; $y++) {
            $row = [];
            for ($x = 0; $x < $srcW; $x++) {
                $row[] = [$rand(), $rand(), $rand()];
            }
            $pixels[] = $row;
        }

        // Encode to blurhash with requested component counts
        $blurhash = Blurhash::encode($pixels, $cx, $cy);

        // Decode blurhash to requested output size
        $decoded = Blurhash::decode($blurhash, $width, $height);

        // Render decoded pixels into a PNG using GD
        $image = imagecreatetruecolor($width, $height);
        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                [$r, $g, $b] = $decoded[$y][$x];
                imagesetpixel($image, $x, $y, imagecolorallocate($image, $r, $g, $b));
            }
        }

        ob_start();
        imagepng($image);
        $imageData = ob_get_contents();
        ob_end_clean();
        imagedestroy($image);

        return response($imageData)
            ->header('Content-Type', 'image/png')
            ->header('Cache-Control', 'public, max-age=31536000');
    }
}
