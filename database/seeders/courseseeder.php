<?php

namespace Database\Seeders;

use App\Models\course;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class courseseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cat loop
        for ($i=1; $i <3 ; $i++) { 
            //teatcher loop
            for ($j=1; $j <3 ; $j++) { 
                course::Create([


                    'name' =>"course num $j cat num $j",
                    'cat_id' => $i,
                    'teatcher_id' => rand(1,9),
                    'spec' => "the best course of ",
                    'desc' => "the best course of the best course of the best course of the best course of ",
                    'price' => rand(1000,7000),
                    'img' =>  "$i$j.png"





                ]);
            }
        }
    }
}
