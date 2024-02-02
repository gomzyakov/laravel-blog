<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Override;

class PostItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Post $post, public bool $showAuthor = true)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    #[Override]
    public function render(): View|Closure|string
    {
        return view('components.post-item');
    }
}
