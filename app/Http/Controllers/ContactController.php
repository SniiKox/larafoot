<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function pageContact()
    {
        return view('pages/contact');
    }

    public function store(ContactFormRequest $request) { }
}
