@extends('main.main')
@section('title', 'Detail')
@section('content')
<div class="md:mx-auto container">
  {{-- header --}}
  <div class="flex justify-start my-4 mx-4 capitalize font-bold text-2xl lg:!text-4xl lg:mt-4">
    <h1>{{$activity->nama_activity}}</h1>
</div>
<nav class="flex mx-4 mb-4" aria-label="Breadcrumb">
<ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
<li class="inline-flex items-center">
    <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
    <a href="/activity" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Activities</a>
    </div>
</li>
<li aria-current="page">
    <div class="flex items-center">
    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
    </svg>
    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400 capitalize">{{$activity->nama_activity}}</span>
    </div>
</li>
</ol>
</nav>

<div class="w-full h-56  mx-auto md:!mx-0 md:!h-[500px] overflow-hidden flex justify-center items-center">
  <img src="{{ url('storage/images/'.$activity->foto) }}" class="object-cover translate-y-4" alt="Nusa Penida">
</div>
{{-- header end --}}
 {{-- deskripsi --}}
 <div class=" px-4 container mx-auto indent-4 lg:indent-0 text-justify mt-4 mb-8">
  <p class="mx-2">{{$activity->deskripsi}}</p>
 </div>
  {{-- deskripsi end --}}
   {{-- about tour --}}
   <div class="container mx-auto px-6 mb-16">
    <h1 class="font-bold tracking-wide capitalize text-xl mb-3">about this activity</h1>
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
            <div class="w-[100px] md:w-[40px] lg:w-[35px] mr-5 mt-3">
                <img src="/icons/paid.png" alt="">
            </div>
            <div class="flex flex-col md:ml-1 lg:mt-3">
                <h1 class="font-semibold tracking-wider text-justify">Paid on arrival</h1>
            <p class="text-sm" >Enjoy your arrival worry-free with our 'Paid On Arrival' service! Secure your journey with upfront payments and travel with peace of mind</p>
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
    <div class=" mx-auto flex flex-col p-4 py-6 border rounded-lg mb-16 max-w-sm border-emerald-400">
        <h3>From : </h3>
        <h1 class="font-bold tracking-wider text-3xl my-3">USD $60 / IDR 600K</h1>
        <a href="https://wa.me/+6281339709414?text=tes%20pesan%20lewat%20web%20">
         <div class="flex justify-center items-center bg-emerald-400 rounded-full py-1 max-w-sm text-white shadow-md">
            BOOK NOW
        </div>
        </a>
    </div>
   {{-- price end --}}
   <a href="/activity">
    <button type="submit" class="mb-16 mt-4 text-emerald-400 uppercase hover:text-white duration-500 bg-white border border-emerald-400  hover:bg-emerald-400  focus:ring-4  focus:outline-none
    focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center block mx-auto">see other packages</button>
  </a>
</div>
</div>
@endsection