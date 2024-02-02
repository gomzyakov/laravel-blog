<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;
use Override;

class Sidebar extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    #[Override]
    public function render(): View|Closure|string
    {
        $categories = Category::query()
            ->join('category_post', 'categories.id', '=', 'category_post.category_id')
            ->select('categories.title', 'categories.slug', DB::raw('count(*) as total'))
            ->groupBy([
                'categories.title', 'categories.slug',
            ])
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        return view('components.sidebar', ['categories' => $categories]);
    }
}
