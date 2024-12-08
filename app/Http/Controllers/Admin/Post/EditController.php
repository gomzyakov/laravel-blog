<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory as ViewFactory;

class EditController extends BaseController
{
    public function __invoke(Post $post, ViewFactory $view_factory)
    {
        $categories = Category::all();
        $tags       = Tag::all();

        return $view_factory->make('admin.post.edit', ['post' => $post, 'categories' => $categories, 'tags' => $tags]);
    }
}
