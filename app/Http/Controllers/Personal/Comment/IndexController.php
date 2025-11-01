<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\Auth\Authenticatable;

class IndexController extends Controller
{
    public function __invoke(ViewFactory $view_factory, Authenticatable $user)
    {
        /** @phpstan-ignore-next-line  */
        $comments = $user->comments;

        return $view_factory->make('personal.comment.index', ['comments' => $comments]);
    }
}
