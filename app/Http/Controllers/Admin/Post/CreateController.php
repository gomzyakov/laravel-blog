<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory as ViewFactory;

class CreateController extends BaseController
{
    public function __invoke(ViewFactory $view_factory)
    {
        $categories = Category::all();
        $tags       = Tag::all();

        return $view_factory->make('admin.post.create', ['categories' => $categories, 'tags' => $tags]);
    }
}
