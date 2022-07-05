<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ServiceController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('skill', function () {
    return view('skill');
})->name('skill');
Route::get('service', [ServiceController::class, 'show'])->name('service');
Route::get('contact', [ContactController::class, 'show'])->name('contact');

    Route::get('/customer', function () {
      $customers=Customer::all();
      echo "<pre>";
      print_r($customers);
    });