<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;

Route::get('/users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'findOne']);
Route::get('/insert/{user}', [UserController::class, 'inserUser']);

Route::get('/addres', [AddressController::class, 'index']);
Route::get('/addres/{id}', [AddressController::class, 'findOne']);
Route::get('/address/add/{address}', [AddressController::class, 'addUser']);

