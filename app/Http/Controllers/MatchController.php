<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\Match;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\IsEmpty;

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

        if(count($currentEquipe) == 0){
            flashy()->error('Désolé, nous ne possèdons aucune statistique pour cette équipe');
            return redirect()->route('matchs.index');
        }

        $possessionMoyenne = $this->calculPossessionMoyenne($currentEquipe);

        $totalButPour = $this->calculTotalButPour($currentEquipe);

        $nb_cleansheet = $this->calculCleansheet($currentEquipe);

        $pourcentageTirCadres = $this->pourcentageTirsCadres($currentEquipe);

        $passeMoyenne = 0;

        return view('pages.matchs.show', compact('currentEquipe',
            'possessionMoyenne', 'totalButPour', 'nb_cleansheet', 'pourcentageTirCadres', 'passeMoyenne'));
    }


    private function calculPossessionMoyenne($currentEquipe)
    {
        $possessionMoyenne = 0;

        foreach ($currentEquipe as $oneMatch) {
		    $possessionMoyenne = $possessionMoyenne + $oneMatch->possession;
        }

        $possessionMoyenne = $possessionMoyenne / sizeof($currentEquipe);

        return number_format($possessionMoyenne,2);
    }

    private function calculTotalButPour($currentEquipe)
    {
        $nombreButTotal = 0;

        foreach ($currentEquipe as $oneMatch) {
            $nombreButTotal = $nombreButTotal + $oneMatch->BP;
        }

        return $nombreButTotal;
    }

    private function calculCleansheet($currentEquipe) {
        $nb_cleansheet = 0;

        // On se base sur les buts encaissés par matchs

        foreach ($currentEquipe as $oneMatch) {

            // On regarde si le nombre de but pris est à 0
            if($oneMatch->BC == 0) {
                $nb_cleansheet = $nb_cleansheet + 1;
            }
        }

        return $nb_cleansheet;
    }

    private function pourcentageTirsCadres($currentEquipe) {

        $nb_tir = 0;
        $nb_tir_cadres = 0;

        foreach ($currentEquipe as $oneMatch) {
            $nb_tir = $nb_tir + $oneMatch->nb_tir;
            $nb_tir_cadres = $nb_tir_cadres + $oneMatch->nb_tir_cadres;
        }

        $pourcentageTirsCadres = ($nb_tir_cadres / $nb_tir)*100;

        $pourcentageTirsCadres = number_format($pourcentageTirsCadres, 2);

        return $pourcentageTirsCadres;
    }

}
