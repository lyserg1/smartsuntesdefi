<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comuna;
use App\Models\Region;
use App\Models\Luz;
use Illuminate\Support\Str;

class LuzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Luz::create([
            'intensidad' => '10',

        ]);



        Luz::factory(20)->create();


    }
}
