<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\detailComment;
use App\Models\User;

class CommentController extends Controller
{
    function uploadComment(Request $request){

        $user_id = $request->input('user_id');
        $detail_id = $request->input('detail_id');
        $comment = $request->input('comment');
        $userName = $request->input('userName');

		if($comment) {
			//アップロードされた画像を保存する
			// $path = $upload_image->store('uploads',"public");
			//画像の保存に成功したらDBに記録する
				detailComment::create([
					"user_id" => $user_id,
					"detail_id" => $detail_id,
					"comment" => $comment,
					"userName" => $userName,
					"created_at" => now(),
				]);
		}
		return redirect("/userDetail?id={$detail_id}");

	}
}
