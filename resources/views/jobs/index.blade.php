<x-layout>

<x-slot:heading>
   Jobs Listings
</x-slot:heading> 
<div class="space-y-4">
@foreach ($jobs as $job)

<a href="/jobs/{{$job['id']}}" class="bg-gray-300 px-4 py-6 block border border-gray-200 rounded-lg">
<li>
    <strong>{{$job->employer->name}}</strong> -- {{$job["title"]}};{{$job["salary"]}}

</li>
    @endforeach
    </div>
    <div class="py-3">

    {{$jobs->links()}}

    </div>

   

</x-layout>
