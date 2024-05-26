@extends('main.credit')
@section('title','Edit Transfers')
@section('isi')
    <form class="max-w-sm mx-auto" method="POST" action="/dashboard/transfer/{{$transfers->id}}">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="nama_Transfers" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Nama Transfer</label>
            <input type="text" name="nama_transfers" id="nama_transfers" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm 
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
            " value="{{$transfers->nama_transfers}}">
        </div>
        <div class="mb-6">
            <label for="harga_aud" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Harga (USD)</label>
            <input type="text" name="harga_aud" id="harga_aud" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm 
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
            
             " value="{{$transfers->harga_aud}}">
        </div>
        <div class="mb-6">
            <label for="harga_idr" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Harga (IDR)</label>
            <input type="text" name="harga_idr" id="harga_idr" value="{{$transfers->harga_idr}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <input type="submit" name="submit" value="Submit" class="px-3 py-2 bg-blue-500 rounded text-white">
    </form>
    <br>
@endsection