<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');}); */

Route::get('/registration',[UserController::class,'registration'])->name('registration.form');
Route::post('/registration',[UserController::class,'store'])->name('registraion.store');
