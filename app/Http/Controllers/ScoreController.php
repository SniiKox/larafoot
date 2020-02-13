<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function pageScore()
    {
        return view('pages/score');
    }
}
