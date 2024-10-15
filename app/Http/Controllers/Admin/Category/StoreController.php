<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data         = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        /** @phpstan-ignore-next-line */
        Category::firstOrCreate($data);

        return redirect()->route('admin.category.index');
    }
}
