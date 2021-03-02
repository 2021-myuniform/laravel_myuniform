<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Library\SearchItemPack;


class SelectWearController extends Controller
{
    public function selectPants(Request $request)
    {
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
        $pantsItemsOutput = DB::table('pants_tables')->where('gender', $pantsItemGender)->where('category', $pantsItemCategory)->where('color', $pantsItemColor)->where('brand', $pantsItemBrand)->get();

        $rakutenColorTag = SearchItemPack::encodeRakutenColorTag($pantsItems->color);
        $rakutenBrandTag = SearchItemPack::encodeRakutenBrandTag($pantsItems->brand);

        if ($user->gender == 'male') {
            // 男性用パンツ
            $rakutenGenre = 508772;

            if ($pantsItemCategory == 'long') {
                $rakutenGenre = 565926;
            }
        } else {
            // 女性用パンツ
            $rakutenGenre = 508820;

            if ($pantsItemCategory == 'long') {
                $rakutenGenre = 565928;
            }
        }

        $rakutenList = SearchItemPack::SearchRakutenAPI($rakutenGenre, $rakutenBrandTag, $rakutenColorTag);
        // ddd($rakutenList);

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


        return view('mainPage.searchPants', ['pantsItemsOutputs' => $pantsItemsOutput, 'users' => $user, 'userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg, 'rakutenLists' => $rakutenList]);
    }

    public function sendPants(Request $request)
    {
        // ddd($request->pantsItemsOutputId);
        $user = Auth::user();

        $selectPants = $request->pantsItemsOutputId;
        $param = [
            'favPants' => $request->pantsItemsOutputId,
        ];
        DB::table('users')->where('id', $user->id)->update($param);
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

        // ddd($getPantsImg->img);

        return view('mainPage.main', ['selectPants' => $selectPants, 'userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);

        // return view('contents.main', ['selectPants' => $selectPants, 'userInfo' => $userInfo, 'users' => $user]);
    }

    public function selectTops(Request $request)
    {
        $user = Auth::user();

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

        $rakutenColorTag = SearchItemPack::encodeRakutenColorTag($topsItems->color);
        $rakutenBrandTag = SearchItemPack::encodeRakutenBrandTag($topsItems->brand);

        if ($user->gender == 'male') {

            switch ($topsItemCategory) {
                case 'tshirt':
                    // 男性用Tシャツ
                    $rakutenGenre = 508759;
                    break;
                case 'polo':
                    // 男性用ポロシャツ
                    $rakutenGenre = 508762;
                    break;
                case 'setup':
                    // 男性用セットアップ
                    $rakutenGenre = 508782;
                    break;
                case 'outer':
                    // 男性用アウター
                    $rakutenGenre = 565925;
                    break;
                default:
                    $rakutenGenre = '';
                    break;
            }
        } else {

            switch ($topsItemCategory) {
                case 'tshirt':
                    // 女性用Tシャツ
                    $rakutenGenre = 508803;
                    break;
                case 'polo':
                    // 女性用ポロシャツ
                    $rakutenGenre = 508809;
                    break;
                case 'setup':
                    // 女性用セットアップ
                    $rakutenGenre = 508831;
                    break;
                case 'outer':
                    // 女性用アウター
                    $rakutenGenre = 565927;
                    break;
                default:
                    $rakutenGenre = '';
                    break;
            }
        }

        $rakutenList = SearchItemPack::SearchRakutenAPI($rakutenGenre, $rakutenBrandTag, $rakutenColorTag);

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


        return view('mainPage.searchTops', ['topsItemsOutputs' => $topsItemsOutput, 'users' => $user, 'userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg,  'rakutenLists' => $rakutenList]);
    }

    public function sendTops(Request $request)
    {
        // ddd($request->pantsItemsOutputId);
        $user = Auth::user();

        $selectTops = $request->topsItemsOutputId;
        $param = [
            'favTops' => $request->topsItemsOutputId,
        ];
        DB::table('users')->where('id', $user->id)->update($param);
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


        return view('mainPage.main', ['selectTops' => $selectTops, 'userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);

        // return view('contents.main', ['selectTops' => $selectTops, 'userInfo' => $userInfo,'users' => $user]);
    }

    public function selectShoes(Request $request)
    {
        $user = Auth::user();

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


        return view('mainPage.searchShoes', ['shoesItemsOutputs' => $shoesItemsOutput, 'users' => $user, 'userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);
    }

    public function sendShoes(Request $request)
    {
        // ddd($request->pantsItemsOutputId);
        $user = Auth::user();

        $selectShoes = $request->shoesItemsOutputId;
        $param = [
            'favShoes' => $request->shoesItemsOutputId,
        ];
        DB::table('users')->where('id', $user->id)->update($param);
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


        return view('mainPage.main', ['selectShoes' => $selectShoes, 'userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);

        // return view('contents.main', ['selectShoes' => $selectShoes, 'userInfo' => $userInfo,'users' => $user]);
    }

    public function selectCaps(Request $request)
    {
        $user = Auth::user();

        $capsItems = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'caps')->first();
        $capsItemId = $capsItems->id;
        $capsItemUser_id = $capsItems->user_id;
        $capsItemType = $capsItems->type;
        $capsItemGender = $capsItems->gender;
        $capsItemBrand = $capsItems->brand;
        $capsItemColor = $capsItems->color;
        $capsItemsOutput = DB::table('caps_tables')->where('gender', $capsItemGender)->where('color', $capsItemColor)->where('brand', $capsItemBrand)->get();

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


        return view('mainPage.searchCaps', ['capsItemsOutputs' => $capsItemsOutput, 'users' => $user, 'userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);
    }

    public function sendCaps(Request $request)
    {
        // ddd($request->pantsItemsOutputId);
        $user = Auth::user();

        $selectCaps = $request->capsItemsOutputId;
        $param = [
            'favCaps' => $request->capsItemsOutputId,
        ];
        DB::table('users')->where('id', $user->id)->update($param);
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


        return view('mainPage.main', ['selectCaps' => $selectCaps, 'userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);

        // return view('contents.main', ['selectShoes' => $selectShoes, 'userInfo' => $userInfo,'users' => $user]);
    }

    public function selectSocks(Request $request)
    {
        $user = Auth::user();

        $socksItems = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'socks')->first();
        $socksItemId = $socksItems->id;
        $socksItemUser_id = $socksItems->user_id;
        $socksItemType = $socksItems->type;
        $socksItemGender = $socksItems->gender;
        $socksItemBrand = $socksItems->brand;
        $socksItemColor = $socksItems->color;
        $socksItemCategory = $socksItems->category;
        $socksItemsOutput = DB::table('socks_tables')->where('gender', $socksItemGender)->where('color', $socksItemColor)->where('category', $socksItemCategory)->where('brand', $socksItemBrand)->get();

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


        return view('mainPage.searchSocks', ['socksItemsOutputs' => $socksItemsOutput, 'users' => $user, 'userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);
    }

    public function sendSocks(Request $request)
    {
        // ddd($request->pantsItemsOutputId);
        $user = Auth::user();

        $selectSocks = $request->socksItemsOutputId;
        $param = [
            'favSocks' => $request->socksItemsOutputId,
        ];
        DB::table('users')->where('id', $user->id)->update($param);
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


        return view('mainPage.main', ['selectSocks' => $selectSocks, 'userInfo' => $userInfo, 'getPantsSet' => $getPantsSet, 'getTopsSet' => $getTopsSet, 'getShoesSet' => $getShoesSet, 'getCapsSet' => $getCapsSet, 'getSocksSet' => $getSocksSet, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg]);

        // return view('contents.main', ['selectShoes' => $selectShoes, 'userInfo' => $userInfo,'users' => $user]);
    }
}
