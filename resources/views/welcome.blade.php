@extends('main.main')
@section('title', 'Gede Travel Assistance - Bali Tour Agency')
@section('content')
{{-- carousel --}}
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-56 overflow-hidden md:h-96 lg:!h-[550px]">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <h1 class="z-[999] text-4xl text-center lg:!text-9xl  capitalize  absolute left-2/4 top-2/4 -translate-x-2/4 -translate-y-2/4 text-white font-caveat">kelingking beach</h1>
          <img src="/img/kelingking.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Pantai Kelingking">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <h1 class="z-[999] text-4xl text-center lg:!text-9xl capitalize  absolute left-2/4 top-2/4 -translate-x-2/4 -translate-y-2/4 text-white font-caveat">diamond beach</h1>
          <img src="/img/penida.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Diamond Beach">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <h1 class="z-[999] text-4xl text-center lg:!text-9xl capitalize  absolute left-2/4 top-2/4 -translate-x-2/4 -translate-y-2/4 text-white font-caveat">lempuyang temple</h1>
          <img src="/img/lempuyang.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="lempuyang Temple">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <h1 class="z-[999] text-4xl text-center lg:!text-9xl capitalize  absolute left-2/4 top-2/4 -translate-x-2/4 -translate-y-2/4 text-white font-caveat">Ubud</h1>
          <img src="/img/ubud.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Ubud">
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <h1 class="z-[999] text-4xl text-center lg:!text-8xl capitalize  absolute left-2/4 top-2/4 -translate-x-2/4 -translate-y-2/4 text-white font-caveat">handara gate</h1>
          <img src="/img/gate.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="handara gateS">
      </div>
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
          <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
          <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>


{{-- carousel end --}}

{{-- about us --}}
<div class="flex justify-center lg:px-48 my-16 flex-col items-center text-center text-gray-800 py-5 px-4 container mx-auto">
  <div>
      <h2 class="text-2xl font-bold mb-4 tracking-wide">
        About Us
    </h2>
    <p>
        Since 2002, our company has specialized in organizing Bali tour packages with English-speaking drivers. 
        Choose from various tour options to fit your interests and budget, including private, group, and customized tours. 
        Our experienced drivers ensure you visit Bali's top destinations for a memorable experience. 
        We are dedicated to enhancing your stay in Bali and continually improving our services. 
        Contact us today to book your tour package. We await your inquiry eagerly.
    </p>
  </div>
</div>
{{-- about us end --}}
{{-- popular destination --}}
  <div class="container flex flex-col justify-center items-center mx-auto py-5 px-4">
    <h2 class="text-2xl font-bold tracking-wide mb-10 capitalize">
        Popular Tours packages
    </h2>
    <div class="flex flex-col gap-5 md:flex-row flex-wrap md:mx-5 justify-evenly md:justify-center container p-4">
        {{-- card --}}
        @foreach ($tour as $item)
        <div class="bg-white max-w-md rounded-xl relative overflow-hidden group cursor-pointer hover:scale-105 duration-500 hover:shadow-md">
          <figure><img src="{{ url('storage/images/'.$item->foto) }}" class="max-h-56 w-full" alt="Pantai"></figure>
          <div class="p-4">
            <h5 class="font-bold tracking-wide text-2xl mb-3 capitalize group-hover:text-emerald-400 duration-500 transition">{{$item->nama_tour}}</h5>
            <div class="line-clamp-4 w-full mb-3">
              <p>{{$item->deskripsi}}</p>
            </div>
            
            <div class="flex justify-start">
              <a href="/dashboard/detailTour/{{$item->id}}" class="text-emerald-400 group-hover:text-white duration-500 bg-white border border-emerald-400 group-hover:bg-emerald-400 group-focus:ring-4 group-focus:outline-none
               group-focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Details</a>
             
            </div>
          </div>
        </div>
        @endforeach
        {{-- card end --}}
    </div>
    <a href="/tours">
      <button type="submit" class="mb-16 mt-4 text-emerald-400 uppercase hover:text-white duration-500 bg-white border border-emerald-400  hover:bg-emerald-400  focus:ring-4  focus:outline-none
      focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">view all packages</button>
    </a>
  </div>
{{-- popular destination end --}}
{{-- Activities --}}
<div class="container flex flex-col justify-center items-center mx-auto py-5 px-4">
  <h2 class="text-2xl font-bold tracking-wide mb-10 capitalize">
      Popular Activities
  </h2>
  <div class="flex flex-col gap-5 md:flex-row flex-wrap md:mx-5 justify-evenly md:justify-center container p-4">
      {{-- card --}}
      @foreach ($activity as $item)
      <div class="bg-white max-w-md rounded-xl relative overflow-hidden group cursor-pointer hover:scale-105 duration-500 hover:shadow-md">
        <figure><img src="{{ asset('storage/images/'.$item->foto) }}" class="max-h-56 w-full" alt="Pantai"></figure>
        <div class="p-4">
          <h5 class="font-bold tracking-wide text-2xl mb-3 capitalize group-hover:text-emerald-400 duration-500 transition">{{$item->nama_activity}}</h5>
          <div class="line-clamp-4 w-full mb-3">
            <p>{{$item->deskripsi}}</p>
          </div>
          
          <div class="flex justify-start">
            <a href="/dashboard/detailActivity/{{$item->id}}" class="text-emerald-400 group-hover:text-white duration-500 bg-white border border-emerald-400 group-hover:bg-emerald-400 group-focus:ring-4 group-focus:outline-none
             group-focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Details</a>
             
          </div>
        </div>
      </div>
      @endforeach
      {{-- card end --}}
  </div>
  <a href="/activity">
    <button type="submit" class="mb-16 mt-4 text-emerald-400 uppercase hover:text-white duration-500 bg-white border border-emerald-400  hover:bg-emerald-400  focus:ring-4  focus:outline-none
    focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">view all packages</button>
  </a>
</div>
{{-- Activities end --}}
{{-- features --}}
<div class="flex mx-auto w-full flex-col lg:flex-row justify-center items-center gap-5 py-14 bg-white">
  <div class="flex flex-col justify-center text-center py-4 px-7 items-center">
    <img src="/icons/group.png" alt="Comfortable Journey" width="70" class="mb-4">
    <h5 class="font-semibold text-lg mb-2">Professional drivers</h5>
    <p>English-speaking drivers, experienced and known Bali as well!</p>
  </div>
  <div class="flex flex-col justify-center text-center py-4 px-7 items-center">
    <img src="/icons/paid.png" alt="Comfortable Journey" width="70" class="mb-4">
    <h5 class="font-semibold text-lg mb-2">Paid on arrival</h5>
    <p class="text-wrap">Secure your journey with upfront payments and travel with peace of mind</p>
  </div>
  <div class="flex flex-col justify-center text-center py-4 px-7 items-center">
    <img src="/icons/cancel.png" alt="Comfortable Journey" width="70" class="mb-4">
    <h5 class="font-semibold text-lg mb-2">Free cancellation</h5>
    <p>Cancel up to 24 hours in advance to receive a full refund</p>
  </div>
  <div class="flex flex-col justify-center text-center py-4 px-7 items-center">
    <img src="/icons/car.png" alt="Comfortable Journey" width="70" class="mb-4">
    <h5 class="font-semibold text-lg mb-2">Comfortable journey</h5>
    <p>Clean vehicle and good air conditioning</p>
  </div>
</div>
<br><br><br>
{{-- features end --}}
@endsection