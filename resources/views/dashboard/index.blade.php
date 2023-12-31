@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat datang {{ auth()->user()->name }}</h1> 
        <img src="/img/1.jpeg" alt="">
    </div>
    
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <!-- Tambahkan link CDN Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles go here if needed */
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <header class="bg-white shadow">
        <div class="container mx-auto py-4 px-8">
            <h1 class="text-4xl font-bold text-gray-800">Produk Kami</h1>
            <p class="text-gray-600 mt-2">Temukan produk berkualitas di sini. <span>Tersenyumlah dengan aroma keharuman yang memikat! Selamat datang di toko kami, tempat di mana harumnya keindahan bertemu dengan kesempurnaan. Temukan wewangian yang mencerminkan jiwa Anda di sini</span></p>
        </div>
    </header>

    <main class="container mx-auto my-8 px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Produk 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/random/250%C3%97250/?parfume alt="Produk 1" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Sweet Parfum</h2>
                    <p class="text-gray-700 mt-2">Black Opium</p>
                    <p class="text-gray-700 mt-2">Rp 100.000</p>
                    <a href="" href="" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Lihat Detail</a>
                </div>
            </div>

            <!-- Produk 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/random/250%C3%97250/?parfume" alt="Produk 2" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Sweet Parfum</h2>
                    <p class="text-gray-700 mt-2">Black Opium.</p>
                    <p class="text-gray-700 mt-2">Rp 150.000</p>
                    <a href="detail.blade.php" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Lihat Detail</a>
                </div>
            </div>

            <!-- Produk 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/random/250%C3%97250/?parfume" alt="Produk 3" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Sweet Parfum</h2>
                    <p class="text-gray-700 mt-2">Black Opium.</p>
                    <p class="text-gray-700 mt-2">Rp 200.000</p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Lihat Detail</a>
                </div>
            </div>
        </div>
    </main>

    <main class="container mx-auto my-8 px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Produk 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/random/250%C3%97250/?parfume" alt="Produk 1" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Sweet Parfum</h2>
                    <p class="text-gray-700 mt-2">Black Opium.</p>
                    <p class="text-gray-700 mt-2">Rp 100.000</p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Lihat Detail</a>
                </div>
            </div>

            <!-- Produk 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/random/250%C3%97250/?parfume" alt="Produk 2" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Sweet Parfum</h2>
                    <p class="text-gray-700 mt-2">Black Opium.</p>
                    <p class="text-gray-700 mt-2">Rp 150.000</p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Lihat Detail</a>
                </div>
            </div>

            <!-- Produk 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://source.unsplash.com/random/250%C3%97250/?parfume" alt="Produk 3" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">Sweet Parfum</h2>
                    <p class="text-gray-700 mt-2">Black Opium.</p>
                    <p class="text-gray-700 mt-2">Rp 200.000</p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Lihat Detail</a>
                </div>
            </div>
        </div>
    </main>



    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Sweet's Parfum</p>
        </div>
    </footer>
</body>

</html>

@endsection
