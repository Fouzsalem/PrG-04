<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactMessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/client', function () {
    return view('clientt');
});


Route::get('/insert', function () {
    return view('input');
});



Route::get('/view',[ClientsController::class,'view']);

Route::post('/insert',[ClientsController::class,'insert']);


Route::get('/edit/{id}',[ClientsController::class,'edit']);

Route::put('/update/{id}',[ClientsController::class,'update']);

Route::delete('/del/{id}',[ClientsController::class,'del']);




Route::get('/view2',[ServicesController::class,'view2']);


Route::get('/insert2', function () {
    return view('input2');
});

Route::post('/insert2',[ServicesController::class,'insert2']);
Route::get('/edit2/{id}',[ServicesController::class,'edit2']);

Route::put('/update2/{id}',[ServicesController::class,'update2']);

<<<<<<< HEAD
Route::delete('/del2/{id}',[ServicesController::class,'del2']);


Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');
Route::get('/dashboard/messages', [ContactMessageController::class, 'index'])->name('dashboard.messages.index');
=======
Route::delete('/del2/{id}',[ServicesController::class,'del2']);
>>>>>>> origin/main
