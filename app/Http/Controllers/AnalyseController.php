<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyseController extends Controller
{
    public function pageAnalyse()
    {
        return view('pages/analyse');
    }
}
