<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class CalculPourcentageTirsCadresTest extends TestCase
{
    /**
     * Test permettant de le pourcentage de tirs cadrés par rapport au nombre de tir
     *
     * @return void
     */
    public function testPourcentageTirsCadres() {

        $nb_tir_total = 0;
        $nb_tir_cadres_total = 0;

        $statsTirs = [14, 12, 10, 8, 20, 0 , 6];
        $statsTirsCadres = [7, 6, 5, 4, 10, 0 , 3];

        foreach ($statsTirs as $oneMatch) {
            $nb_tir_total = $nb_tir_total + $oneMatch;
        }

        foreach ($statsTirsCadres as $oneMatch) {
            $nb_tir_cadres_total = $nb_tir_cadres_total + $oneMatch;
        }

        $pourcentageTirsCadres = ($nb_tir_cadres_total / $nb_tir_total)*100;

        $pourcentageTirsCadres = number_format($pourcentageTirsCadres, 2);

        $this->assertEquals($pourcentageTirsCadres, 50.00);
    }
}
