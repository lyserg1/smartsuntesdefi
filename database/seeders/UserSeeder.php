<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'email' => 'diego@hotmail.com',
            'password' => bcrypt('falkor21')
        ]);



        User::factory(99)->create();

    }
}
