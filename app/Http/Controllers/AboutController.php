<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    public function showAbout(): View
    {
        return view('about.index');
    }
}
