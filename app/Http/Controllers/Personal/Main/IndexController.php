<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\View\Factory as ViewFactory;

class IndexController extends Controller
{
    public function __invoke(ViewFactory $view_factory, Authenticatable $user)
    {
        /** @phpstan-ignore-next-line  */
        $data['countComments'] = count($user->comments);
        /** @phpstan-ignore-next-line  */
        $data['countLiked']    = count($user->likedPosts);

        return $view_factory->make('personal.main.index', ['data' => $data]);
    }
}
