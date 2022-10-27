<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Setting\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Response;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::all();
        return view('back.setting.setting', compact('setting'));
    }

    public function update(SettingRequest $request, $id)
    {
        if (empty($setting = Setting::find($id))) abort(Response::HTTP_NOT_FOUND);
        $setting->update($request->validated());
        return back();
    }
}
