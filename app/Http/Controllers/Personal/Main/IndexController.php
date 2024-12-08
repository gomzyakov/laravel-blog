<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory as ViewFactory;

class IndexController extends Controller
{
    public function __invoke(ViewFactory $view_factory)
    {
        /** @phpstan-ignore-next-line  */
        $data['countComments'] = count(auth()->user()->comments);
        /** @phpstan-ignore-next-line  */
        $data['countLiked']    = count(auth()->user()->likedPosts);

        return $view_factory->make('personal.main.index', ['data' => $data]);
    }
}
