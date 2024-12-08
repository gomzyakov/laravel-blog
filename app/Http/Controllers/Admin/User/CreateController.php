<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory as ViewFactory;

class CreateController extends Controller
{
    public function __invoke(ViewFactory $view_factory)
    {
        return $view_factory->make('admin.user.create');
    }
}
