<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('presentacion');
});
Route::get('/ordenarProductos', function () {
    return view('ordenarProductos');
});

Route::get('/ordenarProductos',[ProductoController::class,'getProductos']);
Route::get('/generarPedido',[PedidoController::class,'getOrdenado']);
Route::get('/agregarProducto/{id}',[PedidoController::class,'agregarProducto']);
Route::get('/masCantidad/{id}',[PedidoController::class,'masCantidad']);
Route::get('/menosCantidad/{id}',[PedidoController::class,'menosCantidad']);
