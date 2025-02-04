<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){

      
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index' , [
            'jobs' => $jobs ,
    
        ]);
     
    }

    public function create(){

        return view('jobs.create');


    }


    public function store(){

     // Validation
     request()->validate(
        [
            'title' => ['required', 'min:3'],  // Vergul qo‘shildi
            'salary' => ['required', 'numeric']
        ],
        [
            'title.required' => "Title ni kiritishingiz shart!",
            'title.min' => "Title kamida 3 ta belgidan iborat bo'lishi kerak!",
            'salary.required' => "Maoshni kiritishingiz shart!", // Qo'shimcha xabar
            'salary.numeric' => "Maosh faqat raqamlardan iborat bo‘lishi kerak!"
        ]
    );
    // Agar validatsiya muvaffaqiyatli o‘tgan bo‘lsa, ishlashni davom ettirishingiz mumkin
    // Masalan, malumotlarni bazaga saqlash

    return back()->with('success', 'Job successfully created!');
    

 




    Job::create([
        'title' => request('title') , 
        'salary' => request('slary') ,
        'employer_id' => 1
    ]);

    return redirect('/jobs');

    }

    public function show( Job $job){

        return view('jobs.show' , ['job' => $job]);
    }

    public function edit( Job $job){

        return view('jobs.edit' , ['job' => $job]);
    }

    public function update(Job $job){

         // validation
         request()->validate(
            [
                'title' => ['required', 'min:3'],  // Vergul qo‘shildi
                'salary' => ['required', 'numeric']
            ],
        
        );
  
      
        // update

        $job->update([
            'title' => request('title') ,
             'salary' => request('salary')   
        ]);
        // redirect to the show page

        return redirect('/jobs'. $job->id );
    
    }

    public function destroy(Job $job){

       // autorize (On hold ...)


          // delete

          $job->delete();


          // redirect to the jobs page

          return redirect ('/jobs');

    }
}