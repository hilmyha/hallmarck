<x-app-layout title="Register">
  
  <section class="py-32 md:py-32 flex border bg-gray-100 items-center h-screen">
    <div class="p-4 container grid gap-4 bg-white rounded-lg shadow w-full">
      <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
          Register your account
      </h1>

      <x-form>
        <x-slot name="action">/register</x-slot>
        <x-slot name="method">POST</x-slot>

        <input type="hidden" name="remember" value="true">

        <x-partials.input name="input">
          <x-slot name="label">Username</x-slot>
          <x-slot name="name">username</x-slot>
          <x-slot name="type">text</x-slot>
          <x-slot name="placeholder">Your Username</x-slot>
        </x-partials.input>

        <x-partials.input name="input">
          <x-slot name="label">Name</x-slot>
          <x-slot name="name">name</x-slot>
          <x-slot name="type">text</x-slot>
          <x-slot name="placeholder">Your Name</x-slot>
        </x-partials.input>
        
        <x-partials.input name="input">
          <x-slot name="label">Email Address</x-slot>
          <x-slot name="name">email</x-slot>
          <x-slot name="type">email</x-slot>
          <x-slot name="placeholder">somebody@email.com</x-slot>
        </x-partials.input>

        <x-partials.input name="input">
          <x-slot name="label">Password</x-slot>
          <x-slot name="name">password</x-slot>
          <x-slot name="type">password</x-slot>
          <x-slot name="placeholder">Password</x-slot>
        </x-partials.input>


        <x-partials.button name="submit">
          Sign In
        </x-partials.button>

        <p class="text-sm font-light text-gray-500">
          Already have an account? <a href="/login" class="font-medium text-primary-600 hover:underline">Login</a>
        </p>
      </x-form>
    </div>
  </section>


</x-app-layout>