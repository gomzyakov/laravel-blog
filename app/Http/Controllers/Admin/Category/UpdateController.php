<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Contracts\View\Factory as ViewFactory;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category, ViewFactory $view_factory)
    {
        $data = $request->validated();
        $category->update($data);

        return $view_factory->make('admin.category.show', ['category' => $category]);
    }
}
