<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    

    public function create(){
        return view( 'auth.login' );
    }

    public function store(Request $request){
            
        dd(request()->all());
       
    }
        public function logout()
            {
               Auth::logout();
               
               return redirect('/');
            }
        

}
