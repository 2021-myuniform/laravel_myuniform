<?php

namespace App\Http\Controllers;

use App\Models\Pants_table;
use Illuminate\Http\Request;

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
}
