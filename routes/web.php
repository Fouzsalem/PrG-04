<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/insert', function () {
    return view('input');
});



Route::get('/view',[ClientsController::class,'view']);

Route::post('/insert',[ClientsController::class,'insert']);


Route::get('/edit/{id}',[ClientsController::class,'edit']);

Route::put('/update/{id}',[ClientsController::class,'update']);

Route::delete('/del/{id}',[ClientsController::class,'del']);




Route::get('/view2',[ServicesController::class,'serv.view']);

Route::post('/insert2',[ServicesController::class,'serv.insert']);

Route::get('/edit2/{id}',[ServicesController::class,'serv.edit']);

Route::put('/update2/{id}',[ServicesController::class,'serv.update']);

Route::delete('/del2/{id}',[ServicesController::class,'serv.del']);