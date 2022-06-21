<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\cat;
use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
public function cat($id)
{

    $data['cat']=cat::findORFail($id);
    $data['courses']=course::where('cat_id',$id)
    ->paginate(6);
    


    return view('Front.courses.cat')->with($data);


}
public function show($id,$c_id){


    $data['course']=course::findORFail($c_id);
    return view('Front.courses.show')->with($data);
    


}


}
