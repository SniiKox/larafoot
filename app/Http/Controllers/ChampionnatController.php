<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChampionnatController extends Controller
{
    public function pageChampionnat()
    {
        return view('pages/championnat');
    }
}
