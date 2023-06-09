<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Document</title>
</head>
<body>

  <ul class="flex justify-center">
    <li class="my-10"><a class="px-10" href={{ route('home') }}>Home</a></li>
    <li class="my-10"><a class="px-10" href={{ route('registerationPage') }}>Register</a></li>
    <li class="my-10"><a class="px-10" href={{ route('loginPage') }}>Login</a></li>
    <li class="my-10"><a class="px-10" href={{ route('about') }}>About</a></li>
  </ul>
  
  @yield('content')

</body>
</html>