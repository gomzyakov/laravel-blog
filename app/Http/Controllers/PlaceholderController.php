<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use Gomzyakov\ImagePlaceholder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use RuntimeException;

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

        try {
            $generator  = new ImagePlaceholder();
            $image_data = $generator->generate($width, $height, $seed, $cx, $cy);

            return response($image_data)
                ->header('Content-Type', 'image/png')
                ->header('Cache-Control', 'public, max-age=31536000');
        } catch (RuntimeException $e) {
            return response($e->getMessage(), 500);
        }
    }
}
