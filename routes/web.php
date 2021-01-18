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

Route::get('index', 'App\Http\Controllers\MainController@index');

Route::get('searchPants', 'App\Http\Controllers\PantsController@index');

Route::get('searchPants/find', 'App\Http\Controllers\PantsController@find');

Route::post('searchPants/find', 'App\Http\Controllers\PantsController@search');

Route::post('searchPants/add', 'App\Http\Controllers\PantsController@addPants');

Route::get('searchTops/find', 'App\Http\Controllers\PantsController@topsFind');

Route::post('searchTops/find', 'App\Http\Controllers\PantsController@topsSearch');
