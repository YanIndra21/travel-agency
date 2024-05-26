<?php

namespace App\Http\Controllers;
use App\Models\activity;
use App\Models\tour;
use App\Models\travel_agency;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function showDashboard()
    {
        // Ambil data activity dari tabel 'activity'
        $activity = activity::all();
    
        // Ambil data tour dari tabel 'tour'
        $tour =  tour::all();
        // ambil data dari tabel transfer
        $transfers = travel_agency::all();
    
        // Mengembalikan view dengan data dari kedua tabel
        return view('/dashboard', ['activity' => $activity, 'tour' => $tour, 'transfer'=>$transfers]);
    }
    // create transfers
    public function createTransfers(){
        return view('createTransfer');
    }
    public function storeTransfer(Request $request,){
        $transfer = new travel_agency;
        $transfer->nama_transfers = $request->nama_transfers;
        $transfer->harga_aud = $request->harga_aud;
        $transfer->harga_idr = $request->harga_idr;
        $transfer->save();

        return redirect('/dashboard');
    }

    // edit transfers
    public function editTransfer($id){
        $transfers = travel_agency::find($id);
        return view('editTransfer',['transfers' => $transfers]);
    }
    public function updateTransfer(Request $request, $id){
        $transfers = travel_agency::find($id);
        $transfers->nama_transfers=$request->nama_transfers;
        $transfers->harga_aud=$request->harga_aud;
        $transfers->harga_idr=$request->harga_idr;
        $transfers->save();

        return redirect('/dashboard');
    }

    // delete transfers
    public function destroy($id) {
        // Find the transfers record with the given ID
        $transfers = travel_agency::find($id);
    
        // Check if the transfers record exists
        if ($transfers) {
            // If the record exists, delete it
            $transfers->delete();
            // Redirect to the dashboard
            return redirect('/dashboard');
        } else {
            // If the record doesn't exist, handle the error or redirect as needed
            return redirect()->back()->with('error', 'Transfers record not found');
        }
    }
    // create activities
    public function createActivity(){
        return view('createActivity');
    }

    public function storeActivity(Request $request)
    {
        // validasi
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif|max:50000'
        ]);

        // Mengambil file gambar yang diunggah
        $image = $request->file('foto');
        
        // Menyimpan file gambar ke dalam storage
        $path = $image->store('public/images');

        $fileName = basename($path);
       
        // Menyimpan path gambar ke dalam database
        $activity = new activity;
        $activity->nama_activity = $request->nama_activity;
        $activity->deskripsi = $request->deskripsi;
        $activity->harga_aud = $request->harga_aud;
        $activity->harga_idr = $request->harga_idr;
        $activity->foto = $fileName;  // menyimpan path gambar
        $activity->save();

        return redirect('/dashboard');
    }
    // edit activities
    public function editActivities($id){
        $activity = activity::find($id);
        return view('editActivity',['activity' => $activity]);
    }
    public function updateActivities(Request $request, $id){
        $activity = activity::find($id);
        $activity->nama_activity = $request->nama_activity;
        $activity->deskripsi = $request->deskripsi;
        $activity->harga_aud = $request->harga_aud;
        $activity->harga_idr = $request->harga_idr;

        if ($request->hasFile('foto')) {
            // Validate and store the new file
            $request->validate([
                'foto' => 'required|image|mimes:jpg,png,jpeg,gif|max:50000'
            ]);
    
            $image = $request->file('foto');
            $path = $image->store('public/images');
            $fileName = basename($path);
            $activity->foto = $fileName;
        }
    
        $activity->save();
    
        return redirect('/dashboard');
    }
    // read activities
    public function readActivities($id){
        $activity = activity::find($id);
        if (!$activity) {
            return abort(404); // Return a 404 response if activity is not found
        }
        return view('detailActivity', ['activity' => $activity]);
    }
    
    
    // delete activities
    public function destroyActivity($id) {
        // Find the transfers record with the given ID
        $activity = activity::find($id);
    
        // Check if the activity record exists
        if ($activity) {
            // If the record exists, delete it
            $activity->delete();
            // Redirect to the dashboard
            return redirect('/dashboard');
        } else {
            // If the record doesn't exist, handle the error or redirect as needed
            return redirect()->back()->with('error', 'activity record not found');
        }
    }



// create tour
public function createTour(){
    return view('createTour');
}

public function storeTour(Request $request)
{
    // validasi
    $request->validate([
        'foto' => 'required|image|mimes:jpg,png,jpeg,gif|max:50000'
    ]);

    // Mengambil file gambar yang diunggah
    $image = $request->file('foto');
    
    // Menyimpan file gambar ke dalam storage
    $path = $image->store('public/images');

    $fileName = basename($path);
   
    // Menyimpan path gambar ke dalam database
    $tour = new tour;
    $tour->nama_tour = $request->nama_tour;
    $tour->tempat1 = $request->tempat1;
    $tour->tempat2 = $request->tempat2;
    $tour->tempat3 = $request->tempat3;
    $tour->tempat4 = $request->tempat4;
    $tour->deskripsi= $request->deskripsi;
    $tour->harga_aud= $request->harga_aud;
    $tour->harga_idr= $request->harga_idr;
    $tour->foto= $fileName;
    $tour->durasi= $request->durasi;
    $tour->save();
    return redirect('/dashboard');
}

// edit tour
public function editTour($id){
    $tour = tour::find($id);
    return view('editTour',['tour' => $tour]);
}

public function updateTour(Request $request, $id){
    $tour = tour::find($id);
    $tour->nama_tour = $request->nama_tour;
    $tour->tempat1 = $request->tempat1;
    $tour->tempat2 = $request->tempat2;
    $tour->tempat3 = $request->tempat3;
    $tour->tempat4 = $request->tempat4;
    $tour->deskripsi= $request->deskripsi;
    $tour->harga_aud= $request->harga_aud;
    $tour->harga_idr= $request->harga_idr;
    $tour->durasi= $request->durasi;

    if ($request->hasFile('foto')) {
        // Validate and store the new file
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif|max:50000'
        ]);

        $image = $request->file('foto');
        $path = $image->store('public/images');
        $fileName = basename($path);
        $tour->foto = $fileName;
    }

    $tour->save();

    return redirect('/dashboard');
}

    // delete tour
    public function destroyTour($id) {
        // Find the transfers record with the given ID
        $tour = tour::find($id);
    
        // Check if the activity record exists
        if ($tour) {
            // If the record exists, delete it
            $tour->delete();
            // Redirect to the dashboard
            return redirect('/dashboard');
        } else {
            // If the record doesn't exist, handle the error or redirect as needed
            return redirect()->back()->with('error', 'tour record not found');
        }
    }
    // read tour
    public function readTour($id){
        $tour = tour::find($id);
        if (!$tour) {
            return abort(404); // Return a 404 response if tour is not found
        }
        return view('readTour', ['tour' => $tour]);
    }
    
}