<?php

use Illuminate\Database\Seeder;
use App\Nota;
use App\User;

class Inicializar extends Seeder
{
    public function run(){

        factory(Nota::class, 4)->create();
    }
}
