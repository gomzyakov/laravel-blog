<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory as ViewFactory;

class ShowController extends Controller
{
    public function __invoke(Tag $tag, ViewFactory $view_factory)
    {
        return $view_factory->make('admin.tag.show', ['tag' => $tag]);
    }
}
