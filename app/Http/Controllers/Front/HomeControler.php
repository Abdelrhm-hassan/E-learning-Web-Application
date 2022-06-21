<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\feedback;
use App\Models\course;
use App\Models\student;
use App\Models\teatcher;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    //
    function index(){

        
        // last coursers Db
        $data['courses']=course::select('id','name','desc','cat_id','teatcher_id','img','price')
        ->orderBy('id','desc')
        ->take(3)
        ->get();

        // best teatcher DB

        $data['teatchers']=teatcher::select('id','name','spec','img',)
        ->orderBy('id','asc')
        ->take(4)
        ->get();
    
        // feedback Db
        $data['feedback']=feedback::select('id','name','feed','spec','img',)
        ->orderBy('id','desc')
        ->take(4)
        ->get();

        // dd($data);

        return view ("Front\index")->with($data);
    }
    public function contact(){
        return view('Front.contact');
    }
    public function about(){

        // content on about page
        $data['conc']=about::select('content')->where('name','banner')->first();
        // best teatcher DB

        $data['teatchers']=teatcher::select('id','name','spec','img',)
        ->orderBy('id','asc')
        ->take(4)
        ->get();
        return view('Front.about')->with($data);
    }
}

