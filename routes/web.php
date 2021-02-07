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

// Route::get('/', function () {
//     return view('contents.main');
// })->middleware(['auth']);

Route::get('/', 'App\Http\Controllers\MainController@toFirst')->name('toFirst');

// Route::get('/main', function () {
//     return view('contents.main');
// })->name('main')->middleware(['auth']);

Route::get('/dashboard', 'App\Http\Controllers\MainController@showDashboard')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('main', 'App\Http\Controllers\MainController@toMain')->name('toMain')->middleware(['auth']);

Route::get('searchPants/find', 'App\Http\Controllers\MainController@find')->name('searchPants')->middleware(['auth']);

Route::post('searchPants/find', 'App\Http\Controllers\MainController@register')->name('searchPantsRegister')->middleware(['auth']);

Route::get('searchTops/find', 'App\Http\Controllers\MainController@topsFind')->name('searchTops')->middleware(['auth']);

Route::post('searchTops/find', 'App\Http\Controllers\MainController@topsRegister')->name('searchTopsRegister')->middleware(['auth']);

Route::get('searchShoes/find', 'App\Http\Controllers\MainController@shoesFind')->middleware(['auth']);

Route::post('searchShoes/find', 'App\Http\Controllers\MainController@shoesRegister')->name('searchShoesRegister')->middleware(['auth']);

Route::get('searchCaps/find', 'App\Http\Controllers\MainController@capsFind')->name('searchCapsFind')->middleware(['auth']);

Route::post('searchCaps/find', 'App\Http\Controllers\MainController@capsRegister')->name('searchCapsRegister')->middleware(['auth']);

Route::get('searchSocks/find', 'App\Http\Controllers\MainController@socksFind')->name('searchSocksFind')->middleware(['auth']);

Route::post('searchSocks/find', 'App\Http\Controllers\MainController@socksRegister')->name('searchSocksRegister')->middleware(['auth']);

Route::get('yourlist', 'App\Http\Controllers\MainController@showList')->name('yourlist')->middleware(['auth']);

// ウェアの選択

Route::get('select/pants', 'App\Http\Controllers\SelectWearController@selectPants')->name('selectPants')->middleware(['auth']);

Route::post('select/pants', 'App\Http\Controllers\SelectWearController@sendPants')->name('sendPants')->middleware(['auth']);

Route::get('select/tops', 'App\Http\Controllers\SelectWearController@selectTops')->name('selectTops')->middleware(['auth']);

Route::post('select/tops', 'App\Http\Controllers\SelectWearController@sendTops')->name('sendTops')->middleware(['auth']);

Route::get('select/shoes', 'App\Http\Controllers\SelectWearController@selectShoes')->name('selectShoes')->middleware(['auth']);

Route::post('select/shoes', 'App\Http\Controllers\SelectWearController@sendShoes')->name('sendShoes')->middleware(['auth']);

Route::get('select/caps', 'App\Http\Controllers\SelectWearController@selectCaps')->name('selectCaps')->middleware(['auth']);

Route::post('select/caps', 'App\Http\Controllers\SelectWearController@sendCaps')->name('sendCaps')->middleware(['auth']);

Route::get('select/socks', 'App\Http\Controllers\SelectWearController@selectSocks')->name('selectSocks')->middleware(['auth']);

Route::post('select/socks', 'App\Http\Controllers\SelectWearController@sendSocks')->name('sendSocks')->middleware(['auth']);

// お気に入りコーデ登録

Route::post('saveFav', 'App\Http\Controllers\MainController@saveFav')->name('saveFav')->middleware(['auth']);

Route::get('showMyList', 'App\Http\Controllers\MainController@showMyFavList')->name('showMyFavList')->middleware(['auth']);

Route::get('detail', 'App\Http\Controllers\MainController@showDetail')->name('showDetail')->middleware(['auth']);

Route::get('userDetail', 'App\Http\Controllers\MainController@showUserDetail')->name('showUserDetail')->middleware(['auth']);

// ジャンルごとの条件検索

Route::get('searchTops/changeFind', 'App\Http\Controllers\MainController@changeTopsFind')->name('changeTops')->middleware(['auth']);

Route::post('searchTops/changeFind', 'App\Http\Controllers\MainController@changeTopsRegister')->name('registerChangeTops')->middleware(['auth']);

Route::get('searchPants/changeFind', 'App\Http\Controllers\MainController@changePantsFind')->name('changePants')->middleware(['auth']);

Route::post('searchPants/changeFind', 'App\Http\Controllers\MainController@changePantsRegister')->name('registerChangePants')->middleware(['auth']);

Route::get('searchShoes/changeFind', 'App\Http\Controllers\MainController@changeShoesFind')->name('changeShoes')->middleware(['auth']);

Route::post('searchShoes/changeFind', 'App\Http\Controllers\MainController@changeShoesRegister')->name('registerChangeShoes')->middleware(['auth']);

Route::get('searchCaps/changeFind', 'App\Http\Controllers\MainController@changeCapsFind')->name('changeCaps')->middleware(['auth']);

Route::post('searchCaps/changeFind', 'App\Http\Controllers\MainController@changeCapsRegister')->name('registerChangeCaps')->middleware(['auth']);

Route::get('searchSocks/changeFind', 'App\Http\Controllers\MainController@changeSocksFind')->name('changeSocks')->middleware(['auth']);

Route::post('searchSocks/changeFind', 'App\Http\Controllers\MainController@changeSocksRegister')->name('registerChangeSocks')->middleware(['auth']);

// 新規ユーザーをイントロダクションへ

Route::get('intro', 'App\Http\Controllers\MainController@intro')->name('intro')->middleware(['auth']);

// 画像アップロード

Route::get('/form',
	[App\Http\Controllers\UploadImageController::class, "show"]
	)->name("upload_form")->middleware(['auth']);

Route::post('/upload',
	[App\Http\Controllers\UploadImageController::class, "upload"]
    )->name("upload_image")->middleware(['auth']);

Route::get('/formOpen',
        [App\Http\Controllers\UploadImageController::class, "showOpen"]
        )->name("uploadUser_form")->middleware(['auth']);

Route::post('/uploadOpen',
	[App\Http\Controllers\UploadImageController::class, "uploadOpen"]
	)->name("upload_imageOpen")->middleware(['auth']);

// コメントアップロード

Route::post('/uploadComment',
	[App\Http\Controllers\CommentController::class, "uploadComment"]
	)->name("uploadComment")->middleware(['auth']);

