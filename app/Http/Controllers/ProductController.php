<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productView(Request $request, $productName){
        $view = 'product';
        return view('user.'.$view);
    }
}
