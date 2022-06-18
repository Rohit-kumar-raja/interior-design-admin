<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EdgeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;


Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');
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


// slider start
Route::get('slider', [SliderController::class, 'index'])->middleware('auth')->name('slider');
Route::post('slider', [SliderController::class, 'store'])->middleware('auth')->name('slider.insert');
Route::get('slider/delete/{id}', [SliderController::class, 'destroy'])->middleware('auth')->name('slider.delete');
Route::get('slider/status/{id}', [SliderController::class, 'status'])->middleware('auth')->name('slider.status');
Route::get('slider/update/{id}', [SliderController::class, 'edit'])->middleware('auth')->name('slider.edit');
Route::post('slider/update', [SliderController::class, 'update'])->middleware('auth')->name('slider.update');
// slider end

// edge start
Route::get('edge', [EdgeController::class, 'index'])->middleware('auth')->name('edge');
Route::post('edge', [EdgeController::class, 'store'])->middleware('auth')->name('edge.insert');
Route::get('edge/delete/{id}', [EdgeController::class, 'destroy'])->middleware('auth')->name('edge.delete');
Route::get('edge/status/{id}', [EdgeController::class, 'status'])->middleware('auth')->name('edge.status');
Route::get('edge/update/{id}', [EdgeController::class, 'edit'])->middleware('auth')->name('edge.edit');
Route::post('edge/update', [EdgeController::class, 'update'])->middleware('auth')->name('edge.update');
// edge end

// testimonial start
Route::get('testimonial', [TestimonialController::class, 'index'])->middleware('auth')->name('testimonial');
Route::post('testimonial', [TestimonialController::class, 'store'])->middleware('auth')->name('testimonial.insert');
Route::get('testimonial/delete/{id}', [TestimonialController::class, 'destroy'])->middleware('auth')->name('testimonial.delete');
Route::get('testimonial/status/{id}', [TestimonialController::class, 'status'])->middleware('auth')->name('testimonial.status');
Route::get('testimonial/update/{id}', [TestimonialController::class, 'edit'])->middleware('auth')->name('testimonial.edit');
Route::post('testimonial/update', [TestimonialController::class, 'update'])->middleware('auth')->name('testimonial.update');
// testimonial end

// category start
Route::get('category', [CategoryController::class, 'index'])->middleware('auth')->name('category');
Route::post('category', [CategoryController::class, 'store'])->middleware('auth')->name('category.insert');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->middleware('auth')->name('category.delete');
Route::get('category/status/{id}', [CategoryController::class, 'status'])->middleware('auth')->name('category.status');
Route::get('category/update/{id}', [CategoryController::class, 'edit'])->middleware('auth')->name('category.edit');
Route::post('category/update', [CategoryController::class, 'update'])->middleware('auth')->name('category.update');
// category end


require __DIR__.'/auth.php';
