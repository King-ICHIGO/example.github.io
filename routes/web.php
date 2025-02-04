<?php

    use Illuminate\Support\Facades\Route;
    use App\Models\Job;
    use App\Http\Controllers\JobController;

    Route::view('/' , 'home');
    Route::view('/contact' , 'contact');

    Route::resource('jobs' , JobController::class);
    
    // Route::resource('students' , StudentController::class);


    // Auth
    // Register
    Route::get('/register' , [App\Http\Controller\RegisterController::class , 'create']);
    Route::post('/register' , [App\Http\Controller\RegisterController::class , 'store']);


    //Login
    Route::get('/login' , [App\Http\Controller\LoginController::class , 'create']);
    Route::post('/login' , [App\Http\Controller\LoginController::class , 'store']);


