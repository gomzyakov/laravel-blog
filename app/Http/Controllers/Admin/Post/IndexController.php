<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Contracts\View\Factory as ViewFactory;

class IndexController extends BaseController
{
    public function __invoke(ViewFactory $view_factory)
    {
        $posts = Post::all();

        return $view_factory->make('admin.post.index', ['posts' => $posts]);
    }
}
