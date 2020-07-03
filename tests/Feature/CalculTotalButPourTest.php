<?php

namespace Tests\Feature;

use App\Http\Utils\StatistiquesUtils;
use PHPUnit\Framework\TestCase;

class CalculTotalButPourTest extends TestCase
{
    /**
     * Test permettant de calculer le nombre de buts marqués au total
     *
     * @return void
     */
    public function testCalculTotalButPour()
    {
        $stats_service = new StatistiquesUtils();
        $currentEquipe = array([
            'BP' => 5
        ],
            [
                'BP' => 0
            ],
            [
                'BP' => 3
            ],
            [
                'BP' => 5
            ],
            [
                'BP' => 2
            ],
            [
                'BP' => 1
            ],
            [
                'BP' => 1
            ],
            [
                'BP' => 3
            ]
        );

        $stats = $stats_service->toObjectsArray($currentEquipe);

        $nombreButTotal = $stats_service->calculTotalButPour($stats);

        $this->assertEquals($nombreButTotal, 20);
    }
}
