<?php

namespace Database\Seeders;

use App\Models\about;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        about::create([
            'name'=>'banner',
            'content'=>json_encode([
                'head'=>'Welcome to eLEARNING',
                'small_desc'=>'Our mission is to radically change the way people learn. We empower students to learn from top teachers in groups with their friends',
                'desc'=>'Join live interactive classes with lovable peer learning features. Study with the best teachers and compete and interact with your friends.
                Our goal is to upgrade the educational system, add the fun of learning, and make the learning process easier and with high flexibility, to bring out an innovative, educated generation capable of facing challenges and difficulties.
                Sincerely, the administration of the site, Abdo Nagy',
                'img'=>'about.png',
                'feature1'=>'Skilled Instructors',
                'feature2'=>'International Certificate',
                'feature3'=>'Online Classes',
                'feature4'=>' Online Exams',
                'feature5'=>'Monthly Quize',
                'feature6'=>'Daily Taskes',
                



            ]),

        ]);
    }
}
