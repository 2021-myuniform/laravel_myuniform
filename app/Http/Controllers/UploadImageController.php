<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UploadImageController extends Controller
{
    function show(){
		return view("upload_form");
	}

	function upload(Request $request){
        $request->validate([
			'image' => 'required|file|image|mimes:png,jpeg'
		]);
		$upload_image = $request->file('image');

		if($upload_image) {
			//アップロードされた画像を保存する
			$path = $upload_image->store('uploads',"public");
			//画像の保存に成功したらDBに記録する
			// if($path){
			// 	UploadImage::create([
			// 		"file_name" => $upload_image->getClientOriginalName(),
			// 		"file_path" => $path
			// 	]);
            // }

            if($path){
                $user = Auth::user();

                $param = [
                    'userImgName' => $upload_image->getClientOriginalName(),
                    'userImgPath' => $path,
                ];


                DB::table('users')->where('id', $user->id)->update($param);
            }
		}
		return redirect("/dashboard");
    }
    
}
