<?php

namespace App\Http\Utils;


class StatistiquesUtils
{
    public function calculPossessionMoyenne($currentEquipe)
    {
        $possessionMoyenne = 0;

        foreach ($currentEquipe as $oneMatch) {
            $possessionMoyenne = $possessionMoyenne + $oneMatch->possession;
        }

        $possessionMoyenne = $possessionMoyenne / sizeof($currentEquipe);

        return number_format($possessionMoyenne,2);
    }

    public function calculTotalButPour($currentEquipe)
    {
        $nombreButTotal = 0;

        foreach ($currentEquipe as $oneMatch) {
            $nombreButTotal = $nombreButTotal + $oneMatch->BP;
        }

        return $nombreButTotal;
    }

    public function calculCleansheet($currentEquipe) {
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

    public function pourcentageTirsCadres($currentEquipe) {

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

    public function calculPasseMoyenne($currentEquipe)
    {
        $nb_passe = 0;

        foreach ($currentEquipe as $oneMatch) {
            $nb_passe = $nb_passe + $oneMatch->nb_passe;
        }

        $nb_passe = number_format($nb_passe / sizeof($currentEquipe), 0);

        return $nb_passe;
    }

    public function toObjectsArray($currentEquipe)
    {
        $list = array();

        foreach ($currentEquipe as $oneMatch)
        {
            $object = new \stdClass();
            foreach ($oneMatch as $key => $value)
            {
                $object->$key = $value;
            }
            $list[]=$object;
        }

        return $list;
    }
}
