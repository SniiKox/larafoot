<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\demandeCreated;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function pageContact()
    {
        return view('pages/contact');
    }

    public function store(ContactFormRequest $request) {

        $mailable = new demandeCreated($request->name, $request->email, $request->message);
        Mail::to($request->email)->send($mailable);

        flashy('Merci ! Nous vous répondrons dans les plus brefs délais');
        return redirect()->route('root_path');
    }
}
