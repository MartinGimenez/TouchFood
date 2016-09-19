<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BienvenidaTest extends TestCase
{
    /**
     * Test para página principal.
     *
     * @return void
     */
    public function testBienvenida()
    {
        $this->visit('/bienvenida')
             ->see('Bienvenidos a TouchFood');
    }
}
