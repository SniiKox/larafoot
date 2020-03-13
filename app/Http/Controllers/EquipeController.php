<?php

namespace App\Http\Controllers;

use App\championnat;
use App\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{

    /**
     * Constructeur permettant de limiter les acces
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin')->only('create','edit','delete');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Equipe $equipe)
    {
        $equipes = Equipe::all();

        return view('pages.equipes.index',compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $championnats = championnat::all();
        return view('pages.equipes.create', compact('championnats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'championnat_id' => 'required',
        ]);

        Equipe::create($request->all());

        flashy('L\'équipe a été ajoutée avec succès !');

        return redirect()->route('equipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        $championnat = $equipe->championnat->libelle;
        return view('pages.equipes.show', compact('equipe', 'championnat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        $championnats = championnat::all();
        return view('pages.equipes.edit', compact('equipe', 'championnats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        $request->validate([
            'libelle' => 'required',
            'championnat_id' => 'required',
        ]);

        $equipe->update($request->all());

        flashy('L\'équipe a été modifiée avec succès !');

        return redirect()->route('equipes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();

        flashy('L\'équipe a été supprimée avec succès !');

        return redirect()->route('equipes.index');
    }
}
