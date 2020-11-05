<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    //
    public function imageUpload()
    {
    	return view('image.ipload');
    }
    public function imageUploadPost(Request $request)
    {
    	$request->validate(['image'=>'image|mimes:jpg,png,gif|max:2048' ]);

    	 'image' = time().'.'.$request->image->extension();
    	  $request->image->move(public_path('images'),$imageName);


    	  return back()
    	  ->with('success','You have successfully upload image.')
    	  ->with('image',$imageName);
    }
}
