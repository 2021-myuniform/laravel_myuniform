<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\usersFavoriteList;
use App\Models\usersFavoriteOutfit;
use Illuminate\Support\Facades\DB;
use App\Models\Like;
use App\Models\detailComment;

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', array('except' => 'index'));
    }

    public function show(Request $request) {
    //     $id = $request->id;

    //     $post = usersFavoriteOutfit::findOrFail($id); // findOrFail 見つからなかった時の例外処理

    //     $like = $post->where('user_id', Auth::user()->id)->first();
    //     // ddd($like);

    // //   return view('favOutfits.userFavDetail')->with(array('post' => $post, 'like' => $like));
    //   return view('mainPage.saveFav');

        $user = Auth::user();
        // ユーザーの取得
        $allUsers = DB::table('users')->get();
        // ユーザーのアイテム取得
        $userData = DB::table('users_favorite_outfits')->where('id', $request->id)->first();
        // ユーザーの情報取得
        $userID = DB::table('users')->where('id', $userData->user_id)->first();
        // コメントの取得
        $comments = detailComment::where("detail_id", $request->id)->get();

        // いいねの取得
        $post = usersFavoriteOutfit::findOrFail($request->id);
        // findOrFail 見つからなかった時の例外処理

        $like = Like::where('post_id', $request->id)->where('user_id', Auth::user()->id)->first();
        // $like = $post->likes()->where('user_id', Auth::user()->id)->first();
        // ddd($like);

        $getPantsImg = DB::table('pants_tables')->where('id', $userData->favPants)->first();
        $getTopsImg = DB::table('tops_tables')->where('id', $userData->favTops)->first();
        $getShoesImg = DB::table('shoes_tables')->where('id', $userData->favShoes)->first();
        $getCapsImg = DB::table('caps_tables')->where('id', $userData->favCaps)->first();
        $getSocksImg = DB::table('socks_tables')->where('id', $userData->favSocks)->first();

        return view('favOutfits.userFavDetail', ['userInfo' => $userData,'userID' => $userID, 'users' => $user, 'getPantsImg' => $getPantsImg, 'getTopsImg' => $getTopsImg, 'getShoesImg' => $getShoesImg, 'getCapsImg' => $getCapsImg, 'getSocksImg' => $getSocksImg, 'comments' => $comments, 'allUsers' => $allUsers, 'like' => $like, 'post' => $post]);

    }
}
