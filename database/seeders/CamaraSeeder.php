<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camara;
use App\Models\Poste;
use Illuminate\Support\Str;


class CamaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Camara::create([
            'name' => 'La Serena',
            'conteo' => '10',
            'slug' => Str::slug('La Serena'),


        ]);


        Camara::factory(20)->create();
    }
}
