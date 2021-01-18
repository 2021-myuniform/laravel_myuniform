<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('searchPants/find', 'App\Http\Controllers\MainController@find');

Route::post('searchPants/find', 'App\Http\Controllers\MainController@register');

Route::get('searchTops/find', 'App\Http\Controllers\MainController@topsFind');

Route::post('searchTops/find', 'App\Http\Controllers\MainController@topsRegister');

Route::get('searchShoes/find', 'App\Http\Controllers\MainController@shoesFind');

Route::post('searchShoes/find', 'App\Http\Controllers\MainController@shoesRegister');


