<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Contracts\View\Factory as ViewFactory;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user, ViewFactory $view_factory)
    {
        $data = $request->validated();
        $user->update($data);

        return $view_factory->make('admin.user.show', ['user' => $user]);
    }
}
