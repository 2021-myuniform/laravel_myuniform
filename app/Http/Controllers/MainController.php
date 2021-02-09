<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\usersFavoriteList;
use App\Models\detailComment;
use App\Models\User;

use function PHPUnit\Framework\isEmpty;

class MainController extends Controller
{
    public function showDashboard(){
        $user = Auth::user();

        //アップロードした画像を取得
        $uploads = User::find($user->id);

		return view("dashboard",[
			"uploads" => $uploads
		]);
    }

    public function toFirst(Request $request)
    {
        return view('firstPage.main');
    }

    public function find(Request $request)
    {
        return view('searchItem.searchPants');
    }

    public function changePantsFind(Request $request)
    {
        return view('searchItem.changeSearchPants');
    }

    public function register(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();
        // ddd($checkList);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }

        return view('searchItem.searchShoes', ['input' => '']);
    }

    public function changePantsRegister(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();
        // ddd($checkList);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }

        $userInfo = DB::table('users')->where('id', $user->id)->first();
        $getPantsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();
        $getTopsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->first();
        $getShoesSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        $getCapsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->first();
        $getSocksSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->first();
        $getPantsImg = DB::table('pants_tables')->where('id', $userInfo->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userInfo->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userInfo->favShoes)->first();
        $getCapsImg = DB::table('caps_tables')->where('id', $userInfo->favCaps)->first();
        $getSocksImg = DB::table('socks_tables')->where('id', $userInfo->favSocks)->first();


        return view('mainPage.main', ['userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);
    }

    public function topsFind(Request $request)
    {
        return view('searchItem.searchTops');
    }

    public function changeTopsFind(Request $request)
    {
        return view('searchItem.changeSearchTops');
    }

    public function topsRegister(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->first();
        // ddd($checkList);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }
        return view('searchItem.searchPants', ['input' => '']);
    }

    public function changeTopsRegister(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->first();
        // ddd($user->gender);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }

        $userInfo = DB::table('users')->where('id', $user->id)->first();
        $getPantsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();
        $getTopsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->first();
        $getShoesSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        $getCapsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->first();
        $getSocksSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->first();

        // ユーザーのFavアイテムの情報を取得
        $getPantsImg = DB::table('pants_tables')->where('id', $userInfo->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userInfo->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userInfo->favShoes)->first();
        $getCapsImg = DB::table('caps_tables')->where('id', $userInfo->favCaps)->first();
        $getSocksImg = DB::table('socks_tables')->where('id', $userInfo->favSocks)->first();


        return view('mainPage.main', ['userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);

    }

    public function shoesFind(Request $request)
    {
        return view('searchItem.searchShoes');
    }

    public function changeShoesFind(Request $request)
    {
        return view('searchItem.changeSearchShoes');
    }

    public function shoesRegister(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        // ddd($checkList);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }
        // return view('searchItem.yourList', ['input' => '']);
        // return redirect('/yourlist');
        return view('searchItem.searchCaps', ['input' => '']);

    }

    public function changeShoesRegister(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        // ddd($checkList);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }

        $userInfo = DB::table('users')->where('id', $user->id)->first();
        $getPantsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();
        $getTopsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->first();
        $getShoesSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        $getCapsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->first();
        $getSocksSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->first();
        $getPantsImg = DB::table('pants_tables')->where('id', $userInfo->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userInfo->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userInfo->favShoes)->first();
        $getCapsImg = DB::table('caps_tables')->where('id', $userInfo->favCaps)->first();
        $getSocksImg = DB::table('socks_tables')->where('id', $userInfo->favSocks)->first();


        return view('mainPage.main', ['userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);
    }

    public function capsFind(Request $request)
    {
        return view('searchItem.searchCaps');
    }

    public function changeCapsFind(Request $request)
    {
        return view('searchItem.changeSearchCaps');
    }

    public function capsRegister(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->first();
        // ddd($checkList);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }
        // return view('searchItem.yourList', ['input' => '']);
        // return redirect('/yourlist');
        return view('searchItem.searchSocks', ['input' => '']);
    }

    public function changeCapsRegister(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->first();
        // ddd($checkList);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }

        $userInfo = DB::table('users')->where('id', $user->id)->first();
        $getPantsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();
        $getTopsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->first();
        $getShoesSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        $getCapsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->first();
        $getSocksSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->first();
        $getPantsImg = DB::table('pants_tables')->where('id', $userInfo->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userInfo->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userInfo->favShoes)->first();
        $getCapsImg = DB::table('caps_tables')->where('id', $userInfo->favCaps)->first();
        $getSocksImg = DB::table('socks_tables')->where('id', $userInfo->favSocks)->first();


        return view('mainPage.main', ['userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);
    }

    public function socksFind(Request $request)
    {
        return view('searchItem.searchSocks');
    }

    public function changeSocksFind(Request $request)
    {
        return view('searchItem.changeSearchSocks');
    }

    public function socksRegister(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->first();
        // ddd($checkList);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }
        // return view('searchItem.yourList', ['input' => '']);
        return redirect('/yourlist');
    }

    public function changeSocksRegister(Request $request)
    {
        $user = Auth::user();

        $checkList = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->first();
        // ddd($checkList);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $user->gender,
                // 'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }

        $userInfo = DB::table('users')->where('id', $user->id)->first();
        $getPantsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();
        $getTopsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->first();
        $getShoesSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        $getCapsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->first();
        $getSocksSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->first();
        $getPantsImg = DB::table('pants_tables')->where('id', $userInfo->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userInfo->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userInfo->favShoes)->first();
        $getCapsImg = DB::table('caps_tables')->where('id', $userInfo->favCaps)->first();
        $getSocksImg = DB::table('socks_tables')->where('id', $userInfo->favSocks)->first();


        return view('mainPage.main', ['userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);
    }

    public function showList(){

        $user = Auth::user();

        $pantsItems = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();

        // ddd($pantsItems);

        if(!isset($pantsItems)){
            return view('mainPage.main');
        }

        $pantsItemId = $pantsItems->id;
        $pantsItemUser_id = $pantsItems->user_id;
        $pantsItemType = $pantsItems->type;
        $pantsItemGender = $pantsItems->gender;
        $pantsItemTarget = $pantsItems->target;
        $pantsItemBrand = $pantsItems->brand;
        $pantsItemCategory = $pantsItems->category;
        $pantsItemColor = $pantsItems->color;
        $pantsItemsOutput = DB::table('pants_tables')->where('gender', $pantsItemGender)->where('category', $pantsItemCategory)->where('color', $pantsItemColor)->where('brand', $pantsItemBrand)->get();

        // ddd($pantsItemsOutput);



        $topsItems = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->first();
        $topsItemId = $topsItems->id;
        $topsItemUser_id = $topsItems->user_id;
        $topsItemType = $topsItems->type;
        $topsItemGender = $topsItems->gender;
        $topsItemTarget = $topsItems->target;
        $topsItemBrand = $topsItems->brand;
        $topsItemCategory = $topsItems->category;
        $topsItemColor = $topsItems->color;
        $topsItemsOutput = DB::table('tops_tables')->where('gender', $topsItemGender)->where('category', $topsItemCategory)->where('color', $topsItemColor)->where('brand', $topsItemBrand)->get();


        $shoesItems = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        $shoesItemId = $shoesItems->id;
        $shoesItemUser_id = $shoesItems->user_id;
        $shoesItemType = $shoesItems->type;
        $shoesItemGender = $shoesItems->gender;
        $shoesItemTarget = $shoesItems->target;
        $shoesItemBrand = $shoesItems->brand;
        $shoesItemCategory = $shoesItems->category;
        $shoesItemColor = $shoesItems->color;
        $shoesItemsOutput = DB::table('shoes_tables')->where('gender', $shoesItemGender)->where('category', $shoesItemCategory)->where('color', $shoesItemColor)->where('brand', $shoesItemBrand)->get();

        $capsItems = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->first();
        $capsItemId = $capsItems->id;
        $capsItemUser_id = $capsItems->user_id;
        $capsItemType = $capsItems->type;
        $capsItemGender = $capsItems->gender;
        $capsItemTarget = $capsItems->target;
        $capsItemBrand = $capsItems->brand;
        $capsItemCategory = $capsItems->category;
        $capsItemColor = $capsItems->color;
        $capsItemsOutput = DB::table('caps_tables')->where('gender', $capsItemGender)->where('color', $capsItemColor)->where('brand', $capsItemBrand)->get();

        $socksItems = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->first();
        $socksItemId = $socksItems->id;
        $socksItemUser_id = $socksItems->user_id;
        $socksItemType = $socksItems->type;
        $socksItemGender = $socksItems->gender;
        $socksItemTarget = $socksItems->target;
        $socksItemBrand = $socksItems->brand;
        $socksItemCategory = $socksItems->category;
        $socksItemColor = $socksItems->color;
        $socksItemsOutput = DB::table('socks_tables')->where('gender', $socksItemGender)->where('category', $socksItemCategory)->where('color', $socksItemColor)->where('brand', $socksItemBrand)->get();

        return view('searchItem.yourList', ['pantsItems' => $pantsItems, 'topsItems' => $topsItems, 'shoesItems' => $shoesItems, 'capsItems' => $capsItems, 'socksItems' => $socksItems, 'pantsItemsOutputs' => $pantsItemsOutput, 'topsItemsOutputs' => $topsItemsOutput, 'shoesItemsOutputs' => $shoesItemsOutput, 'capsItemsOutputs' => $capsItemsOutput, 'socksItemsOutputs' => $socksItemsOutput, 'users' => $user]);
    }

    public function toMain(){
        $user = Auth::user();

        $userInfo = DB::table('users')->where('id', $user->id)->first();
        $getPantsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();
        $getTopsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->first();
        $getShoesSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        $getCapsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->first();
        $getSocksSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->first();
        $getPantsImg = DB::table('pants_tables')->where('id', $userInfo->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userInfo->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userInfo->favShoes)->first();
        $getCapsImg = DB::table('caps_tables')->where('id', $userInfo->favCaps)->first();
        $getSocksImg = DB::table('socks_tables')->where('id', $userInfo->favSocks)->first();


        return view('mainPage.main', ['userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);
    }

    public function intro(Request $request)
    {
        return view('intro.welcome');
    }

    public function saveFav(Request $request)
    {
        // ddd($request->favTops);

        $user = Auth::user();

        // ddd($request->img);

        $param = [
            'user_Id' => $user->id,
            'favTops' => $request->favTops,
            'favPants' => $request->favPants,
            'favShoes' => $request->favShoes,
            'favCaps' => $request->favCaps,
            'favSocks' => $request->favSocks,
            'created_at' => now(),
            'updated_at' => now(),
            'outfitSetImg' => $request->canvasTest,
            'title' => $request->title,
            'openText' => $request->openText,
            'closeText' => $request->closeText,
        ];
        DB::table('usersFavoriteOutfits')->insert($param);

        return view('mainPage.saveFav');
    }

    public function showMyFavList()
    {
        $user = Auth::user();

        $userData = DB::table('usersFavoriteOutfits')->where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        $otherUserData = DB::table('usersFavoriteOutfits')->where('user_id','!=', $user->id)->orderBy('created_at', 'desc')->get();

        $allUsers = DB::table('users')->get();
        // ユーザーのアイテム取得

        // $test = base64_decode($userData->outfitSetImg);
        // ddd($test);

        return view('favOutfits.myFavMain', ['userData' => $userData, 'user' => $user, 'otherUser' => $otherUserData, 'allUsers' => $allUsers]);

    }

    public function showDetail(Request $request)
    {
        $user = Auth::user();
        $userData = DB::table('usersFavoriteOutfits')->where('id', $request->id)->first();
        $userID = DB::table('users')->where('id', $userData->user_id)->first();
        // ユーザーの取得
        $allUsers = DB::table('users')->get();
        // コメントの取得
        $comments = detailComment::where("detail_id", $request->id)->get();

        $getPantsImg = DB::table('pants_tables')->where('id', $userData->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userData->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userData->favShoes)->first();
        $getCapsImg = DB::table('caps_tables')->where('id', $userData->favCaps)->first();
        $getSocksImg = DB::table('socks_tables')->where('id', $userData->favSocks)->first();

        return view('favOutfits.myFavDetail', ['userInfo' => $userData,'userID' => $userID, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg, 'comments' => $comments, 'allUsers' => $allUsers]);

    }

    public function showUserDetail(Request $request)
    {
        $user = Auth::user();
        // ユーザーの取得
        $allUsers = DB::table('users')->get();
        // ユーザーのアイテム取得
        $userData = DB::table('usersFavoriteOutfits')->where('id', $request->id)->first();
        // ユーザーの情報取得
        $userID = DB::table('users')->where('id', $userData->user_id)->first();
        // コメントの取得
        $comments = detailComment::where("detail_id", $request->id)->get();

        $getPantsImg = DB::table('pants_tables')->where('id', $userData->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userData->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userData->favShoes)->first();
        $getCapsImg = DB::table('caps_tables')->where('id', $userData->favCaps)->first();
        $getSocksImg = DB::table('socks_tables')->where('id', $userData->favSocks)->first();

        return view('favOutfits.userFavDetail', ['userInfo' => $userData,'userID' => $userID, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg, 'comments' => $comments, 'allUsers' => $allUsers]);

    }
}
