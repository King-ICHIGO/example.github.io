<x-layout>

<x-slot:heading>
   Jobs Listings
</x-slot:heading> 

@foreach ($jobs as $job)
<li>
    {{$job['title']}};{{$job['salary']}}

</li>
@endforeach



</x-layout>
