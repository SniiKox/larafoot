<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use App\Http\Utils\StatistiquesUtils;

class CalculCleansheetTest extends TestCase
{
    /**
     * Test permettant de calculer le nombre de cleansheet effectué par une équipe
     *
     * @return void
     */
    public function testCalculCleansheet()
    {
        $stats_service = new StatistiquesUtils();
        $currentEquipe = array([
            'BC' => 1
        ],
        [
            'BC' => 0
        ],
        [
            'BC' => 0
        ]);

        $stats = $stats_service->toObjectsArray($currentEquipe);

        $nb_cleansheet = $stats_service->calculCleansheet($stats);

        $this->assertEquals($nb_cleansheet, 2);
    }
}
