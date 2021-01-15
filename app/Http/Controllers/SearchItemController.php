<?php

namespace App\Http\Controllers;

use App\Models\SearchItem;
use Illuminate\Http\Request;

class SearchItemController extends Controller
{
    public function index(Request $request)
    {
        $items = SearchItem::all();
        return view('searchItem.index', ['items' => $items]);
    }
}
