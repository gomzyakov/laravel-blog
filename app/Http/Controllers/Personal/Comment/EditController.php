<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Contracts\View\Factory as ViewFactory;

class EditController extends Controller
{
    public function __invoke(Comment $comment, ViewFactory $view_factory)
    {
        return $view_factory->make('personal.comment.edit', ['comment' => $comment]);
    }
}
