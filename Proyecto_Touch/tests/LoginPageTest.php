<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserPage()
    {
        $this->visit('/user/login')
             ->see('Registra la mesa al sistema');
    }

    public function testAdminPage()
    {
        $this->visit('/admin/login')
             ->see('Ingrese Admin');
    }
}
