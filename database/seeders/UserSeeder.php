<?php

namespace Database\Seeders;

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
       User::create([
          
          'name'=>'admin',
         'id'=>1,
          'email'=>'admin@gmail.com',
          'password'=>bcrypt('admin@2022#'),
        'remember_token' => null,


        
        
        ]);
    }
}
