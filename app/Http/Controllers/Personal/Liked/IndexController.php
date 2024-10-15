<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        /** @phpstan-ignore-next-line  */
        $posts = auth()->user()->likedPosts;

        return view('personal.liked.index', ['posts' => $posts]);
    }
}
