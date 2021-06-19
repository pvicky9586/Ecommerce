<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Productos;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faker', function () {
    return view('faker');
});


//Route::get('/',[Productos::class,'render']);

