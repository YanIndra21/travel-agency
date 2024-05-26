<?php
use App\Http\Controllers\activityController;
use App\Http\Controllers\tourController;
use App\Http\Controllers\transfers;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [dashboardController::class, 'showDashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    // show tour home
    Route::get('/',[tourController::class, 'showHome']);
    // show data tours

    // delete tour
    Route::delete('/dashboard/tour/{id}', [dashboardController::class, 'destroyTour']);
    // create tour
    Route::get('/dashboard/createTour', [dashboardController::class, 'createTour']);
    Route::post('/dashboard/addTour', [dashboardController::class,'storeTour']);
    // edit tour
    Route::get('/dashboard/tour/{id}/edit', [dashboardController::class,'editTour']);
    Route::put('/dashboard/tour/{id}', [dashboardController::class,'updateTour']);
  
        // create transfer
    Route::get('/dashboard/createTransfer', [dashboardController::class, 'createTransfers']);
    Route::post('/dashboard/addTransfer', [dashboardController::class,'storeTransfer']);
    // delete transfers
    Route::delete('/dashboard/transfer/{id}', [dashboardController::class, 'destroy']);
    // edit transfers
    Route::get('/dashboard/transfer/{id}/edit', [dashboardController::class,'editTransfer']);
    Route::put('/dashboard/transfer/{id}', [dashboardController::class,'updateTransfer']);

    // create activity
    Route::get('/dashboard/createActivity', [dashboardController::class, 'createActivity']);
    Route::post('/dashboard', [dashboardController::class,'storeActivity']);

    // delete activity
    Route::delete('/dashboard/activity/{id}', [dashboardController::class, 'destroyActivity']);
    // edit activity
    Route::get('/dashboard/activity/{id}/edit', [dashboardController::class,'editActivities']);
    Route::put('/dashboard/activity/{id}', [dashboardController::class,'updateActivities']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// show tour home
Route::get('/',[tourController::class, 'showHome']);
// show data tours
Route::get('/tours',[tourController::class, 'showData'] );



// show transfers
Route::get('/pickup', [transfers::class, 'show']);

// show all activity
Route::get('/activities',[activityController::class, 'show']);

// read activity
Route::get('/dashboard/detailActivity/{id}', [dashboardController::class, 'readActivities']);
// read tour
Route::get('/dashboard/detailTour/{id}', [dashboardController::class, 'readTour']);