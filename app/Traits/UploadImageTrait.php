<?php 
namespace App\Traits;
use Illuminate\Http\Request;

trait UploadImageTrait{

    public function UploadImage(Request $request,$foldername){
        $image = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs($foldername , $image , 'mostafa');
        return $path;
    }
}