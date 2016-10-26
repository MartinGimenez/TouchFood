<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('oferente') -> insert(array(
            'name' => 'Jhon Doe',
            'email' => 'mail@mail.com',
            'password' => bcrypt('123456')
            //'remember_token' => rememberToken()
            
        ));
    }
}
