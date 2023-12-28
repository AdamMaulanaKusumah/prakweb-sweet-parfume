<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  @vite('resources/css/app.css')  
</head>

<body>
  
  @include('partials.navbar')

  
  <div class="container my-5">
    @yield('container')
  </div>
  {{-- @include('partials.footer') --}}
  {{-- @include('partials.footer') --}}

</body>

</html>
