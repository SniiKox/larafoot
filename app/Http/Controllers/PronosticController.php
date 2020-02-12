<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PronosticController extends Controller
{
    public function pageProno()
    {
        return view('pages/pronostic');
    }
}
