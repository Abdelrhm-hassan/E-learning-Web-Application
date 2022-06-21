<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\messages;
use App\Models\newsletlers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function newsletters(Request $requst){
    
        $data= $requst->validate([
            'email'=>'required|email'
       ]);


       newsletlers::create($data);

       return back();
    }
    
    public function messages(Request $requst){
    
        $data= $requst->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'subject'=>'required|string',
            'message'=>'required|string',
            'phone'=>'required|string'
       ]);


       messages::create($data);

       return back();
    }
    public function enroll(Request $requst){
    
        $data= $requst->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'spec'=>'required|string',
            'course_id'=>'required|exists:courses,id'
       ]);

       $old_student=student::select('id')->where('email',$data['email'])->first();
     
       if($old_student==null){

        $student=student::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'spec'=>$data['spec']
 
        ]);
        $student_id=$student->id;

       }
       else{
        $student_id=$old_student->id;


       }

      


       DB::table('course_student')->insert([

            
        'course_id' => $data['course_id'],
        'student_id' => $student_id,
        'created_at' => now(),
        'updated_at' => now()

    ]);


       

       return back();
    }
    
    


}
