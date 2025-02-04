<x-layout>
    <x-slot:heading>
            Job
    </x-slot:heading>

    <h1><strong>Title:</strong> {{$job['title']}}</h1>
     <h4><strong>Salary:</strong> {{$job['salary]}}</h4>
     <h4><strong>Employer:</strong>{{$job->employer->name}}</h4>




     <div class="mt-6">
     <x-link href="/jobs/{{ $job->id }}/edit">
                   Edit Job
        </x-link>
     </div>

        
</x-layout>