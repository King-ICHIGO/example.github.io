<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Job::create([
            'employer_id' => 1 ,
            'title' => "O'qituvchi" , 
            'salary' => '5 mln'
        ]);
    }
}
