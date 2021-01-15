<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(Request $request)
    {
        // $items = DB::select('select * from pants_table');
        // $items2 = DB::select('select * from shoes_table');
        // $items3 = DB::select('select * from tops_table');

        $items = DB::table('pants_table')->get();
        $items2 = DB::table('shoes_table')->get();
        $items3 = DB::table('tops_table')->get();

        return view('main.index', ['items' => $items, 'items2' => $items2, 'items3' => $items3]);
    }
}
