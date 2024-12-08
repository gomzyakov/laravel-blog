<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory as ViewFactory;

class IndexController extends Controller
{
    public function __invoke(ViewFactory $view_factory)
    {
        $tags = Tag::all();

        return $view_factory->make('admin.tag.index', ['tags' => $tags]);
    }
}
