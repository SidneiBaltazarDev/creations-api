<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;

Route::get('/users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'findOne']);
Route::post('/insert/user', [UserController::class, 'inserUser']);


Route::get('/address', [AddressController::class, 'index']);
Route::get('/address/{id}', [AddressController::class, 'findOne']);
Route::post('/address/newadress', [AddressController::class, 'addAdress']);


