<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cat;
use App\Models\student;
use App\Models\teatcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class studentController extends Controller
{
     
    
        // show all  catagoeies
        public function index()
    
        {
            $student['data']=student::paginate(20);


            // $student['data']=student::select('id','name','img','spec','desc','email','phone')
            // ->orderBy('id','desc')
            // ->paginate(6);
           
            return view('Admin.student.index')->with($student); 
        
        }
        // view Cearte page
        public function create()
    
        {
            $student['cats']=cat::get();
            $student['teatcher']=teatcher::get();

            return view('Admin.student.create')->with($student); 
        }
        // create new catagory
        // 
        public function store(Request $requst)
    
        {
            // dd($student);
    
            $student=$requst->validate([
                'name'=>'required|string|max:20',
                'email'=>'required|email|unique:students',
               'phone'=> 'required|max:11',
                'img'=>'required|image|mimes:jpg,png,jpeg',
                'spec'=>'required|string|max:190',
                'desc'=>'required|string|max:250',
            ]);


            // save img
            $img=$requst->file('img');
            $img_name=$img->getClientOriginalName();
            $img_extension=$img->getClientOriginalExtension();
            $path=public_path('upload/student');
            $requst->img->move($path,$img_name);
            $student['img']=$img_name;


           student::create($student);
            
    
            return redirect(route('Admin.student.index')); 
        }
        // update new catagory
    
        public function update(Request $requst)
    
        {
            // dd($student);
            $student=$requst->validate([
                'name'=>'required|string|max:20',
                'email'=>'required|email',
               'phone'=> 'required|max:11',
                'img'=>'required|image|mimes:jpg,png,jpeg',
                'spec'=>'required|string|max:190',
                'desc'=>'required|string|max:250',
            ]);

            // save img
            $img=$requst->file('img');
            $img_name=$img->getClientOriginalName();
            $img_extension=$img->getClientOriginalExtension();
            $path=public_path('upload/student');
            $requst->img->move($path,$img_name);
            $student['img']=$img_name;


            student::findOrFail($requst->id)->update($student);
            
    
            return redirect(route('Admin.student.index')); 
        }
    
       
        // view edit page 
    
        public function edit($id)
    
        {
    
    
            $student['cats']=cat::get();
            $student['teatcher']=teatcher::get();
             $student['data']=student::findORFail($id);
    
    
    
            return view('Admin.student.edit')->with($student); 
        }
    
        public function delete( $id)
    
        {
    
            $student['data']=student::findOrFail($id);
    
            return view('Admin.student.delete')->with($student); 
        }
        public function dodelete(Request $requst)
    
        {
    
           
            
           $student= student::findOrFail($requst->id);
           $path= 'upload/student/'.$student->img;
           if(File::exists($path))
           {
               File::delete($path);
           }
           $student->delete();
            
    
            return redirect(route('Admin.student.index')); 
        }
        // show courses
        public function show( $id)
    
        {
    
            $student['data']=student::findOrFail($id)->course;
    
            return view('Admin.student.show')->with($student); 
        }
    }

    
    
    
