@extends('main.templateA')
@section('menu')
<div class="container flex flex-col justify-center items-center mx-auto py-5 px-4">
  <h2 class="text-2xl font-bold tracking-wide mb-10 mt-16 capitalize">
      popular activities
  </h2>
  <div class="flex flex-col gap-5 md:flex-row md:mx-5 md:flex-wrap justify-center container p-4 mb-16">
      {{-- card --}}
      @foreach ($activity as $item)
      <div class="bg-white max-w-md rounded-xl relative overflow-hidden group cursor-pointer hover:scale-105 duration-500 hover:shadow-md">
        <figure><img src="{{ url('storage/images/'.$item->foto) }}" class="max-h-56 w-full" alt="Pantai"></figure>
        <div class="p-4">
          <h5 class="font-bold tracking-wide text-2xl mb-3 capitalize group-hover:text-emerald-400 duration-500 transition">{{$item->nama_activity}}</h5>
          <div class="line-clamp-4 w-full mb-3">
            <p>{{$item->deskripsi}}</p>
          </div>
          <div class="flex justify-start">
            <div class=" text-md
               text-gray-800 text-lg capitalize font-semibold"></span></div>
              <a href="/dashboard/detailActivity/{{$item->id}}" class="text-emerald-400  group-hover:text-white duration-500 bg-white border border-emerald-400 group-hover:bg-emerald-400 group-focus:ring-4 group-focus:outline-none
              group-focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Detail</a>
          </div>
        </div>
      </div>
      @endforeach
      {{-- card end --}}
  </div>

</div>
@endsection