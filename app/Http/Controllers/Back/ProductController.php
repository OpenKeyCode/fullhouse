<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Product\ProductCreateRequest;
use App\Http\Requests\Back\Product\ProductUpdateRequest;
use App\Models\Delivery;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Room;
use App\Service\EditorUploadImage;
use App\Service\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::orderBy('id', 'DESC')->paginate(5);
        return view('back.products.index', compact('products'));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        $rooms = Room::all();
        $deliveries = Delivery::all();
        return view('back.products.create', compact('categories', 'rooms', 'deliveries'));
    }

    public function store(ProductCreateRequest $request)
    {
        Product::create(UploadImage::ImageUpload(EditorUploadImage::ImagesUpload($request->validated(), ['description', 'short_description', 'parameters'])));
        return redirect()->route('admin.products.index');

    }

    public function show($id)
    {
        if (empty($product = Product::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.products.show', compact('product'));
    }

    public function edit($id)
    {
        if (empty($product = Product::find($id))) abort(Response::HTTP_NOT_FOUND);
        $categories = ProductCategory::all();
        $rooms = Room::all();
        $deliveries = Delivery::all();
        return view('back.products.edit', compact('product', 'categories', 'rooms', 'deliveries'));
    }

    public function update(ProductUpdateRequest $request, $id)
    {
        if (empty($product = Product::find($id))) abort(Response::HTTP_NOT_FOUND);
//        dd($request->validated());
        $validated = UploadImage::ImageUpload(EditorUploadImage::ImagesUpload($request->validated(), ['description', 'short_description', 'parameters']));
        $product->update($validated);
        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        if (empty($product = Product::find($id))) abort(Response::HTTP_NOT_FOUND);
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
