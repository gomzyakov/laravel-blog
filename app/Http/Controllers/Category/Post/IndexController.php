<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\Factory as ViewFactory;

class IndexController extends Controller
{
    public function __invoke(Category $category, ViewFactory $view_factory)
    {
        $posts = $category->posts()->paginate(6);

        return $view_factory->make('category.post.index', ['posts' => $posts, 'category' => $category]);
    }
}
