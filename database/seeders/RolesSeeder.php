<?php

namespace Database\Seeders;

use App\Models\Roles;


use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::insert([
           ['role'=>'Administrator'],
           ['role'=>'Menaxher'],
           ['role'=>'Operator']
           
        
        ]);
   
    }
}
