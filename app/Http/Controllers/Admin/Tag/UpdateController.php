<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory as ViewFactory;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag, ViewFactory $view_factory)
    {
        $data = $request->validated();
        $tag->update($data);

        return $view_factory->make('admin.tag.show', ['tag' => $tag]);
    }
}
