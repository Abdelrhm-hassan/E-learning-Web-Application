<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\teatcher;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\File;
use Image;

class teatcherController extends Controller
{
    
    
        // show all  catagoeies
        public function index()
    
        {
            $teatcher['data']=teatcher::paginate(10);


            // $teatcher['data']=teatcher::select('id','name','img','spec','desc','email','phone')
            // ->orderBy('id','desc')
            // ->paginate(6);
           
            return view('Admin.teatcher.index')->with($teatcher); 
        
        }
        // view Cearte page
        public function create()
    
        {
            return view('Admin.teatcher.create'); 
        }
        // create new catagory
        // 
        public function store(Request $requst)
    
        {
            // dd($teatcher);
    
            $teatcher=$requst->validate([
                'name'=>'required|string|max:20',
                'img'=>'required|string',
                'phone'=>'required|string|max:11',
                'email'=>'required|email',
                'img'=>'required|image|mimes:jpg,png,jpeg',
                'spec'=>'required|string|max:190',
                'desc'=>'required|string|max:250',
            ]);


            // save img
            $img=$requst->file('img');
            $img_name=$img->getClientOriginalName();
            $img_extension=$img->getClientOriginalExtension();
            $path=public_path('upload/teatchers');
            $requst->img->move($path,$img_name);
            $teatcher['img']=$img_name;


           teatcher::create($teatcher);
            
    
            return redirect(route('Admin.teatcher.index')); 
        }
        // update new catagory
    
        public function update(Request $requst)
    
        {
            // dd($teatcher);
    
            $teatcher=$requst->validate([
                'name'=>'required|string|max:20',
                'img'=>'required|string',
                'phone'=>'required|string|max:11',
                'email'=>'required|email',
                'img'=>'required|image|mimes:jpg,png,jpeg',
                'spec'=>'required|string|max:190',
                'desc'=>'required|string|max:250',
            ]);


            // save img
            $img=$requst->file('img');
            $img_name=$img->getClientOriginalName();
            $img_extension=$img->getClientOriginalExtension();
            $path=public_path('upload/teatchers');
            $requst->img->move($path,$img_name);
            $teatcher['img']=$img_name;


            teatcher::findOrFail($requst->id)->update($teatcher);
            
    
            return redirect(route('Admin.teatcher.index')); 
        }
    
       
        // view edit page 
    
        public function edit($id)
    
        {
    
    
             $teatcher['data']=teatcher::findORFail($id);
    
    
    
            return view('Admin.teatcher.edit')->with($teatcher); 
        }
    
        public function delete( $id)
    
        {
    
            $teatcher['data']=teatcher::findOrFail($id);
    
            return view('Admin.teatcher.delete')->with($teatcher); 
        }
        public function dodelete(Request $requst)
    
        {
    
           
            
           $teatcher= teatcher::findOrFail($requst->id);
           $path= 'upload/teatchers/'.$teatcher->img;
           if(File::exists($path))
           {
               File::delete($path);
           }
           $teatcher->delete();
            
    
            return redirect(route('Admin.teatcher.index')); 
        }
    
    
        
    
    }
