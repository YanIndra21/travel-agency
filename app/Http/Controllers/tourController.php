<?php

namespace App\Http\Controllers;

use App\Models\activity;
use Illuminate\Http\Request;
use App\Models\tour;
use ProtoneMedia\Splade\Facades\Splade;
class tourController extends Controller
{
    //show all
    public function showData(){
        $tour = tour::all();
        return view('tours',['tour' =>Splade::onLazy(fn()=>$tour)]);
    }


    // show home
    public function showHome()
    {
        // Ambil data activity dari tabel 'activities'
        $activities = activity::take(3)->get();

        // Ambil data tour dari tabel 'tours'
        $tours = tour::take(3)->get();
        
        // Mengembalikan view dengan data dari kedua tabel
        return view('welcome', [
            'activities' =>  $activities,
            'tours' => $tours,
        ]);
    }

    
    
}
