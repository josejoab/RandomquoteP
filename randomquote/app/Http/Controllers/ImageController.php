<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public static $images = array("img1.jpg","img2.jpg","img3.jpg","img4.jpg","img5.jpg","img6.jpg","img7.jpg",
    "img8.jpg","img9.jpg","img10.jpg","img11.jpg","img12.jpg","img13.png","img14.jpg","img15jpeg","img16.jpg",
    "img17.jpeg",
    );
    public function index()
    {
        $totalQuotes = (count(ImageController::$images));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $data['img'] = ImageController::$images[$randomNumber];
        $data['ip'] = gethostbyname(gethostname());
        $data['storage'] = Storage::disk('s3');
        return view('imagenes')->with('data',$data);
    }
    
}