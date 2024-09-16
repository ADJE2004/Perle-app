<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function aboutus(){
        return view('frontend.aboutus');
    }

    public function products(){
        return view('frontend.products');
    }

    public function pearl(){
        return view('frontend.pearl');
    }

    public function singleprod($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.singleproduct', compact('product'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function fil(){
        return view('frontend.fil');
    }
}
