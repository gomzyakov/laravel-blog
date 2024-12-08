<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory as ViewFactory;

class IndexController extends Controller
{
    public function __invoke(ViewFactory $view_factory)
    {
        /** @phpstan-ignore-next-line  */
        $comments = auth()->user()->comments;

        return $view_factory->make('personal.comment.index', ['comments' => $comments]);
    }
}
