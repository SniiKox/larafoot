<?php

namespace App\Http\Controllers;

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
        $equipes = Equipe::latest()->paginate(20);

        return view('pages.equipes.index',compact('equipes'))
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.equipes.create');
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

        flashy('Le championnat a été ajouté avec succès !');

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
        return view('pages.equipes.edit',compact('equipe'));
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

        flashy('Le championnat a été modifié avec succès !');

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

        flashy('Le championnat a été supprimé avec succès !');

        return redirect()->route('equipes.index');
    }
}
