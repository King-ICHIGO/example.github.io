<?php

    use App\Http\Controller\LoginController;
    use App\Http\Controller\RegisterController;
    use Illuminate\Support\Facades\Route;
    use App\Models\Job;
    use App\Http\Controllers\JobController;

    Route::view('/' , 'home');
    Route::view('/contact' , 'contact');

    Route::resource('jobs' , JobController::class);
    
    // Route::resource('students' , StudentController::class);


    // Auth
    // Register
    Route::get('/register' , [RegisterController::class , 'create']);
    Route::post('/register' , [RegisterController::class , 'store']);


    //Login
    Route::get('/login' , [LoginController::class , 'create']);
    Route::post('/login' , [LoginController::class , 'store']);
    Route::post('/logout' , [LoginController::class , 'logout']);


