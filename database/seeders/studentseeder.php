<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\student;

class studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(student::class,40)->create();
        student::factory()->count(40)->create(); 
        
    }
}
