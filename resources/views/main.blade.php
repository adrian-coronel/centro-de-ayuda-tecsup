<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @vite(['resources/sass/app.scss','resources/js/bootstrap.js'])

  <title>@yield('title')</title>
</head>
<body>
  <header>
    
    {{-- @include('includes/nav') --}}
  </header>

  <div class="container">
    <div class="row"> 
      @yield('content')
    </div>
  </div>

 
</body>
</html>
