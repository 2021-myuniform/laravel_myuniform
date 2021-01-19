<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        $pantsItemsOutput = DB::table('pants_tables')->where('gender', $pantsItemGender)->where('adult', $pantsItemTarget)->where('color', $pantsItemColor)->get();

        return view('contents.selectPants', ['pantsItemsOutputs' => $pantsItemsOutput,'users' => $user]);
    }

    public function sendPants(Request $request)
    {
        // ddd($request->pantsItemsOutputId);
        $user = Auth::user();

        $selectPants = $request->pantsItemsOutputId;

        return view('contents.main', ['selectPants' => $selectPants,'users' => $user]);
    }
}
