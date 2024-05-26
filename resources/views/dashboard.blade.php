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
    <title>Admin</title>
</head>
<body class="font-popins bg-gray-100">
<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
 <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen md:h-full transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white">
       <ul class="space-y-2 font-medium">
          <li>
             <a href="/tours" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
               <img src="/icons/map.png" alt="" width="25">
                <span class="ms-3">Tours</span>
             </a>
          </li>
          <li>
            <a href="/activities" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
               <img src="/icons/sunset.png" alt="" width="25">
                <span class="ms-3">Activities</span>
             </a>
          </li>
          <li>
            <a href="/pickup" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
              <img src="/icons/car.png" alt="" width="25">
               <span class="ms-3">Airport Transfers</span>
            </a>
         </li>
       </ul>
    </div>
 </aside>
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="sm:ml-64">
        {{-- tours --}}
        <h1 class="text-xl m-4 font-semibold" id="#tours">Tours</h1>
        <a href="/dashboard/createTour" class="text-blue-700 hover:text-white duration-500 bg-white border m-4 border-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none
        focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
       ">Add Tours</a>
       <div class="flex flex-col gap-5 md:flex-row md:mx-5 md:flex-wrap justify-center container p-4 " id="#tours">
           @foreach ($tour as $item)
              <div class="bg-white max-w-md rounded-xl relative overflow-hidden group cursor-pointer duration-500 hover:shadow-xl">
                 <figure><img src="{{ url('storage/images/' . $item->foto) }}" alt="Pantai" class="max-h-56 w-full">
                 </figure>
                 <div class="p-4">
                    <h5 class="font-bold tracking-wide text-2xl mb-3 capitalize">{{$item->nama_tour}}</h5>
                    <p class="mb-3">{{$item->deskripsi}}</p>
                    <div class=" text-lg hidden top-4 bg-sky-400 group-hover:bg-emerald-400 
                             duration-500 text-white px-4 rounded-full transition">
                             ${{$item->harga_aud}} </div>
                       <div class="flex justify-end">
                          <div class="capitalize flex">
                                <a href="/dashboard/tour/{{$item->id}}/edit" class="text-blue-500 mr-4">edit</a>
                                <form action="/dashboard/tour/{{$item->id}}" method="POST" class="text-red-500">
                                   @csrf
                                   @method('DELETE')
                                   <input type="submit" name="submit" value="Delete">
                                </form>
                             </div>
                       </div>
               </div>
            </div>
       @endforeach
       </div>
       {{-- tours end --}}
       
       {{-- activities --}}
       <h1 class="text-xl m-4 font-semibold" >Activities</h1>
       <a href="/dashboard/createActivity" class="text-blue-700 hover:text-white duration-500 bg-white border m-4 border-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none
       focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
      ">Add Activities</a>
       <div class="flex flex-col gap-5 md:flex-row md:mx-5 md:flex-wrap justify-center container p-4 ">
           @foreach ($activity as $item)
              <div class="bg-white max-w-md rounded-xl relative overflow-hidden group cursor-pointer duration-500 hover:shadow-xl" id="#activity">
                 <figure><img src="{{ url('storage/images/'.$item->foto) }}"  alt="Activity Image" alt="Activity Image" alt="Pantai" class="max-h-56 overflow-hidden  w-full"></figure>
                 
                 <div class="p-4">
                    <h5 class="font-bold tracking-wide text-2xl mb-3 capitalize">{{$item->nama_activity}}</h5>
                    <p class="mb-3">{{$item->deskripsi}}</p>
                    <div class=" text-lg absolute top-4 bg-sky-400 group-hover:bg-emerald-400 
                             duration-500 text-white px-4 rounded-full transition">
                             ${{$item->harga_aud}} </div>
                       <div class="flex justify-between">
                          <a href=""></a>
                          <div class="capitalize flex">
                             <a href="/dashboard/activity/{{$item->id}}/edit" class="text-blue-500 mr-4">edit</a>
                             <form action="/dashboard/activity/{{$item->id}}" method="POST" class="text-red-500">
                                @csrf
                                @method('DELETE')
                                <input type="submit", name="submit" value="Delete">
                             </form>
                          </div>
                       </div>
               </div>
            </div>
       @endforeach
       </div>
       {{-- activities end --}}
       {{-- airport transfers --}}
       <h1 class="text-xl m-4 font-semibold">Airport Transfers</h1>
       <a href="/dashboard/createTransfer" class="text-blue-700 hover:text-white duration-500 bg-white border m-4 border-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none
       focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
      ">Add Services</a>
       <div class="flex flex-col gap-5 md:flex-row md:mx-5 md:flex-wrap justify-center container p-4 " id="#transfers">
        <table class="w-96 md:!w-[768px] mx-auto text-sm text-center rtl:text-right text-blue-100 items-center">
           <thead class="text-xs text-gray-800 uppercase border border-gray-100 bg-gray-200">
               <tr>
                   <th scope="col" class="px-6 py-3 uppercase border border-gray-100">
                       Destination
                   </th>
                   <th scope="col" class="px-6 py-3 uppercase border border-gray-100">
                       Price (AUD) 
                   </th>
                   <th scope="col" class="px-6 py-3 uppercase border border-gray-100">
                       Price (IDR)
                   </th>
                   <th scope="col" class="px-6 py-3 uppercase border border-gray-100">
                       Action
                   </th>
                   
               </tr>
           </thead>
           <tbody>
               @foreach ($transfer as $item)
                   <tr class=" text-center   text-gray-800 capitalize">
                       <th scope="row" class="px-6 py-4 font-medium border border-gray-100  whitespace-nowrap ">
                           {{$item->nama_transfers}}
                       </th>
                       <td class="px-6 py-4 border border-gray-100">
                           ${{$item->harga_aud}}
                       </td>
                       <td class="px-6 py-4 border border-gray-100">
                           {{$item->harga_idr}}K
                       </td>
                       <td class="px-6 py-4 border border-gray-100  flex flex-row justify-center">
                           <a href="/dashboard/transfer/{{$item->id}}/edit" class="text-blue-500 mr-4">edit</a>
     
                            <form action="/dashboard/transfer/{{$item->id}}", method="POST" class="text-red-500">
                             @csrf
                             @method('DELETE')
                             <input type="submit", name="submit" value="Delete" class="cursor-pointer">
                          </form>
                       </td>
                       
                   </tr>
               @endforeach
           </tbody>
       </table>
       </div>
       {{-- airport transfers end --}}
</x-app-layout>

</div>
 <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>


