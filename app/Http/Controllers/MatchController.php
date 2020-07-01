<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    /**
     * Constructeur permettant de limiter les acces
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Match $match)
    {
        $equipes = Equipe::all();
        return view('pages.matchs.index', compact('equipes'));
    }
}
