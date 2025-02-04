<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    

    public function create(){
        return view( 'auth.login' );
    }

    public function store(Request $request){
            
        // validation

            $attribute = $request->validate([
                'email' => ['required' , 'email'],
                'password' => ['required'],

            ]);


        // check the user

            if(! Auth::attempt($attributes)){
                throw_ValidationException::withMessages([
                    'email' => 'The provided credentials do not match our records.' ,
                ]); 
    
            }

        // session regenerate

            $request->session()->regenerate();

        // redirect to jobs page  

        return redirect('jobs');

       
    }
        public function logout()
            {
               Auth::logout();
               
               return redirect('/');
            }
        

}
