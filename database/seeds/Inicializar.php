<?php

use Illuminate\Database\Seeder;
use App\Nota;
use App\User;

class Inicializar extends Seeder
{
    public function run(){

        // crear notas ficticias
        $nota = new Nota();
        $nota->descripcion = 'descripcion nota 1, solo para ejemplo';
        $nota->urgencia = 'alta';
        $nota->save();

        $nota = new Nota();
        $nota->descripcion = 'descripcion nota 2, solo para ejemplo';
        $nota->urgencia = 'alta';
        $nota->save();

        $nota = new Nota();
        $nota->descripcion = 'descripcion nota 3, solo para ejemplo';
        $nota->urgencia = 'alta';
        $nota->save();

        $nota = new Nota();
        $nota->descripcion = 'descripcion nota 4, solo para ejemplo';
        $nota->urgencia = 'baja';
        $nota->save();
        
        $nota = new Nota();
        $nota->descripcion = 'descripcion nota 5, solo para ejemplo';
        $nota->urgencia = 'baja';
        $nota->terminado = 1;
        $nota->save();

        $nota = new Nota();
        $nota->descripcion = 'descripcion nota 5, solo para ejemplo';
        $nota->urgencia = 'baja';
        $nota->terminado = 1;
        $nota->save();
    }
}
