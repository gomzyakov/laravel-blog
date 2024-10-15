<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        /** @phpstan-ignore-next-line  */
        auth()->user()->likedPosts()->toggle($post->id);

        return redirect()->back();
    }
}
