<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactsController extends Controller
{
    public function showContacts(): View
    {
        return view('contact.index');
    }
}
