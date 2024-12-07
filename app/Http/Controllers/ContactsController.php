<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;

class ContactsController extends Controller
{
    public function showContacts(ViewFactory $view_factory): View
    {
        return $view_factory->make('contact.index');
    }
}
