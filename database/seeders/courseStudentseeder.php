<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courseStudentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<15 ; $i++) { 
            DB::table('course_student')->insert([

            
                'course_id' => rand(1,16),
                'student_id' => rand(1,40),
                'created_at' => now(),
                'updated_at' => now()
        
            ]);
            }

       
        

        
    }
}
