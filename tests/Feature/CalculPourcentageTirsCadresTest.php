<?php

namespace Tests\Feature;

use App\Http\Utils\StatistiquesUtils;
use PHPUnit\Framework\TestCase;

class CalculPourcentageTirsCadresTest extends TestCase
{
    /**
     * Test permettant de le pourcentage de tirs cadrés par rapport au nombre de tir
     *
     * @return void
     */
    public function testPourcentageTirsCadres() {

        $stats_service = new StatistiquesUtils();
        $currentEquipe = array([
            'nb_tir' => 14, 'nb_tir_cadres' => 7
        ],
            [
                'nb_tir' => 12, 'nb_tir_cadres' => 6
            ],
            [
                'nb_tir' => 10, 'nb_tir_cadres' => 5
            ],
            [
                'nb_tir' => 8, 'nb_tir_cadres' => 4
            ],
            [
                'nb_tir' => 20, 'nb_tir_cadres' => 10
            ],
            [
                'nb_tir' => 0, 'nb_tir_cadres' => 0
            ],
            [
                'nb_tir' => 6, 'nb_tir_cadres' => 3
            ],
        );

        $stats = $stats_service->toObjectsArray($currentEquipe);

        $pourcentageTirsCadres = $stats_service->pourcentageTirsCadres($stats);

        $this->assertEquals($pourcentageTirsCadres, 50.00);
    }
}
