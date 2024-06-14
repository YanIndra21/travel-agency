@extends('main.main')
@section('title', 'Detail')
@section('content')

<div class="container md:mx-auto">
        {{-- header --}}
        <div class="flex justify-start my-4 mx-4 capitalize font-bold text-2xl lg:!text-4xl lg:mt-4">
            <h1>{{$tour->nama_tour}}</h1>
        </div>
    <nav class="flex mx-4 mb-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-emerald-400">
            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            Home
            </a>
        </li>
        <li>
            <div class="flex items-center">
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <a href="/tours" class="ms-1 text-sm font-medium text-gray-700 hover:text-emerald-400 md:ms-2">Tours</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400 capitalize">{{$tour->nama_tour}}</span>
            </div>
        </li>
        </ol>
    </nav>
  {{-- carousel --}}
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-56 overflow-hidden md:h-96 lg:!h-[550px]">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="/img/kelingking.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Pantai Kelingking">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/img/penida.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Diamond Beach">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="/img/lempuyang.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="lempuyang Temple">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
       <img src="/img/ubud.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Ubud">
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
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
    {{-- header picture end --}}
   {{-- deskripsi --}}
    <div class=" px-4 container mx-auto indent-4 lg:indent-0 text-justify my-4">
        <p class="mx-2">{{$tour->deskripsi}}</p>
    </div>
    {{-- deskripsi end --}}
    {{-- destination --}}
    <div class="container mx-auto px-6 mb-8 capitalize flex flex-col">
        <div class=" py-2">
            <h1 class="font-bold tracking-wide capitalize text-xl mb-3">{{$tour->nama_tour}} Itinerary</h1>
            <div class="flex flex-col justify-center">
                {{-- 1 --}}
                <div class="border-b mb-4">
                    <h1 class="text-xl tracking-wide mb-4">{{$tour->tempat1}}</h1>
                    <img src="/img/talot.jpg" alt="talot">
                    <p class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi impedit nam assumenda 
                        sint deserunt inventore sapiente animi culpa similique! Eligendi tenetur reiciendis laudantium error 
                        totam exercitationem iusto aperiam laborum cum!
                    </p>
                </div>
                {{-- 2 --}}
                <div class="border-b mb-4">
                    <h1 class="text-xl tracking-wide mb-4">{{$tour->tempat2}}</h1>
                    <img src="/img/talot.jpg" alt="talot">
                    <p class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi impedit nam assumenda 
                        sint deserunt inventore sapiente animi culpa similique! Eligendi tenetur reiciendis laudantium error 
                        totam exercitationem iusto aperiam laborum cum!
                    </p>
                </div>
                {{-- 3 --}}
                <div class="border-b mb-4">
                    <h1 class="text-xl tracking-wide mb-4">{{$tour->tempat3}}</h1>
                    <img src="/img/talot.jpg" alt="talot">
                    <p class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi impedit nam assumenda 
                        sint deserunt inventore sapiente animi culpa similique! Eligendi tenetur reiciendis laudantium error 
                        totam exercitationem iusto aperiam laborum cum!
                    </p>
                </div>
                {{-- 4 --}}
                @if ($tour->tempat4)
                <div class="border-b mb-4">
                    <h1 class="text-xl tracking-wide mb-4">{{$tour->tempat4}}</h1>
                    <img src="/img/talot.jpg" alt="talot">
                    <p class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi impedit nam assumenda 
                        sint deserunt inventore sapiente animi culpa similique! Eligendi tenetur reiciendis laudantium error 
                        totam exercitationem iusto aperiam laborum cum!
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>
    {{-- destination end --}}
    {{-- about tour --}}
    <div class="container mx-auto px-6 mb-16">
        <h1 class="font-bold tracking-wide capitalize text-xl mb-3">about this tour</h1>
        <div class="flex flex-col justify-start">
            {{-- fitur --}}
            <div class="flex flex-row mb-4">
                <div class="w-[40px] md:w-[35px] md:mt-1 mr-5 mt-3 lg:mt-1 ">
                    <img src="/icons/cancel.png" alt="">
                </div>
                <div class="flex flex-col md:mt-2 lg:mt-2">
                    <h1 class="font-semibold tracking-wider text-justify">Free cancellation</h1>
                     <p class="text-sm">Cancel up to 24 hours in advance to receive a full refund</p>
                </div>
            </div>
            <div class="flex flex-row mb-4">
                <div class="w-[60px] md:w-[40px] lg:w-[35px] mr-5 mt-3">
                    <img src="/icons/cash.png" alt="">
                </div>
                <div class="flex flex-col md:ml-1 lg:mt-3">
                    <h1 class="font-semibold tracking-wider text-justify">Paid on arrival</h1>
                <p class="text-sm" >Secure your journey with upfront payments and travel with peace of mind</p>
                </div>
            </div>
            <div class="flex flex-row mb-4 md:-ml-1">
                <div class="w-[45px] lg:w-[40px] md:w-[35px] mr-5 mt-3">
                    <img src="/icons/group.png" alt="">
                </div>
                <div class="flex flex-col lg:mt-3">
                    <h1 class="font-semibold tracking-wider text-justify">Professional drivers</h1>
                    <p class="text-sm">English-speaking drivers, experienced and known Bali as well</p>
                </div>
            </div>
            <div class="flex flex-row mb-4">
                <div class="w-[25px] mr-7 md:mr-5 mt-2 ml-1 md:ml-0">
                    <img src="/icons/clock.png" alt="">
                </div>
                <div class="flex flex-col lg:ml-1">
                    <h1 class="font-semibold tracking-wider text-justify ">8 - 10 Hours service</h1>
                    <p class="text-sm">Starting time : 09.00 PM</p>
                </div>
            </div>
            <div class="flex flex-row mb-4">
                <div class="w-[35px] mr-5 mt-2">
                    <img src="/icons/price.png" alt="">
                </div>
                <div class="flex flex-col">
                    <h1 class="font-semibold tracking-wider mt-4 text-justify">Transparent prices</h1>
                </div>
            </div>
        </div>
    </div>
    
    {{-- about tour end --}}
    <div class="container mx-auto px-4 mb-8 capitalize flex flex-col">
        <h1 class="font-bold tracking-wide capitalize text-xl mb-3">Include</h1>
        <div >
            <ul class="list-disc ml-8 text-sm">
                <li><h2 class="mb-1">Private car + driver</h2></li>
                <li><h2 class="mb-1">Mineral water</h2></li>
                <li><h2 class="mb-1">Parking fee</h2></li>
                <li><h2 class="mb-1">Petrol</h2></li>
            </ul>
        </div>
    </div>
   {{-- price --}}
   <div>
        <div class=" mx-auto flex flex-col p-4 py-6 border rounded-lg mb-16 max-w-sm border-emerald-400">
            <h3>From : </h3>
            <h1 class="font-bold tracking-wider text-3xl my-3">USD ${{$tour->harga_aud}} / IDR {{$tour->harga_idr}}K</h1>
            <a href="https://wa.me/+6281339709414?text=tes%20pesan%20lewat%20web%20" target="_blank">
                <div class="flex justify-center items-center bg-emerald-400 rounded-full py-1 max-w-sm text-white shadow-md">
                BOOK NOW
            </div>
            </a>
        </div>
   </div>
   {{-- price end --}}
 <a href="/tours">
    <button type="submit" class="mb-16 mt-4 text-emerald-400 uppercase hover:text-white duration-500 bg-white border border-emerald-400  hover:bg-emerald-400  focus:ring-4  focus:outline-none
    focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center block mx-auto">see other packages</button>
  </a>
</div>
{{-- features --}}
<div class="flex mx-auto w-full flex-col justify-center items-center gap-5 py-14 bg-white md:flex-row">
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

@endsection