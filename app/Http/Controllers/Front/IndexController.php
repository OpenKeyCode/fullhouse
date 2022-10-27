<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;

class IndexController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        return view('front.index', compact('categories'));
    }
}
