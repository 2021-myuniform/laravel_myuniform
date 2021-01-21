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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('contents.main');
})->middleware(['auth']);

Route::get('/main', function () {
    return view('contents.main');
})->name('main')->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('main', 'App\Http\Controllers\MainController@toMain')->name('toMain')->middleware(['auth']);

Route::get('searchPants/find', 'App\Http\Controllers\MainController@find')->name('searchPants')->middleware(['auth']);

Route::post('searchPants/find', 'App\Http\Controllers\MainController@register')->middleware(['auth']);

Route::get('searchTops/find', 'App\Http\Controllers\MainController@topsFind')->middleware(['auth']);

Route::post('searchTops/find', 'App\Http\Controllers\MainController@topsRegister')->middleware(['auth']);

Route::get('searchShoes/find', 'App\Http\Controllers\MainController@shoesFind')->middleware(['auth']);

Route::post('searchShoes/find', 'App\Http\Controllers\MainController@shoesRegister')->middleware(['auth']);

Route::get('yourlist', 'App\Http\Controllers\MainController@showList')->name('yourlist')->middleware(['auth']);

Route::get('select/pants', 'App\Http\Controllers\SelectWearController@selectPants')->name('selectPants')->middleware(['auth']);

Route::post('select/pants', 'App\Http\Controllers\SelectWearController@sendPants')->name('sendPants')->middleware(['auth']);

Route::get('select/tops', 'App\Http\Controllers\SelectWearController@selectTops')->name('selectTops')->middleware(['auth']);

Route::post('select/tops', 'App\Http\Controllers\SelectWearController@sendTops')->name('sendTops')->middleware(['auth']);

Route::get('select/shoes', 'App\Http\Controllers\SelectWearController@selectShoes')->name('selectShoes')->middleware(['auth']);

Route::post('select/shoes', 'App\Http\Controllers\SelectWearController@sendShoes')->name('sendShoes')->middleware(['auth']);

Route::get('searchTops/changeFind', 'App\Http\Controllers\MainController@changeTopsFind')->name('changeTops')->middleware(['auth']);

Route::post('searchTops/changeFind', 'App\Http\Controllers\MainController@changeTopsRegister')->name('registerChangeTops')->middleware(['auth']);




