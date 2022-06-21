<?php

namespace Database\Seeders;

use App\Models\teatcher;
use Illuminate\Database\Seeder;

class teatcherseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <10 ; $i++) { 
           
        teatcher::create([

            'name' =>"ali",
            'email' =>"ali@gmial.com",
            'phone' =>"0324234",
            'spec' =>" web develper",
            'desc' =>"ali the best web develperali the best web develperali the best web develper",
            'img' =>"$i.jpg"

        ]);
        }
    }
}
