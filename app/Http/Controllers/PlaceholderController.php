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
        if ($width < 1 || $width > 2000) {
            return response('Width must be between 1 and 2000', 400);
        }
        if ($height < 1 || $height > 2000) {
            return response('Height must be between 1 and 2000', 400);
        }

        $cx   = (int) $request->get('cx', 4); // blurhash components on X axis
        $cy   = (int) $request->get('cy', 3); // blurhash components on Y axis

        if ($cx < 1 || $cx > 9) {
            return response('cx must be between 1 and 9', 400);
        }
        if ($cy < 1 || $cy > 9) {
            return response('cy must be between 1 and 9', 400);
        }

        $seed = (string) $request->get('seed', 'default');

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
