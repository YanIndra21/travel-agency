@extends('main.credit')
@section('title','Edit Tour')
@section('isi')
    <form class="max-w-sm mx-auto" method="POST" action="/dashboard/tour/{{$tour->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="nama_tour" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Nama Tour</label>
            <input type="text" id="nama_tour" value="{{$tour->nama_tour}}" name="nama_tour" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="mb-6">
            <label for="tempat1" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Destinasi 1</label>
            <input type="text" name="tempat1" value="{{$tour->tempat1}}" id="tempat1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="mb-6">
            <label for="tempat2" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Destinasi 2</label>
            <input type="text" name="tempat2" value="{{$tour->tempat2}}" id="tempat2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div >
        <div class="mb-6">
            <label for="tempat3" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Destinasi 3</label>
            <input type="text" name="tempat3" value="{{$tour->tempat3}}" id="tempat3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="mb-6">
            <label for="tempat4" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Destinasi 4 (opsional)</label>
            <input type="text" id="tempat4" value="{{$tour->tempat4}}" name="tempat4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Deskripsi activity...">
            {{$tour->deskripsi}}
        </textarea>
        <div class="mb-6">
            <label for="harga_aud" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Harga (USD)</label>
            <input type="text" id="harga_aud" value="{{$tour->harga_aud}}" name="harga_aud" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="mb-6">
            <label for="harga_idr" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Harga (IDR)</label>
            <input type="text" id="harga_idr" value="{{$tour->harga_idr}}" name="harga_idr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="mb-6">
            <label for="durasi" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Durasi (Hours)</label>
            <input type="text" id="durasi" name="durasi" value="{{$tour->durasi}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <label class="block mb-2 text-sm font-medium text-gray-900" for="foto">Foto</label>
        <input class="block mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer
         bg-gray-50 focus:outline-none "
          id="foto" type="file" name="foto" accept="image/*">
         <input type="submit" name="submit" value="Submit" class="px-3 py-2 bg-blue-500 rounded mb-4 text-white">
    </form>
    <br>
@endsection

  