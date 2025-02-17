<x-layout>

    <x-slot:heading>
        Create Job
</x-slot:heading>


    <form method="POST" action="/jobs">

    @csrf

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Create Job</h2>
     

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      
      <x-form-field>
      <x-form-label for="title">Job Ttile</x-form-label>

    <label for="title" class="block text-sm/6 font-medium text-gray-900">Job Title</label>
    <div class="mt-2">
      <x-form-input name="title" id="title" placeholder="CEO"/>
    </div>

      <div class="mt-5">

    <x-form-error name="title"/>
      </div>

      </x-form-field>

      <x-form-field>
      <x-form-label for="salary">Job Salary</x-form-label>

    <label for="title" class="block text-sm/6 font-medium text-gray-900">Job Title</label>
    <div class="mt-2">
      <x-form-input name="salary" id="title" placeholder="50.000 USD"/>
    </div>

      <div class="mt-5">

    <x-form-error name="salary"/>
      </div>

      </x-form-field>
        


      
      </div>
       
        
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>



</x-layout>
