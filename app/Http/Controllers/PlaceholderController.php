<?php

namespace App\Http\Controllers;

use App\Service\ImagePlaceholder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use RuntimeException;

class PlaceholderController extends Controller
{
    public function __construct(
        private readonly ImagePlaceholder $image_placeholder
    ) {
    }

    /**
     * Generate a placeholder image.
     */
    public function generate(Request $request, int $width = 640, int $height = 480): Response
    {
        $seed = (string) $request->get('seed', 'default');
        $cx   = (int) $request->get('cx', 4); // blurhash components on X axis
        $cy   = (int) $request->get('cy', 3); // blurhash components on Y axis

        try {
            $imageData = $this->image_placeholder->generate($width, $height, $seed, $cx, $cy);

            return response($imageData)
                ->header('Content-Type', 'image/png')
                ->header('Cache-Control', 'public, max-age=31536000');
        } catch (RuntimeException $e) {
            return response($e->getMessage(), 500);
        }
    }
}
