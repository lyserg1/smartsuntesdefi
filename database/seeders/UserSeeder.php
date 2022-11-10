<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Poste;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name' => 'Diego Godoy',
            'email' => 'diego11@gmail.com',
            'password' => bcrypt('falkor31')
        ]);



        User::factory(20)->create();

    }
}
