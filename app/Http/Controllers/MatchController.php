<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Match;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\IsEmpty;
use App\Http\Utils\StatistiquesUtils;

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

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function statistique(Request $request)
    {
        $currentId = $request->input('equipes');

        $currentEquipe = DB::table('matchs')
                ->select('possession', 'BP', 'BC', 'nb_changement', 'nb_passe', 'nb_tir', 'nb_tir_cadres', 'cleansheet')
                ->where('equipe_id', '=', $currentId)
                ->get();

        var_dump($currentEquipe->toArray());
        die;
        if(count($currentEquipe) == 0){
            flashy()->error('Désolé, nous ne possèdons aucune statistique pour cette équipe');
            return redirect()->route('matchs.index');
        }

        $stats_service = new StatistiquesUtils();

        $possessionMoyenne = $stats_service->calculPossessionMoyenne($currentEquipe);

        $totalButPour = $stats_service->calculTotalButPour($currentEquipe);

        $nb_cleansheet = $stats_service->calculCleansheet($currentEquipe);

        $pourcentageTirCadres = $stats_service->pourcentageTirsCadres($currentEquipe);

        $passeMoyenne = $stats_service->calculPasseMoyenne($currentEquipe);



        return view('pages.matchs.show', compact('currentEquipe',
            'possessionMoyenne', 'totalButPour', 'nb_cleansheet', 'pourcentageTirCadres', 'passeMoyenne'));
    }
}
