<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//============ User Route ===========
Route::get('/register', [UserRegisterController::class,'showRegister'])->name('user.register.show');
Route::post('/register', [UserRegisterController::class,'register'])->name('user.register');
