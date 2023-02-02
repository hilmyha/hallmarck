<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hallmarck™ | {{ $title }}</title>

  {{-- font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  @vite('resources/css/app.css')
</head>
<body class="font-josefin">
  
  
  <x-navbar title="Hallmarck"/>

  
  {{-- hero --}}
  <section class="bg-gray-100 mt-20 md:mt-24 overflow-hidden">
    <div class="h-[400px] xl:h-[600px] container flex items-center gap-2 xl:px-14">
      
      <div class=" p-4 w-full">
        <h1 class="mb-4 text-4xl lg:text-5xl font-bold tracking-tight text-gray-900">Select your new <span class="text-primary-600 auto-type"></span> style.</h1>
        <p class="text-lg lg:text-xl mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima praesentium nulla qui deserunt veritatis asperiores accusantium odit sed rerum maiores.</p>

        <button type="button" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-600 rounded-lg text-md px-5 py-2.5 mr-2 mb-2 focus:outline-none">Shop Now</button>
      </div>

      <div class="relative p-4 w-full h-full hidden lg:block">
        
        <img src="{{ asset('assets/img/001.png') }}" class="z-10 absolute -right-20 -bottom-32 object-contain hover:-translate-y-5 transition">

      </div>
    </div>
  </section>


  {{ $slot }}
  

  

  <x-footer title="Hallmarck" />


  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://kit.fontawesome.com/8807866152.js" crossorigin="anonymous"></script>
  @vite('node_modules/flowbite/dist/flowbite.js')
  @vite('resources/js/app.js')
</body>
</html>