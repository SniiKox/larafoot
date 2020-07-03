<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class CalculCleansheetTest extends TestCase
{
    /**
     * Test permettant de calculer la possession
     *
     * @return void
     */
    public function testCalculCleansheet()
    {
        $nb_cleansheet = 0;

        //on se base sur les buts encaissés par matchs
        $stats = [0, 1, 2, 5, 3, 4, 0];

        $this->assertEquals($nb_cleansheet, 2);
    }
}
