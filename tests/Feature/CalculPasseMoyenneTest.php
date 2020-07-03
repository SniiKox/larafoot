<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class CalculPasseMoyenneTest extends TestCase
{
    /**
     * Test permettant de calculer le nombre de passe en moyenne
     *
     * @return void
     */
    public function testCalculPasseMoyenne()
    {
        $nb_passe = 0;

        $stats = [469, 654, 701, 437, 566, 572, 623];

        foreach ($stats as $oneMatch) {
		    $nb_passe = $nb_passe + $oneMatch;
        }

        $nb_passe = number_format($nb_passe / sizeof($stats), 0);

        $this->assertEquals($nb_passe, 575);
    }
}
