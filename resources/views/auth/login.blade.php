<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>
    
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form method="POST" action="/login">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
  
        

  
          <x-form-field>
            <x-form-label for="salary">Email</x-form-label>
            <div class="mt-2">
              <x-form-input type="email" name="email" :value="old('email')" id="email" required/>
              <x-form-error name="email"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <div class="mt-2">
              <x-form-input type="password" name="password" id="password" required/>
              <x-form-error name="password"/>
            </div>
          </x-form-field>

          
          </div>
        </div>
  
        <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
        <x-form-button>Log In</x-form-button>
        </div>
  </form>

</x-layout>