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
        $stats = [50,60];
        $possessionMoyenne = 0;
        $this->assertEquals($possessionMoyenne, 55.00);
    }
}
