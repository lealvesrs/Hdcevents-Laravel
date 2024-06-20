<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products/{id?}', function ($id = null) {
    return view('products', ['id'=> $id]);
});

Route::get('/contact', function () {
    $busca = request('search');
    return view('contact', ['busca'=> $busca]);
});