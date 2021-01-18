<?php

namespace App\Http\Controllers;

use App\Models\Pants_table;
use App\Models\Tops_table;
use App\Models\Shoes_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PantsController extends Controller
{
    public function index(Request $request)
    {
        $items = Pants_table::all();
        return view('searchItem.index', ['items' => $items]);
    }

    public function find(Request $request)
    {
        return view('searchItem.find', ['input' => '']);
    }

    // public function search(Request $request)
    // {
    //     $item = Pants_table::find($request->input);
    //     $param = ['input' => $request->input, 'item' => $item];
    //     return view('searchItem.find', $param);
    // }

    // public function search(Request $request)
    // {
    //     $item = Pants_table::where('color', $request->input)->get();
    //     $param = ['input' => $request->input, 'item' => $item];
    //     return view('searchItem.find', $param);
    // }

    // public function search(Request $request)
    // {
    //     $item = Pants_table::nameEqual($request->input)->get();
    //     $param = ['input' => $request->input, 'item' => $item];
    //     return view('searchItem.find', $param);
    // }

    public function search(Request $request)
    {

        // dd($request->inputHigh);

        $max = $request->inputHigh + 0;
        $min = $request->inputLow + 0;
        $colors = $request->colors;

        // $item = Pants_table::priceGreaterThan($max)->priceLessThan($min)->first();
        $item = Pants_table::priceGreaterThan($min)->priceLessThan($max)->getColor($colors)->get();

        // ddd($item);

        $param = ['inputHigh' => $request->inputHigh, 'inputLow' => $request->inputLow, 'items' => $item];
        return view('searchItem.find', $param);
    }

    public function addPants(Request $request)
    {

        $param = [
            'itemId' => $request->itemId,
            'price' => $request->price,
            'brand' => $request->brand,
            'color' => $request->color,

        ];

        DB::table('storage_pants')->insert($param);
        return view('searchItem.topsFind', ['input' => '']);
    }

    public function topsFind(Request $request)
    {
        return view('searchItem.topsFind', ['input' => '']);
    }

    public function topsSearch(Request $request)
    {

        // dd($request->inputHigh);

        $max = $request->inputHigh + 0;
        $min = $request->inputLow + 0;
        $colors = $request->colors;

        // $item = Pants_table::priceGreaterThan($max)->priceLessThan($min)->first();
        $item = Tops_table::priceGreaterThan($min)->priceLessThan($max)->getColor($colors)->get();

        // ddd($item);

        $param = ['inputHigh' => $request->inputHigh, 'inputLow' => $request->inputLow, 'items' => $item];
        return view('searchItem.topsFind', $param);
    }

    public function addTops(Request $request)
    {

        $param = [
            'itemId' => $request->itemId,
            'price' => $request->price,
            'brand' => $request->brand,
            'color' => $request->color,

        ];

        DB::table('storage_tops')->insert($param);
        return view('searchItem.shoesFind', ['input' => '']);
    }

    public function shoesFind(Request $request)
    {
        return view('searchItem.shoesFind', ['input' => '']);
    }

    public function shoesSearch(Request $request)
    {

        // dd($request->inputHigh);

        $max = $request->inputHigh + 0;
        $min = $request->inputLow + 0;
        $colors = $request->colors;

        // $item = Pants_table::priceGreaterThan($max)->priceLessThan($min)->first();
        $item = Shoes_table::priceGreaterThan($min)->priceLessThan($max)->getColor($colors)->get();

        // ddd($item);

        $param = ['inputHigh' => $request->inputHigh, 'inputLow' => $request->inputLow, 'items' => $item];
        return view('searchItem.shoesFind', $param);
    }

    public function addShoes(Request $request)
    {

        $param = [
            'itemId' => $request->itemId,
            'price' => $request->price,
            'brand' => $request->brand,
            'color' => $request->color,

        ];

        DB::table('storage_shoes')->insert($param);
        return view('searchItem.check', ['input' => '']);
    }
}
