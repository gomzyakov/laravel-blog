<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data['countComments'] = count(auth()->user()->comments);
        $data['countLiked']    = count(auth()->user()->likedPosts);

        return view('personal.main.index', compact('data'));
    }
}
