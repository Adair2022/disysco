<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landpage2Controller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('landpage2', Landpage2Controller::class);
/* Route::post('landpage2', 'App\Http\Controllers\Landpage2Controller@store'); */
/* Route::post('landpage2', [Landpage2Controller::class, 'store']); */
