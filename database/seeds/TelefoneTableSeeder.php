<?php

use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder
{

    public function run()
    {
        factory(\AgendaLumen\Entities\Telefone::class, 80)->create();
    }
}
