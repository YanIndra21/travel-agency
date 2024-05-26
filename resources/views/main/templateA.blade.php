@extends('main.main')
@section('title', 'Gede Travel Assistance')
@section('content')
{{-- header picture --}}
<div class="w-full h-56 opacity-85 md:h-96 overflow-hidden flex justify-center items-center">
  {{-- <h1 class="z-[999] text-4xl text-center lg:!text-8xl  capitalize  absolute text-white font-caveat">Activities</h1> --}}
  <img src="/img/hiking.jpg" class="lg:object-cover -translate-y-56" alt="Nusa Penida">
</div>
{{-- header picture end --}}
@yield('menu')

@endsection