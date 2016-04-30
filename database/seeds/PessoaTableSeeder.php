<?php

use Illuminate\Database\Seeder;

class PessoaTableSeeder extends Seeder
{

    public function run()
    {
        factory(\AgendaLumen\Entities\Pessoa::class, 30)->create();
    }
}
