<?php

namespace Database\Seeders;
use App\Models\Poste;
use App\Models\Clima;
use App\Models\Ruido;
use App\Models\Camara;
use App\Models\Imagen;
use App\Models\Luz;
use App\Models\Region;
use App\Models\Comuna;


use Illuminate\Support\Facades\Storage;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call(UserSeeder::class);

        Poste::factory(5)->create();
       /* Clima::factory(14)->create(); */
        /* Camara::factory(2)->create();
        Imagen::factory(10)->create();
        Region::factory(10)->create();
        Comuna::factory(10)->create();
        Luz::factory(10)->create(); */
        Ruido::factory(10)->create();


    }
}
