<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use http\Env\Url;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::all();
        return view('front.user.index', compact('categories'));
    }
}
