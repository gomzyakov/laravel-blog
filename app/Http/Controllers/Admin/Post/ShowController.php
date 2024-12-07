<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Contracts\View\Factory as ViewFactory;

class ShowController extends BaseController
{
    public function __invoke(Post $post, ViewFactory $view_factory)
    {
        return $view_factory->make('admin.post.show', ['post' => $post]);
    }
}
