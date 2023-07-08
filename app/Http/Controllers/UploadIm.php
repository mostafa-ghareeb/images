<?php

namespace App\Http\Controllers;

use App\Models\image;
use APP\Traits\UploadImage;
use Illuminate\Http\Request;
use App\Traits\UploadImageTrait;

class UploadIm extends Controller
{
    use UploadImageTrait;

    public function images(){
        $images = image::all();
        return view('index',compact('images'));
    }
    public function showForm(){
        return view('Upload');
    }
    
    public function store(Request $request){
        
        $path = $this->UploadImage($request,'admins');
        image::create(['path'=>$path]);
        return redirect('show_image');
    }
}
