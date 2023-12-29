<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Parfume</title>

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.navbar')

    <div class="container mx-auto px-4 ">
        @yield('container')
    </div>

    @include('partials.footer')

</body>
</html>