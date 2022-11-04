<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Poste;
use App\Models\Ruido;
use Illuminate\Support\Str;

class RuidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Ruido::create([
            'cantidad' => '5',


        ]);



        Ruido::factory(10)->create();


    }
}
