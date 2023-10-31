<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;

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
    return view('customer');
});

Route::post('/submit',[customerController::class,'save']);
Route::get('/list',[customerController::class,'select']);
Route::get('delete/{id}',[customerController::class,'delete1']);
Route::get('edit/{id}',[customerController::class,'edit']);
?>