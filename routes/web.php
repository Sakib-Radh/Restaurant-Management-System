<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post("users",[UsersController::class,'getData']);
// Route::view("login","users");

// Route::view('user','user');
// Route::post('user','UsersController');

// Route::get('users', [UsersController::class,'getData']);

Route::get('/',[RestoController::class,'index']);
Route::get('list',[RestoController::class,'list']);
Route::view('add','add');
Route::post('add',[RestoController::class,'add']);
