<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(){



        return view('Admin.auth.login');
    }


    public function register(){
        return view('Admin.auth.register');
    }

    public function dologin(Request $requst)
    {

        $data=$requst->validate([
            
            'email'=>'required|email',
            'password'=>'required|string',
        ]);

       if (!auth()->guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']]))
       {
           return back();

       }
       else
       {
        return view('Admin.index');


       }
    
       
       
    }
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect(route('Admin.login'));
    }

}
