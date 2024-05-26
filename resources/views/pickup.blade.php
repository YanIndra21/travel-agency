@extends('main.main')
@section('title', 'Airport Transfer')
@section('content')
{{-- header --}}
<div class="flex justify-center flex-col px-3 items-center text-center text-wrap text-gray-800 py-5">
    <div class="container py-3">
        <h2 class="text-2xl font-bold mb-4 tracking-wide">
          Airport Transfers Services
      </h2>
      <p>
          serves return transfers from your hotel on Bali to the airport
      </p>
    </div>
</div>
{{-- header end --}}
{{-- tabel menu --}}
<div class="container mx-auto px-4">
<div class="relative overflow-x-auto sm:rounded-lg">
    <table class="w-96 md:!w-[768px] mx-auto text-sm text-center rtl:text-right text-blue-100 items-center">
        <thead class="text-xs text-gray-800 uppercase border border-gray-500 bg-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 uppercase border border-gray-500">
                    Destination
                </th>
                <th scope="col" class="px-6 py-3 uppercase border border-gray-500">
                    Price (AUD) 
                </th>
                <th scope="col" class="px-6 py-3 uppercase border border-gray-500">
                    Price (IDR)
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transfers as $item)
                <tr class="bg-gray-200 text-center even:bg-gray-300  text-gray-800 capitalize">
                    <th scope="row" class="px-6 py-4 font-medium border border-gray-500  whitespace-nowrap ">
                        {{$item->nama_transfers}}
                    </th>
                    <td class="px-6 py-4 border border-gray-500">
                        ${{$item->harga_aud}}
                    </td>
                    <td class="px-6 py-4 border border-gray-500">
                        {{$item->harga_idr}}K
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="https://wa.me/+6285161019258?text=saya%20pesan%20paket%20tour 1%20">
        <button type="submit" class="mb-20 mt-4 text-emerald-400 uppercase hover:text-white duration-500 bg-white border border-emerald-400  hover:bg-emerald-400  focus:ring-4  focus:outline-none
        focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center block mx-auto">book now</button>
      </a>
</div>

</div>
{{-- tabel menu end --}}
@endsection