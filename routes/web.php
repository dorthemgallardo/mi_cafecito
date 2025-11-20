<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('presentacion');
});
Route::get('/ordenarProductos', function () {
    return view('ordenarProductos');
});

Route::get('/ordenarProductos',[ProductoController::class,'getProductos']);
