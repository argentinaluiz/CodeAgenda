<?php

use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeAgenda\Entities\Telefone::class, 80)->create(); //Chama a classe de telefone e cria 80 pessoa
    }
}
