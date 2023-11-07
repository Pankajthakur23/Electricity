<?php

use App\Http\Controllers\ElectricityController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('create',[ElectricityController::class,'create']);
Route::post('store',[ElectricityController::class,'store'])->name('store');
Route::get('Index',[ElectricityController::class,'Index'])->name('Index');
Route::get('edit/{id}',[ElectricityController::class,'edit'])->name('edit');
Route::post('update/{electricity}',[ElectricityController::class,'update'])->name('update');
Route::get('delete/{electricity}',[ElectricityController::class,'delete'])->name('delete');
