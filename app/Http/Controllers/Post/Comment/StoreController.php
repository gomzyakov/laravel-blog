<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $data            = $request->validated();
        $data['post_id'] = $post->id;
        /** @phpstan-ignore-next-line  */
        $data['user_id'] = auth()->user()->id;
        /** @phpstan-ignore-next-line */
        Comment::create($data);

        return redirect()->route('post.show', $post->id);
    }
}
