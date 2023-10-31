<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\customercontroller;

use  App\Http\Controllers\Usercontroller;

use  App\Http\Controllers\editusercontroller;

// Route::get('/',[customercontroller::class,'index']);
// Route::post('save',[customercontroller::class,'save']);

Route::get('/',[Usercontroller::class,'start']);
Route::get('list',[Usercontroller::class,'index']);
Route::post('signup',[Usercontroller::class,'signup']);
Route::get('Users/{id}',[editusercontroller::class,'edit']);
Route::post('update',[Usercontroller::class,'update']);
Route::get('delete/{id}',[editusercontroller::class,'delete']);
// Route::get('/users/{username}/edit', 'UserController@edit');

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('vel',function(){
    return "hi vel you are so strong";
});
?>