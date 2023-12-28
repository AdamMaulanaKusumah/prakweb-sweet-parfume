@extends('dasboard.layouts.header') 
 @section('container')
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <!-- Your Company Logo -->
      <div class="flex flex-shrink-0 items-center">
        <img class="h-8 w-auto" src="https://source.unsplash.com/random/250%C3%97250/?user" alt="Your Company">
      </div>

      <!-- Desktop Navigation Links -->
      <div class="hidden sm:block">
        <div class="flex space-x-4">
          <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Home</a>
          <a href="/produk" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Produk</a>
          <a href="/about" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
        </div>
      </div>

      <!-- User Navigation Links -->
      <div class="hidden sm:block">
        <div class="flex space-x-4">
          <a href="/profile" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-3 text-sm font-medium">Profile</a>
          <a href="/settings" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-3 text-sm font-medium">Settings</a>
          <a href="/logout" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-3 text-sm font-medium">Logout</a>
        </div>
      </div>

      <!-- Mobile menu button -->
      <!-- ... (unchanged) ... -->

      <!-- Mobile Navigation Links -->
      <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
          <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Produk</a>
          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
          <a href="/profile" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Profile</a>
          <a href="/settings" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Settings</a>
          <a href="/logout" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Logout</a>
        </div>
      </div>
    </div>
  </div>
</nav>
