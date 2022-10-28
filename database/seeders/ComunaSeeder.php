<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comuna;
use App\Models\Region;
use Illuminate\Support\Str;

class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comuna::create([
            'name' => 'La Serena',
            'slug' => Str::slug('La Serena'),


        ]);


        Comuna::factory(99)->create();


    }
}
