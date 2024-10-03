<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;

Route::get('/users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'findOne']);
Route::post('/insert/user', [UserController::class, 'inserUser']);


Route::get('/address', [AddressController::class, 'index']);
Route::get('/address/{id}', [AddressController::class, 'findOne']);
Route::post('/address/newadress', [AddressController::class, 'addAdress']);


Route::get('/invoice/show/{id}', [InvoiceController::class, 'invoiceShow']);

Route::get('/invoice/show', [InvoiceController::class, 'invoiceShowAll']);

Route::post('/invoice/insert', [InvoiceController::class, 'invoiceInsert']);
