<?php

namespace App\Http\Controllers\Admin\cats;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Controller;
use App\Models\cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class catsController extends Controller
{
    // show all  catagoeies
    public function index()

    {
        $data['cats']=cat::select('id','name')->paginate(10);
        return view('Admin.cats.index')->with($data); 
    
    }
    // view Cearte page
    public function create()

    {
        return view('Admin.cats.create'); 
    }
    // create new catagory
    // 
    public function store(Request $requst)

    {

        $data=$requst->validate([
            'name'=>'required|string|max:20',
        ]);
        
       cat::create($data);
        

        return redirect(route('Admin.cats.index')); 
    }
    // update new catagory

    public function update(Request $requst)

    {

        $data=$requst->validate([
            'name'=>'required|string|max:20',
        ]);
        
       cat::findOrFail($requst->id)->update($data);
        

        return redirect(route('Admin.cats.index')); 
    }

   
    // view edit page 

    public function edit($id)

    {


         $data['cats']=cat::findORFail($id);



        return view('Admin.cats.edit')->with($data); 
    }

    public function delete( $id)

    {

        $data['cats']=cat::findOrFail($id);

        return view('Admin.cats.delete')->with($data); 
    }
    public function dodelete(Request $requst)

    {

        $data=$requst->validate([
            'name'=>'required|string|max:20',
        ]);
        
       cat::findOrFail($requst->id)->delete($data);
        

        return redirect(route('Admin.cats.index')); 
    }


    

}
