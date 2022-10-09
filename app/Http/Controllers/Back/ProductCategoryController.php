<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\ProductCategory\ProductCategoryCreateRequest;
use App\Http\Requests\Back\ProductCategory\ProductCategoryUpdateRequest;
use App\Http\Service\EditorUploadImage;
use App\Http\Service\UploadImage;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\File;
use Laravel\Sail\Console\PublishCommand;


class ProductCategoryController extends Controller
{
    public function index()
    {

        $categories = ProductCategory::orderBy('id', 'DESC')->paginate(5);
        return view('back.product_categories.index', compact('categories'));
    }


    public function create()
    {
        $categories = ProductCategory::all();
        return view('back.product_categories.create', compact('categories'));
    }

    public function store(ProductCategoryCreateRequest $request)
    {
        $validated = UploadImage::ImageUpload(EditorUploadImage::ImagesUpload($request->validated()));
        ProductCategory::create($validated);
        return redirect()->route('admin.product_categories.index');
    }


    public function show($id)
    {
        if (empty($productCategory = ProductCategory::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.product_categories.show', compact('productCategory'));
    }


    public function edit($id)
    {
        if (empty($productCategory = ProductCategory::find($id))) abort(Response::HTTP_NOT_FOUND);
        $categories = ProductCategory::all();
        return view('back.product_categories.edit', compact('productCategory','categories'));
    }


    public function update(ProductCategoryUpdateRequest $request, $id)
    {
        if (empty($productCategory = ProductCategory::find($id))) abort(Response::HTTP_NOT_FOUND);
        $validated = UploadImage::ImageUpload(EditorUploadImage::ImagesUpload($request->validated()));
        $productCategory->update($validated);
        return redirect()->route('admin.product_categories.index');
    }


    public function destroy($id)
    {
        if (empty($productCategory = ProductCategory::find($id))) abort(Response::HTTP_NOT_FOUND);
        $productCategory->delete();
        return redirect()->route('admin.product_categories.index');
    }
}
