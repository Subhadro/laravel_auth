<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('register');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('registerSave',[UserController::class,'register']);
Route::get('/login', function () {
    return view('login');
});
Route::post('loginMatch',[UserController::class,'login']);

Route::middleware('check')->group(function () {
    Route::view('dashboard', 'dashboard');
    Route::view('inner', 'inner');
    Route::get('logout', [UserController::class, 'logout']);
});
