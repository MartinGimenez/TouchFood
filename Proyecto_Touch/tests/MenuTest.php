<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MenuTest extends TestCase
{
    /**
     * Test para probar el contenido de los menúes al ser traídos de la BD.
     *
     * @return void
     */
    
    public function testMenuCategorias()
    {
        $this->visit('/menu/categorias')
             ->see('Comidas');
    }

    public function testMenuPollos()
    {
        $this->visit('/menu/comidas/pollos')
             ->see('pollo con fritas');
    }

    public function testMenuCarnes()
    {
        $this->visit('/menu/comidas/carnes')
             ->see('asado de tira');
    }

    public function testMenuCerdos()
    {
        $this->visit('/menu/comidas/cerdos')
             ->see('lechon asado para 2');
    }

    public function testMenuPescados()
    {
        $this->visit('/menu/comidas/pescados')
             ->see('pescado al pesto');
    }

    public function testMenuVegetales()
    {
        $this->visit('/menu/comidas/vegetales')
             ->see('picles');
    }

    public function testMenuPastas()
    {
        $this->visit('/menu/comidas/pastas')
             ->see('ravioles con fileto');
    }

    public function testMenuPizzas()
    {
        $this->visit('/menu/comidas/pizzas')
             ->see('pizza calabresa');
    }

    public function testMenuPicadas()
    {
        $this->visit('/menu/comidas/picadas')
             ->see('tablita caliente');
    }

    public function testMenuMinutas()
    {
        $this->visit('/menu/comidas/minutas')
             ->see('hamburguesa');
    }

    public function testMenuSopas()
    {
        $this->visit('/menu/comidas/sopas')
             ->see('sopa clasica');
    }

    public function testMenuEnsaladas()
    {
        $this->visit('/menu/comidas/ensaladas')
             ->see('ensalada criolla');
    }

    public function testMenuEspeciales()
    {
        $this->visit('/menu/comidas/especiales')
             ->see('paella');
    }

    public function testMenuCafeteria()
    {
        $this->visit('/menu/postres/cafeteria')
             ->see('submarino');
    }

    public function testMenuPostres()
    {
        $this->visit('/menu/postres/postres')
             ->see('flan');
    }

    public function testBebidasSAlcohol()
    {
        $this->visit('/menu/bebidas/bebida-s-alcohol')
             ->see('Coca-Cola ');
    }
    
    public function testBebidasCAlcohol()
    {
        $this->visit('/menu/bebidas/bebida-c-alcohol')
             ->see('Ginebra');
    }


}
