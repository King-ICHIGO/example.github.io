<x-layout>

    <x-slot:heading>
        Login
</x-slot:heading>


    <form method="POST" action="/login">

    @csrf

                  <div class="space-y-12">

                    <div class="border-b border-gray-900/10 pb-12">

                     <h2 class="text-base/7 font-semibold text-gray-900">Login</h2>
     

                   <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      
                   <x-form-field>

                     <x-form-label for="email">Email:</x-form-label>

                    

                <div class="mt-2">
                     <x-form-input name="email" id="email" />
                </div>

                  <div class="mt-5">

                <x-form-error name="email"/>
                 </div>

                </x-form-field>

                 <x-form-field>

                   <x-form-label for="password">Password:</x-form-label>

                
                 <div class="mt-2">

                   <x-form-input type="password" name="password" id="password" />

               </div>

                <div class="mt-5">

               <x-form-error name="password"/>

                 </div>

                </x-form-field>
        


      
                </div>
       
        
              <div class="mt-6 flex items-center justify-end gap-x-6">
             <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
              <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>



        </x-layout>