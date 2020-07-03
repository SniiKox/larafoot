<?php

namespace Tests\Feature;

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
        $nombreButTotal = 0;

        $stats = [5,0,3,5,2,1,1,3];

        foreach ($stats as $oneMatch) {
            $nombreButTotal = $nombreButTotal + $oneMatch;
        }

        $this->assertEquals($nombreButTotal, 20);
    }
}
