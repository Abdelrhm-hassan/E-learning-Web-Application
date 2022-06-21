<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cat;
use App\Models\course;
use App\Models\teatcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class courseController extends Controller
{
    
    
        // show all  catagoeies
        public function index()
    
        {
            $course['data']=course::paginate(20);


            // $course['data']=course::select('id','name','img','spec','desc','email','phone')
            // ->orderBy('id','desc')
            // ->paginate(6);
           
            return view('Admin.course.index')->with($course); 
        
        }
        // view Cearte page
        public function create()
    
        {
            $course['cats']=cat::get();
            $course['teatcher']=teatcher::get();

            return view('Admin.course.create')->with($course); 
        }
        // create new catagory
        // 
        public function store(Request $requst)
    
        {
            // dd($course);
    
            $course=$requst->validate([
                'name'=>'required|string|max:20',
                'price'=>'required|max:11',
                'teatcher_id'=>'required',
                'cat_id'=>'required',
                'img'=>'required|image|mimes:jpg,png,jpeg',
                'spec'=>'required|string|max:190',
                'desc'=>'required|string|max:250',
            ]);


            // save img
            $img=$requst->file('img');
            $img_name=$img->getClientOriginalName();
            $img_extension=$img->getClientOriginalExtension();
            $path=public_path('upload/courses');
            $requst->img->move($path,$img_name);
            $course['img']=$img_name;


           course::create($course);
            
    
            return redirect(route('Admin.course.index')); 
        }
        // update new catagory
    
        public function update(Request $requst)
    
        {
            // dd($course);
    
            $course=$requst->validate([
                'name'=>'required|string|max:20',
                'price'=>'required|string|max:11',
                'cat_id'=>'required',
                'teatcher_id'=>'required',
                'img'=>'required|image|mimes:jpg,png,jpeg',
                'spec'=>'required|string|max:190',
                'desc'=>'required|string|max:250',
            ]);


            // save img
            $img=$requst->file('img');
            $img_name=$img->getClientOriginalName();
            $img_extension=$img->getClientOriginalExtension();
            $path=public_path('upload/courses');
            $requst->img->move($path,$img_name);
            $course['img']=$img_name;


            course::findOrFail($requst->id)->update($course);
            
    
            return redirect(route('Admin.course.index')); 
        }
    
       
        // view edit page 
    
        public function edit($id)
    
        {
    
    
            $course['cats']=cat::get();
            $course['teatcher']=teatcher::get();
             $course['data']=course::findORFail($id);
    
    
    
            return view('Admin.course.edit')->with($course); 
        }
    
        public function delete( $id)
    
        {
    
            $course['data']=course::findOrFail($id);
    
            return view('Admin.course.delete')->with($course); 
        }
        public function dodelete(Request $requst)
    
        {
    
           
            
           $course= course::findOrFail($requst->id);
           $path= 'upload/courses/'.$course->img;
           if(File::exists($path))
           {
               File::delete($path);
           }
           $course->delete();
            
    
            return redirect(route('Admin.course.index')); 
        }
    
    
        


}
