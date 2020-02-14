<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class ChampionnatController extends Controller
{
    public function pageChampionnat()
    {
        $championnats = ['Ligue 1', 'Liga', 'Premiere League'];
        return view('pages/championnat', [
            'championnats' => $championnats
        ]);
    }
}
