<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class ProductCayegoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        return view('front.index', compact('categories'));
    }

}
