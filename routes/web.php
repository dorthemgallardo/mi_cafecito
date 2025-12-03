<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;


Route::get('/', function () {
    return view('presentacion');
});
Route::get('/ordenarProductos', function () {
    return view('ordenarProductos');
});

Route::get('/pedidos',function(){
    return view('pedidos');
});
Route::get('/ordenarProductos',[ProductoController::class,'getProductos']);
Route::get('/generarPedido',[PedidoController::class,'getOrdenado']);
Route::get('/agregarProducto/{id}',[PedidoController::class,'agregarProducto']);
Route::get('/masCantidad/{id}',[PedidoController::class,'masCantidad']);
Route::get('/menosCantidad/{id}',[PedidoController::class,'menosCantidad']);
Route::get('/eliminarPedido/{id}',[PedidoController::class,'eliminarPedido']);

Route::post('/grabarPedido',[PedidoController::class,'grabarPedido']);
Route::get('/pedidos',[PedidoController::class,'getPedido']);
