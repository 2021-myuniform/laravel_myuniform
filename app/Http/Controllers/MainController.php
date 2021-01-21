<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\usersFavoriteList;

class MainController extends Controller
{
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
                'gender' => $request->gender,
                'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $request->gender,
                'target' => $request->target,
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
                'gender' => $request->gender,
                'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $request->gender,
                'target' => $request->target,
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
        $getPantsImg = DB::table('pants_tables')->where('id', $userInfo->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userInfo->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userInfo->favShoes)->first();

        return view('mainPage.main', ['userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg]);
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
                'gender' => $request->gender,
                'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $request->gender,
                'target' => $request->target,
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
        // ddd($checkList);

        if(isset($checkList)){
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $request->gender,
                'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $request->gender,
                'target' => $request->target,
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
        $getPantsImg = DB::table('pants_tables')->where('id', $userInfo->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userInfo->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userInfo->favShoes)->first();

        return view('mainPage.main', ['userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg]);

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
                'gender' => $request->gender,
                'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $request->gender,
                'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->insert($param);
        }
        // return view('searchItem.yourList', ['input' => '']);
        return redirect('/yourlist');
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
                'gender' => $request->gender,
                'target' => $request->target,
                'brand' => $request->brand,
                'category' => $request->category,
                'color' => $request->color,
            ];
            DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->update($param);
        }else{
            $param = [
                'user_Id' => $user->id,
                'type' => $request->type,
                'gender' => $request->gender,
                'target' => $request->target,
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
        $getPantsImg = DB::table('pants_tables')->where('id', $userInfo->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userInfo->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userInfo->favShoes)->first();

        return view('mainPage.main', ['userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg]);
    }

    public function showList(){

        $user = Auth::user();

        $pantsItems = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();
        $pantsItemId = $pantsItems->id;
        $pantsItemUser_id = $pantsItems->user_id;
        $pantsItemType = $pantsItems->type;
        $pantsItemGender = $pantsItems->gender;
        $pantsItemTarget = $pantsItems->target;
        $pantsItemBrand = $pantsItems->brand;
        $pantsItemCategory = $pantsItems->category;
        $pantsItemColor = $pantsItems->color;
        $pantsItemsOutput = DB::table('pants_tables')->where('gender', $pantsItemGender)->where('adult', $pantsItemTarget)->where('color', $pantsItemColor)->get();

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
        $topsItemsOutput = DB::table('tops_tables')->where('gender', $topsItemGender)->where('adult', $topsItemTarget)->where('color', $topsItemColor)->get();


        $shoesItems = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        $shoesItemId = $shoesItems->id;
        $shoesItemUser_id = $shoesItems->user_id;
        $shoesItemType = $shoesItems->type;
        $shoesItemGender = $shoesItems->gender;
        $shoesItemTarget = $shoesItems->target;
        $shoesItemBrand = $shoesItems->brand;
        $shoesItemCategory = $shoesItems->category;
        $shoesItemColor = $shoesItems->color;
        $shoesItemsOutput = DB::table('shoes_tables')->where('gender', $shoesItemGender)->where('adult', $shoesItemTarget)->where('color', $shoesItemColor)->get();

        return view('searchItem.yourList', ['pantsItems' => $pantsItems, 'topsItems' => $topsItems, 'shoesItems' => $shoesItems, 'pantsItemsOutputs' => $pantsItemsOutput, 'topsItemsOutputs' => $topsItemsOutput, 'shoesItemsOutputs' => $shoesItemsOutput, 'users' => $user]);
    }

    public function toMain(){
        $user = Auth::user();

        $userInfo = DB::table('users')->where('id', $user->id)->first();
        $getPantsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'pants')->first();
        $getTopsSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'tops')->first();
        $getShoesSet = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();
        $getPantsImg = DB::table('pants_tables')->where('id', $userInfo->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userInfo->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userInfo->favShoes)->first();

        return view('mainPage.main', ['userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg]);
    }

    public function intro(Request $request)
    {
        return view('intro.welcome');
    }
}
