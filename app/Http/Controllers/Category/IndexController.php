<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\Factory as ViewFactory;

class IndexController extends Controller
{
    public function __invoke(ViewFactory $view_factory)
    {
        $categories = Category::all();

        return $view_factory->make('category.index', ['categories' => $categories]);
    }
}
