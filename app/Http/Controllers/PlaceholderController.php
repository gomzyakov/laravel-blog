<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlaceholderController extends Controller
{
    /**
     * Generate a placeholder image.
     *
     * @param Request $request
     * @param int     $width
     * @param int     $height
     *
     * @return Response
     */
    public function generate(Request $request, int $width = 640, int $height = 480): Response
    {
        $seed = $request->get('seed', 'default');
        $text = $request->get('text', "{$width}x{$height}");

        // Validate dimensions
        $width  = max(1, min(2000, $width));
        $height = max(1, min(2000, $height));

        // Create image
        $image = imagecreate($width, $height);

        // Generate colors based on seed for consistency
        $hash    = crc32($seed);
        $bgColor = imagecolorallocate($image,
            ($hash >> 16) & 0xFF,
            ($hash >> 8)  & 0xFF,
            $hash         & 0xFF
        );

        $textColor = imagecolorallocate($image, 255, 255, 255);

        // Fill background
        imagefill($image, 0, 0, $bgColor);

        // Add text
        $fontSize = min($width, $height) / 10;
        $fontSize = max(12, min(48, $fontSize));

        $textWidth  = imagefontwidth(5) * strlen($text);
        $textHeight = imagefontheight(5);
        $x          = ($width - $textWidth)   / 2;
        $y          = ($height - $textHeight) / 2;

        imagestring($image, 5, $x, $y, $text, $textColor);

        // Output image
        ob_start();
        imagepng($image);
        $imageData = ob_get_contents();
        ob_end_clean();

        imagedestroy($image);

        return response($imageData)
            ->header('Content-Type', 'image/png')
            ->header('Cache-Control', 'public, max-age=31536000'); // Cache for 1 year
    }
}
