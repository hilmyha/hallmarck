<x-app-layout title="Login">
  
  <section class="py-32 md:py-32 flex border bg-gray-100 items-center h-screen">
    <div class="p-4 container grid gap-4 bg-white rounded-lg shadow w-full">
      <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
          Sign in to your account
      </h1>

      <x-form>
        <x-slot name="action">/login</x-slot>
        <x-slot name="method">POST</x-slot>

        <input type="hidden" name="remember" value="true">
        
        <x-partials.input name="input">
          <x-slot name="label">Username</x-slot>
          <x-slot name="name">username</x-slot>
          <x-slot name="type">username</x-slot>
          <x-slot name="placeholder">Your username</x-slot>
        </x-partials.input>

        <x-partials.input name="input">
          <x-slot name="label">Password</x-slot>
          <x-slot name="name">password</x-slot>
            <x-slot name="type">password</x-slot>
            <x-slot name="placeholder">Password</x-slot>
        </x-partials.input>


        <x-partials.button name="submit">
          Log In
        </x-partials.button>

        <p class="text-sm font-light text-gray-500">
          Don’t have an account yet? <a href="/register" class="font-medium text-primary-600 hover:underline">Sign up</a>
        </p>
      </x-form>
    </div>
  </section>


</x-app-layout>