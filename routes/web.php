<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Route;

//Rotas Usuario
Route::get('/cadastro_usuario', [UserController::class,'formCriarUsuario']);

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);

Route::delete('/delete_usuario/{id}', [UserController::class,'deletar']);

Route::get('/editar_usuario/{id}', [UserController::class,'formEditarUsuario']);

Route::patch('/editar_usuario/{id}', [UserController::class,'editar']);



//Rotas Produto
Route::get('/cadastrar_produto', [ProductController::class,'formCriarProduto']);

Route::get('/listar_produto', [ProductController::class,'listarProduto']);

Route::post('/criar_produto', [ProductController::class,'criarProduto']);

Route::delete('/delete_produto/{id}', [ProductController::class,'deletar']);


//Rotas Vendedor
Route::get('/cadastrar_vendedor', [VendedorController::class,'formCriarVendedor']);

Route::get('/listar_vendedor', [VendedorController::class,'listarVendedor']);

Route::post('/criar_vendedor', [VendedorController::class,'criarVendedor']);

Route::delete('/delete_vendedor/{id}', [VendedorController::class,'deletar']);



//Rotas Cliente
Route::get('/cadastrar_cliente', [ClienteController::class,'formCriarCliente']);

Route::get('/listar_cliente', [ClienteController::class,'listarCliente']);

Route::post('/criar_cliente', [ClienteController::class,'criarCliente']);

Route::delete('/delete_cliente/{id}', [ClienteController::class,'deletar']);
