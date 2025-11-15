<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\Auth\Authenticatable;

class DeleteController extends Controller
{
    public function __invoke(Post $post, Authenticatable $user)
    {
        /** @phpstan-ignore-next-line  */
        $user->likedPosts()->detach($post->id);

        return redirect()->route('personal.liked.index');
    }
}
