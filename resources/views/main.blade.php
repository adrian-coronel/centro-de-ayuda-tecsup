<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  @vite(['resources/sass/app.scss','resources/js/bootstrap.js','resources/js/app.js','resources/css/app.css'])

  <title>@yield('title')</title>
</head>
<body class="@yield('body-class')">

  <header>
    @yield('nav')
  </header>

  <div class="container">
    <div class="row"> 
      @yield('content')
    </div>
  </div>

  @yield('scripts')

</body>
</html>
