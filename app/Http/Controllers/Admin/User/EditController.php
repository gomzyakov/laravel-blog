<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\Factory as ViewFactory;

class EditController extends Controller
{
    public function __invoke(User $user, ViewFactory $view_factory)
    {
        return $view_factory->make('admin.user.edit', ['user' => $user]);
    }
}
