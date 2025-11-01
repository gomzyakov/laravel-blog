<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\Auth\Authenticatable;

class StoreController extends Controller
{
    public function __invoke(Post $post, Authenticatable $user)
    {
        /** @phpstan-ignore-next-line  */
        $user->likedPosts()->toggle($post->id);

        return redirect()->back();
    }
}
