<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;

class UserController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        return view('front.user.index', compact('categories'));
    }
}
