<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultatController extends Controller
{
    public function pageResultat()
    {
        return view('pages/resultat');
    }
}
