<?php
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageService
{

    public function all(){
        $images = DB::table('images')
                ->select('*')
                ->get();
                $myImages = $images->all();
        return $myImages;
    }

    public function imageOne($id){
        $image = DB::table('images')
                ->select('*')->where('id', $id)
                ->first();
        return $image;
        
    }

    public function add($image){
        
        DB::table('images')->insert(['image' => $image->store('uploads')]);

    }

    public function imageEdit($id){
        $image = DB::table('images')
                ->select('*')->where('id', $id)
                ->first();
        return $image;
    }

    public function imageUpdate($id, $image){
        $imageDB = DB::table('images')
                ->select('*')->where('id', $id)
                ->first();
        Storage::delete($imageDB -> image);        
        $filename = $image->store('uploads');
        DB::table('images')
                  ->where('id', $id)
                  ->update(['image' => $filename]);
    }

    public function imageDelete($id){
        $image = $this -> imageOne($id);
        Storage::delete($image -> image);    
        DB::table('images')->where('id', $id)->delete();

    }
}
