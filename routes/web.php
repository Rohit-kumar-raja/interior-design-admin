<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/messages', function () {
    return view('pages.enquiry.messages');
});

Route::get('/table', function () {
    return view('pages.tables.datatables');
});

Route::get('/users', function () {
    return view('pages.users.index');
});


Route::get('/clients', function () {
    return view('pages.clients.index');
});
Route::get('/modal', function () {
    return view('slider.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('slider', [SliderController::class, 'index'])->middleware('auth')->name('slider');
Route::post('slider', [SliderController::class, 'store'])->middleware('auth')->name('slider.insert');
Route::get('slider/delete/{id}', [SliderController::class, 'destroy'])->middleware('auth')->name('slider.delete');
Route::get('slider/status/{id}', [SliderController::class, 'status'])->middleware('auth')->name('slider.status');
Route::get('slider/update/{id}', [SliderController::class, 'edit'])->middleware('auth')->name('slider.edit');
Route::post('slider/update', [SliderController::class, 'update'])->middleware('auth')->name('slider.update');





require __DIR__.'/auth.php';
