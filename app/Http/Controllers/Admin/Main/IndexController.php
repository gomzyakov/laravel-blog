<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data['countUser']     = count(User::all());
        $data['countPost']     = count(Post::all());
        $data['countCategory'] = count(Category::all());
        $data['countTag']      = count(Tag::all());

        return view('admin.main.index', ['data' => $data]);
    }
}
