<?php

namespace Database\Seeders;

use App\Models\admin as ModelsAdmin;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsAdmin::Create([


            'name' =>"ali",
            'email' => "ali@ali.com",
            'password' => bcrypt('123456')
            




        ]);
    }
}
