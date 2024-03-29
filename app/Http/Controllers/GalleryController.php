<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $title = 'Gallery';
        $images = [
            asset('assets/images/gallery/1.JPG'),
            asset('assets/images/gallery/2.JPG'),
            asset('assets/images/gallery/4.jpeg'),
            asset('assets/images/gallery/5.JPG'),
            asset('assets/images/gallery/6.JPG'),
            asset('assets/images/gallery/12.JPG'),
            asset('assets/images/gallery/13.JPG'),
            asset('assets/images/gallery/14.JPG'),
            asset('assets/images/gallery/16.JPG'),
            asset('assets/images/gallery/17.jpg'),
            asset('assets/images/gallery/18.jpg'),
            asset('assets/images/gallery/19.jpg'),
            asset('assets/images/gallery/20.jpg'),
            asset('assets/images/gallery/21.jpg'),
            asset('assets/images/gallery/22.JPG'),
            asset('assets/images/gallery/23.JPG'),
            asset('assets/images/gallery/25.jpg'),
            asset('assets/images/gallery/26.JPG'),
        ];

        return view('gallery')->with('images', $images)->with('title', $title);
    }
}
