<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function find(Request $request)
    {
        return view('searchItem.searchPants');
    }

    public function register(Request $request)
    {
        $user = Auth::user();

        $param = [
            'user_Id' => $user->id,
            'type' => $request->type,
            'gender' => $request->gender,
            'target' => $request->target,
            'brand' => $request->brand,
            'category' => $request->category,
            'color' => $request->color,

        ];

        DB::table('usersFavoriteList')->insert($param);
        return view('searchItem.searchTops', ['input' => '']);
    }

    public function topsFind(Request $request)
    {
        return view('searchItem.searchTops');
    }

    public function topsRegister(Request $request)
    {
        $user = Auth::user();

        $param = [
            'user_Id' => $user->id,
            'type' => $request->type,
            'gender' => $request->gender,
            'target' => $request->target,
            'brand' => $request->brand,
            'category' => $request->category,
            'color' => $request->color,

        ];

        DB::table('usersFavoriteList')->insert($param);
        return view('searchItem.searchShoes', ['input' => '']);
    }
}
