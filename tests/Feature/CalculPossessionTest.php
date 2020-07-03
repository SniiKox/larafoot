<?php

namespace Tests\Feature;

use App\Http\Utils\StatistiquesUtils;
use PHPUnit\Framework\TestCase;

class CalculPossessionTest extends TestCase
{
    /**
     * Test permettant de calculer la possession
     *
     * @return void
     */
    public function testCalculPossessionMoyenne()
    {
        $stats_service = new StatistiquesUtils();
        $currentEquipe = array([
            'possession' => 50
        ],
            [
                'possession' => 60
            ]);

        $stats = $stats_service->toObjectsArray($currentEquipe);

        $possessionMoyenne = $stats_service->calculPossessionMoyenne($stats);

        $this->assertEquals($possessionMoyenne, 55.00);
    }
}
