<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $title = 'Gallery';
        $images = [
            asset('assets/images/gallery/1.jpg'),
            asset('assets/images/gallery/2.jpg'),
            asset('assets/images/gallery/3.jpg'),
            asset('assets/images/gallery/4.jpg'),
            asset('assets/images/gallery/5.jpg'),
            asset('assets/images/gallery/6.jpg'),
            asset('assets/images/gallery/7.jpg'),
            asset('assets/images/gallery/8.jpg'),
            asset('assets/images/gallery/9.jpg'),
            asset('assets/images/gallery/10.jpg'),
            asset('assets/images/gallery/11.jpg'),
            asset('assets/images/gallery/12.jpg'),
            asset('assets/images/gallery/13.jpg'),
            asset('assets/images/gallery/14.jpg'),
            asset('assets/images/gallery/15.jpg'),
            asset('assets/images/gallery/16.jpg'),
            asset('assets/images/gallery/17.jpg'),
            asset('assets/images/gallery/18.jpg'),
        ];

        return view('gallery')->with('images', $images)->with('title', $title);
    }
}
