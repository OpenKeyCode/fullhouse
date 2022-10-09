<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Delivery\DeliveryCreateRequest;
use App\Http\Requests\Back\Delivery\DeliveryUpdateRequest;
use App\Http\Service\EditorUploadImage;
use App\Models\Delivery;
use Illuminate\Http\Response;


class DeliveryController extends Controller
{
    public function index()
    {
        $deliveries = Delivery::orderBy('id', 'DESC')->paginate(5);
        return view('back.deliveries.index', compact('deliveries'));
    }

    public function create()
    {
        return view('back.deliveries.create');
    }

    public function store(DeliveryCreateRequest $request)
    {
        Delivery::create(EditorUploadImage::ImagesUpload($request->validated()));
        return redirect()->route('admin.deliveries.index');
    }

    public function show($id)
    {
        if (empty($delivery = Delivery::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.deliveries.show', compact('delivery'));
    }

    public function edit($id)
    {
        if (empty($delivery = Delivery::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.deliveries.edit', compact('delivery'));
    }

    public function update(DeliveryUpdateRequest $request, $id)
    {
        if (empty($delivery = Delivery::find($id))) abort(Response::HTTP_NOT_FOUND);
        $delivery->update(EditorUploadImage::ImagesUpload($request->validated()));
        return back();
    }

    public function destroy($id)
    {
        if (empty($delivery = Delivery::find($id))) abort(Response::HTTP_NOT_FOUND);
//        EditorUploadImage::ImageDelete($delivery->description);
        $delivery->delete();
        return redirect()->route('admin.deliveries.index');
    }
}
