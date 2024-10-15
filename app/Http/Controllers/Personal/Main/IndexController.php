<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        /** @phpstan-ignore-next-line  */
        $data['countComments'] = count(auth()->user()->comments);
        /** @phpstan-ignore-next-line  */
        $data['countLiked']    = count(auth()->user()->likedPosts);

        return view('personal.main.index', ['data' => $data]);
    }
}
