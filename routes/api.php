<?php

use App\Http\Controllers\CobrancaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EnderecosController;

Route::get('usuarios/', [UsuarioController::class, 'index']);
Route::get('usuarios/{id}', [UsuarioController::class, 'unicoUsuario']);
Route::post('usuarios/novo', [UsuarioController::class, 'novoUsuario']);

Route::get('enderecos', [EnderecosController::class, 'index']);
Route::get('enderecos/{id}', [EnderecosController::class, 'unicoEndereco']);
Route::post('enderecos/novo', [EnderecosController::class, 'novoEndereco']);


Route::get('cobranca', [CobrancaController::class, 'index']);
Route::post('cobranca/nova', [CobrancaController::class, 'novaCobranca']);
Route::get('cobrancas/{id}', [CobrancaController::class, 'cobrancaId']);