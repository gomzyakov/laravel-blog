<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\View\Factory as ViewFactory;

class IndexController extends Controller
{
    public function __invoke(ViewFactory $view_factory, Authenticatable $user)
    {
        /** @phpstan-ignore-next-line  */
        $posts = $user->likedPosts;

        return $view_factory->make('personal.liked.index', ['posts' => $posts]);
    }
}
