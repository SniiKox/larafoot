<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class CalculCleansheetTest extends TestCase
{
    /**
     * Test permettant de calculer le nombre de cleansheet effectué par une équipe
     *
     * @return void
     */
    public function testCalculCleansheet() {
        $nb_cleansheet = 0;

        // On se base sur les buts encaissés par matchs
        $stats = [0, 1, 2, 5, 3, 4, 0];

        foreach ($stats as $oneMatch) {

            // On regarde si le nombre de but pris est à 0
            if($oneMatch == 0) {
                $nb_cleansheet = $nb_cleansheet + 1;
            }
        }

        $this->assertEquals($nb_cleansheet, 2);
    }
}
