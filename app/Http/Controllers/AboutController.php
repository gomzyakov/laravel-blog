<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    public function showAbout(ViewFactory $view_factory): View
    {
        return $view_factory->make('about.index');
    }
}
