@extends('main.credit')
@section('title','Edit Activity')
@section('isi')
    <form class="max-w-sm mx-auto" method="POST" action="/dashboard/activity/{{$activity->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="nama_activity" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Nama Activity</label>
            <input type="text" name="nama_activity" id="nama_activity" value="{{$activity->nama_activity}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm 
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
            ">
        </div>
        
        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
        <textarea id="deskripsi" rows="4" id="deskripsi" name="deskripsi" class="block p-2.5 w-full text-sm
         text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 
         
        " placeholder="Deskripsi activity...">{{$activity->deskripsi}}</textarea>
         <div class="mb-6">
            <label for="harga_aud" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Harga (USD)</label>
            <input type="text" name="harga_aud" id="harga_aud" value="{{$activity->harga_aud}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm 
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
            
             ">
        </div>
        <div class="mb-6">
            <label for="harga_idr" class="block mt-4 mb-2 text-sm font-medium text-gray-900">Harga (IDR)</label>
            <input type="text" name="harga_idr" id="harga_idr" value="{{$activity->harga_idr}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

      
        <label class="block mb-2 text-sm font-medium text-gray-900" for="foto">Foto</label>
        <input class="block mb-3 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer
         bg-gray-50 focus:outline-none"
          id="foto" type="file" name="foto" accept="image/*">
    </input>
         <input type="submit" name="submit" value="Submit" class="px-3 py-2 bg-blue-500 rounded text-white">
    </form>
    <br>
@endsection

  