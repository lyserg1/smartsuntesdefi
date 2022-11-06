<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Poste;
use App\Models\Ruido;
use Illuminate\Support\Str;


class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Poste::create([
            'direccion' => 'Pasaje Assis 591',
            'region' => 'Coquimbo',
            'comuna' => 'La Serena',
            'slug' => Str::slug('Pasaje Assis 591', 'Coquimbo', 'La Serena'),
            'estado' => 'Activo',

        ]);



        Poste::factory(20)->create();


    }
}
