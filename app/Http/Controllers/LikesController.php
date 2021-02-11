<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\usersFavoriteOutfit;

class LikesController extends Controller
{
    public function store(Request $request, $postId)
    {
        Like::create(
          array(
            'user_id' => Auth::user()->id,
            'post_id' => $postId
          )
        );

        $post = usersFavoriteOutfit::findOrFail($postId);

        // return redirect()->route('createLike', $post->id);
        return redirect(route('createLike', [
            'id' => $post->id
        ]));
    }

    public function destroy($postId, $likeId) {
        $post = usersFavoriteOutfit::findOrFail($postId);
        // $post->like_by()->findOrFail($likeId)->delete();
        $post->likesCount = ($post->likesCount) -1;
        // ddd($post->likesCount);
        usersFavoriteOutfit::where('id', $postId)->update(['likesCount' => $post->likesCount]);
        Like::where('post_id', $postId)->where('user_id', Auth::user()->id)->delete();

        // ddd('test');


    //   return redirect()->route('createLike', $post->id);
    return redirect(route('createLike', [
        'id' => $post->id
    ]));
    }
}
