<?php

namespace App\Http\Controllers;
use App\Models\activity;

use Illuminate\Http\Request;

class activityController extends Controller
{
    //show all
    public function show(){
      $activity = activity::all();
      return view('activities', ['activity'=>$activity]);
    }


}
