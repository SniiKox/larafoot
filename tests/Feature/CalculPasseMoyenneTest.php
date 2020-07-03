<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class CalculPasseMoyenneTest extends TestCase
{
    /**
     * Test permettant de calculer la possession
     *
     * @return void
     */
    public function testCalculPasseMoyenne()
    {
        $nb_passe = 0;

        //on se base sur les buts encaissés par matchs
        $stats = [469, 654, 701, 437, 566, 572, 623];

        $this->assertEquals($nb_passe, 575);
    }
}
