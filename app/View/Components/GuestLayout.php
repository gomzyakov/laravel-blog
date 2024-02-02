<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    #[\Override]
    public function render(): View
    {
        return view('layouts.guest');
    }
}
