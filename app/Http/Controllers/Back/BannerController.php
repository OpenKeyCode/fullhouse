<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Banner\BannerCreateRequest;
use App\Http\Requests\Back\Banner\BannerUpdateRequest;
use App\Models\Banner;
use App\Service\UploadImage;
use Illuminate\Http\Response;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('back.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('back.banner.create');
    }

    public function store(BannerCreateRequest $request)
    {
        Banner::create(UploadImage::ImageUpload($request->validated(), ['image', 'image_mobile']));
        return redirect()->route('admin.banners.index');
    }

    public function show($id)
    {
        if (empty($banner = Banner::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.banner.show', compact('banner'));
    }

    public function edit($id)
    {
        if (empty($banner = Banner::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.banner.edit', compact('banner'));
    }

    public function update(BannerUpdateRequest $request, $id)
    {
        if (empty($banner = Banner::find($id))) abort(Response::HTTP_NOT_FOUND);
        $banner->update(UploadImage::ImageUpload($request->validated(), ['image', 'image_mobile']));
        return redirect()->route('admin.banners.index');
    }

    public function destroy($id)
    {
        if (empty($banner = Banner::find($id))) abort(Response::HTTP_NOT_FOUND);
        $banner->delete();
        return redirect()->route('admin.banners.index');
    }
}
