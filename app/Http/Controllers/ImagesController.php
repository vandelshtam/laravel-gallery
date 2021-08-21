<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ImageService;


class ImagesController extends Controller
{

    private $images;
    

    public function __construct(ImageService $imageService)
        {
            $this -> images = $imageService;
            
            
        }

    public function index() {
        $images = $this->images->all();
        return view('welcome',['imagesInView'=> $images]);
    }


    public function store(Request $request) {
        $image = $request->file('image');
        $this->images->add($image);
        return redirect('/');    
    }

    public function show($id) {
        $image = $this->images->imageOne($id);
        return view('show', ['imageInView' => $image -> image]);
    }


    function update(Request $request, $id){
        $this -> images -> imageUpdate($id, $request -> image); 
        return redirect('/');   
    }

    function delete($id){
        $this -> images -> imageDelete($id); 
        
        return redirect('/');   
    }

    function create() {
        return view('create');
    }
}
