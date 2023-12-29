<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vanila Css -->
    @vite('resources/css/app.css')
    <title>Synchronize</title>
    <!-- AOS css animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="/img/png"href="/img/2.jpeg">
</head>
<body>
    <!-- header navbar start -->
    <header class="w-full">
      <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex flex-shrink-0 items-center">
                <img class="h-8 w-auto" src="https://source.unsplash.com/random/250%C3%97250/?parfume" alt="Your Company">
              </div>
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Home</a>
                  <a href="/produk" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Produk</a>
                  <a href="/about" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">about</a>
                </div>
              </div>
            </div>
      
            <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <a href="/register" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-3  text-sm font-medium {{ Request::is('auth/register ') ? 'active' : '' }}">Register</a>
                  <a href="/login" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-3 text-sm font-medium {{ Request::is('auth/login') ? 'active' : '' }}">Login</a>
                </div>
              </div>
            </div>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium " aria-current="page ">Homed</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Produk</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
          </div>
        </div>
      </nav>
    </header>
    <!-- header navbar end -->

    <section id="home" class=" pb-28 lg:pb-6 bg-amber-400">
        <div class="flex flex-col justify-center">
            <h2 class="text-black text-center mx-auto font-bold mb-6 md:text-3xl lg:text-xl"></h2>
            @if (session()->has('success'))
                <div class="mx-auto text-center text-blue-900 font-bold" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="mx-auto text-center text-red-900 font-bold" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="/login" method="post" class="max-w-[400px] w-full mx-auto bg-black shadow-xl p-8 px-8 rounded-lg">
                <h2 class="text-4xl text-white font-bold text-center">Login</h2>
                @csrf
                    <div class="flex flex-col py-2">
                        <label for="email" class="text-white">Username</label>
                        <input type="email" name="email" class=" form-control @error('email') is-invalid @enderror text-black rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-600 focus:bg-gray-200 focus:outline-none"
                        id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    </div>
                    <div class="flex flex-col py-2" >
                        <label  for="password" class="text-white">Password</label>
                        <div class="relative">
                            <input id="password" placeholder="Password" type="password" name="password" 
                            class="text-black w-full rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-600 focus:bg-gray-200 focus:outline-none">
                        </div>
                        <div class="mt-5">
                            <input id="openpw" type="checkbox">
                            <label for="" class="text-white">show password</label>
                        </div>
                        <div class="mt-2">
                            <small class=" text-left mr-20 mt-2 text-white">sudah punya akun?<a href="/register" class="hover:text-blue-600">Register</a></small>
                        </div>
                    <button class="text-white w-full my-5 py-2 font-semibold rounded-lg bg-amber-600 hover:shadow-lg hover:shadow-amber-600/50 ease-in-out duration-300">Sign In</button>
                    </div>
            </form>

        </div>
        
    </section>

    <!-- Section Footer  -->
    <footer class="bg-black text-white text-xs sm:text-base text-center pt-4 pb-4 font-mono">
		© Copyright 2023 - <span class="text-yellow-300">PT ISAL MANCITY</span>
	</footer>

    <script>
        let openpw = document.getElementById("openpw");
        let password = document.getElementById("password");

        openpw.onclick = function () {
            if(password.type == "password") {
                password.type = "text";
            } else{
                password.type = "password";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>   
</body>
</html>