<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    

    public function create(){
        return view( 'auth.register' );
    }

    public function store(Request $request){
              // validation

              $request->validate([
                'firstname' => ['required' , 'string' , 'max:256'],
                'email' => ['required' , 'string' , 'email' , 'max:256' , 'unique.users'],
                'password' => ['required' , 'string' , 'max:6' , 'confirmed'], // password_confirmation
            ]);
    
            // create 
    
            $user = User::create([
                'firstname' => $request->firstname ,
                'emaikl' => $request->email,
                'password' => Hash::make($request->password)
            ]);
    
            // login

            Auth::login($user);

            // redirect

            return redirect('/jobs');
       
    }

}
