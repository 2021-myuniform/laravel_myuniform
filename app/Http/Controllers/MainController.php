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

        return view('searchItem.searchTops', ['input' => '']);
    }

    public function topsFind(Request $request)
    {
        return view('searchItem.searchTops');
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
        return view('searchItem.searchShoes', ['input' => '']);
    }

    public function shoesFind(Request $request)
    {
        return view('searchItem.searchShoes');
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
        $shoesItems = DB::table('usersFavoriteLists')->where('user_id', $user->id)->where('type', 'shoes')->first();

        return view('searchItem.yourList', ['pantsItems' => $pantsItems, 'topsItems' => $topsItems, 'shoesItems' => $shoesItems, 'pantsItemsOutputs' => $pantsItemsOutput, 'users' => $user]);

    }
}
