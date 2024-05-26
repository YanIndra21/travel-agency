<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\travel_agency;

class transfers extends Controller
{
    //show data
    public function show(){
        $transfers = travel_agency::all();
        return view('pickup',['transfers' =>$transfers]);
    }
}
