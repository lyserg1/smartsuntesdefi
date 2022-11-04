<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clima;
use Illuminate\Support\Str;

class ClimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Clima::create([
            'temperatura' => '21',
            'humedad' => '50',
            'fechaActual' => '2021-05-01',
            'mes' => '5',


        ]);


        Clima::factory(15)->create();

    }
}
