<?php

namespace App\Http\Controllers;

use App\Models\activity;
use Illuminate\Http\Request;
use App\Models\tour;
class tourController extends Controller
{
    //show all
    public function showData(){
        $tour = tour::all();
        return view('tours',['tour' =>$tour]);
    }


    // show home
    public function showHome()
    {
        // Ambil data activity dari tabel 'activity'
        $activity = activity::take(3)->get();
    
        // Ambil data tour dari tabel 'tour'
        $tour = tour::take(3)->get();
    
        // Mengembalikan view dengan data dari kedua tabel
        return view('welcome', ['activity' => $activity, 'tour' => $tour]);
    }
    
    
    
}
