@extends('layouts.main')

@section('container')
<!-- Logo Produk -->
<div class="bg-white">
  <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-15 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
    <div>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl ">Sweet's Parfume</h2>
      <p class="mt-4 text-gray-500">Dengan adanya moto tersebut, kami selalu melakukan perbaikan untuk mencapai dan semakin menyempurnakannya. 

Untuk keaslian parfum yang kami jual, kita bekerjasama dengan semua distributor resmi parfum original di Indonesia, karena itu kami yakin bahwa parfum yang kami jual adalah 100% Original. 

Dalam hal harga kami tentu menjadi Benchmark dari toko online parfum yang lain, karena kami selalu memberikan harga yang terbaik untuk konsumen kami. Untuk harga parfum yang kami tawarkan, kami yakin harga kami MURAH. Kami menggunakan jasa pengiriman ternama untuk mengirim semua pesanan parfum dari customer kami, hal ini untuk menjamin bahwa parfum yang dipesan sampai sesuai dengan skedul (jadwal) yang sudah diinformasikan. Hal ini adalah salah satu usaha kami untuk mencapai moto kami CEPAT. .</p>


        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Netstars Team</h2>
      <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p>

      </dl>
    </div>
    <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8 block">
      <a href="/public">
      <img src="/img/sweets.png" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg ">
      </a>
      <a href="/public">
      <img src="/img/Netstars.png" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg ">
      </a>
    </div>
  </div>
  

<div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-15 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
    <figure class="flex flex-col items-center justify-center p-8 text-center  border-b border-gray-100 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-100">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">213040086</h3>
        </blockquote>
        <figcaption class="flex items-center justify-center ">
          <a  href="/public"></a>
            <img class="grid items-center w-10 h-15 flex" src="/img/maulana.jpeg-min.jpeg" alt="profile picture">
            </a>
            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                <div>Adam Maulana Kusumah</div>
                <div class="text-sm text-gray-500 dark:text-gray-400 ">Front End Developer</div>
            </div>
        </figcaption>    
    </figure>
    <figure class="flex flex-col items-center justify-center p-8 text-center  border-b border-gray-100 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
            <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
        </blockquote>
        <figcaption class="flex items-center justify-center ">
          <a href="/public">
            <img class="rounded-full w-10 h-10" src="/img/Nizarr.JPG" alt="profile picture">
            </a>
            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                <div>Moch. Nizar Alfattan</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Front End Developer</div>
            </div>
        </figcaption>    
    </figure>
    <figure class="flex flex-col items-center justify-center p-8 text-center  border-b border-gray-100 md:rounded-es-lg md:border-b-0 md:border-e dark:bg-gray-800 dark:border-gray-700">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow</h3>
            <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application."</p>
        </blockquote>
        <figcaption class="flex items-center justify-center ">
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                <div>Jese Leos</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
            </div>
        </figcaption>    
    </figure>
    <figure class="flex flex-col items-center justify-center p-8 text-center bg-bg-gray-100 border-gray-100 rounded-b-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
            <p class="my-4">You have many examples that can be used to create a fast prototype for your team."</p>
        </blockquote>
        <figcaption class="flex items-center justify-center ">
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                <div>Joseph McFall</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div>
            </div>
        </figcaption>    
    </figure>
</div>
</div>


<h2 class="flex items-center justify-center mb-5 text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Alamat Toko</h2>
<div class="flex items-center justify-center mb-10 ">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.200537714376!2d107.59153091455858!3d-6.866556395037899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be237133af%3A0x1637c744e3cdaab3!2sJl.%20Dr.%20Setiabudi%20No.193%2C%20Gegerkalong%2C%20Kec.%20Sukasari%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040153!5e0!3m2!1sid!2sid!4v1672573884626!5m2!1sid!2sid" width="750" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  

@endsection

 

  