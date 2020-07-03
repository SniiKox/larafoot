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

        $pourcentageTirsCadres = 0;

        $statsTirs = [14, 12, 10, 8, 20, 0 , 6];
        $statsTirsCadres = [7, 6, 5, 4, 10, 0 , 3];

        $pourcentageTirsCadres = number_format($pourcentageTirsCadres, 2);

        $this->assertEquals($pourcentageTirsCadres, 50.00);
    }
}
