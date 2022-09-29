<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ProductCategoryController extends Controller
{
    public function index()
    {

        $categories = ProductCategory::orderBy('id', 'DESC')->paginate(5);
        return view('back.product_categories.index', compact('categories'));
    }


    public function create()
    {
        return view('back.product_categories.create');
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        if (empty($productCategory = ProductCategory::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.product_categories.show', compact('productCategory'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        if (empty($productCategory = ProductCategory::find($id))) abort(Response::HTTP_NOT_FOUND);
        $productCategory->delete();
        return redirect()->route('admin.product_categories.index');
    }
}
