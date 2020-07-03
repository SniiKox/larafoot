<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use App\Http\Utils\StatistiquesUtils;

class CalculPasseMoyenneTest extends TestCase
{
    /**
     * Test permettant de calculer le nombre de passe en moyenne
     *
     * @return void
     */
    public function testCalculPasseMoyenne()
    {
        $stats_service = new StatistiquesUtils();
        $currentEquipe = array([
            'nb_passe' => 469
        ],
            [
                'nb_passe' => 654
            ],
            [
                'nb_passe' => 701
            ],
            [
                'nb_passe' => 437
            ],
            [
                'nb_passe' => 566
            ],
            [
                'nb_passe' => 572
            ],
            [
                'nb_passe' => 623
            ]);

        $stats = $stats_service->toObjectsArray($currentEquipe);

        $nb_passe = $stats_service->calculPasseMoyenne($stats);


        $this->assertEquals($nb_passe, 575);
    }
}
