<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>@yield('title')</title>
    
</head>
<body class="font-popins bg-gray-100">
    {{-- navbar --}}
    <header class="relative w-full">
      <nav class="bg-white z-[999] border-gray-200  px-2">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-8">
          <div class="flex items-center space-x-3 rtl:space-x-reverse">
              <img src="/icons/gta.png" class="h-8" alt="Agency Logo"/>
              <span class="self-center text-2xl font-semibold whitespace-nowrap">Gede Travel Assistance</span>
          </div>
          <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-multi-level" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full lg:block lg:w-auto" id="navbar-multi-level">
            <ul class="flex flex-col font-medium p-4 lg:p-0 mt-4 md:gap-3 lg:gap-1 border border-gray-100 rounded-lg bg-transparent lg:space-x-6 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-white ">
              <li>
                <a href="/" class="block py-2 px-3 text-gray-900  rounded md:bg-transparent md:text-gray-900 md:p-0  md:hover:text-emerald-400 duration-500 transition  lg:text-xl text-lg" aria-current="page">Home</a>
              </li>
              <li>
                <a href="/tours" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-emerald-400 duration-500 transition md:p-0   lg:text-xl text-lg">Tours</a>
              </li>
              <li>
                <a href="/pickup" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-emerald-400 duration-500 transition md:p-0   lg:text-xl text-lg">Airport  Transfers</a>
              </li>
              <li>
                <a href="/activities" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-emerald-400 duration-500 transition md:p-0   lg:text-xl text-lg">Activities</a>
              </li>

              
            </ul>
          </div>
        </div>
      </nav>
      
    </header>
    {{-- navbar end --}}
    @yield('content')
    <div class="rounded-full w-[40px] fixed right-3 bottom-5 ">
        <a href="https://wa.me/+6285161019258?text=tes%20pesan%20lewat%20web%20" target="_blank"><img src="/icons/whatsapp.png" alt="" width="50"></a>
        
    </div>
{{-- footer --}}
<footer class="bg-white">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="flex flex-col lg:flex lg:flex-row md:justify-between gap-8">
          <div class="mb-6">
              <a href="#" class="flex items-center ">
                  <img src="/icons/gta.png" class="h-8 me-3" alt="Agency Logo" />
                  <span class="self-center text-2xl md:mr-20 md:text-xl font-semibold whitespace-nowrap">Gede Travel Assistance</span>
              </a>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">contact us</h2>
            <ul class="text-gray-500 font-medium">
                <li class="mb-4 flex gap-2">
                  <div class="w-[30px]">
                    <img src="/icons/whatsapp.png" alt="">
                  </div>
                    <a href="https://wa.me/+6281339709414?text=tes%20pesan%20lewat%20web%20" class="hover:underline mt-1">+62 813-3970-9414</a>
                </li>
                <li class="mb-4 flex gap-2">
                  <div class="w-[30px]">
                    <img src="/icons/gmail.png" alt="">
                  </div>
                    <a href="mailto:astanaputra221@gmail.com?subject=Pesan Penting&body=Halo," class="hover:underline mt-1">@astanaputra221@gmail.com</a>
                </li>
                
            </ul>
        </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div class="mr-10">
                  <h2 class="mb-6  text-sm font-semibold text-gray-900 uppercase">services</h2>
                  <ul class="text-gray-500 font-medium">
                      <li class="mb-4">
                          <a href="/tours" class="hover:underline">Tours</a>
                      </li>
                      <li class="mb-4">
                          <a href="/pickup" class="hover:underline">Airport Transfers</a>
                      </li>
                      <li>
                          <a href="/activities" class="hover:underline">Activities</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Follow us</h2>
                  <ul class="text-gray-500 font-medium">
                      <li class="mb-4">
                          <a href="https://www.instagram.com/gta_bali?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="hover:underline ">Instagram</a>
                      </li>
                      <li>
                          <a href="https://www.facebook.com/GedeTravelAssistanceBali?mibextid=ZbWKwL" target="_blank" class="hover:underline">Facebook</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-4 text-sm font-semibold text-gray-900  uppercase">we accept payments : </h2>
                  <ul class="text-gray-500 font-medium  flex flex-row gap-8">
                      <li class="mb-4">
                          <img src="/icons/paypal2.png" width="50" alt="">
                      </li>
                      <li>
                        <img src="/icons/cash.png" width="40" alt="">
                      </li>
                      <li>
                        <img src="/icons/bank.png" width="40" alt="">
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="/" class="hover:underline">Gede Travel Assistance</a>. All Rights Reserved.
          </span>
      </div>
    </div>
</footer>
{{-- footer end --}}
      {{-- script --}}
      <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>