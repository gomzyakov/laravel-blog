<?php

namespace App\Service;

use kornrunner\Blurhash\Blurhash;
use RuntimeException;

class ImagePlaceholder
{
    /**
     * Generate a placeholder image using blurhash.
     */
    public function generate(int $width, int $height, string $seed = 'default', int $cx = 4, int $cy = 3): string
    {
        $width  = max(1, min(2000, $width));
        $height = max(1, min(2000, $height));
        $cx     = max(1, min(9, $cx));
        $cy     = max(1, min(9, $cy));

        $srcW     = 4;
        $srcH     = 3;
        $pixels   = [];
        $seedHash = crc32($seed);

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

        $blurhash = Blurhash::encode($pixels, $cx, $cy);
        $decoded  = Blurhash::decode($blurhash, $width, $height);

        $image = imagecreatetruecolor($width, $height);
        if ($image === false) {
            throw new RuntimeException('Failed to create image');
        }

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

        if ($imageData === false) {
            throw new RuntimeException('Failed to generate image');
        }

        return $imageData;
    }
}
