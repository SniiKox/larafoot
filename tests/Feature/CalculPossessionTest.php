<?php

namespace Tests\Feature;

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
        $possessionMoyenne = 0;

        $stats = [50,60];

        foreach ($stats as $oneMatch) {
		    $possessionMoyenne = $possessionMoyenne + $oneMatch;
        }

        $possessionMoyenne = $possessionMoyenne / sizeof($stats);

        $possessionMoyenne = number_format($possessionMoyenne,2);

        $this->assertEquals($possessionMoyenne, 55.00);
    }
}
