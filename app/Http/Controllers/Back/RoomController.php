<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Room\RoomCreateRequest;
use App\Http\Requests\Back\Room\RoomUpdateRequest;
use App\Http\Service\EditorUploadImage;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class RoomController extends Controller
{

    public function index()
    {
        $rooms = Room::orderBy('id', 'DESC')->paginate(5);
        return view('back.rooms.index', compact('rooms'));
    }


    public function create()
    {
        return view('back.rooms.create');
    }


    public function store(RoomCreateRequest $request)
    {

        Room::create(EditorUploadImage::ImagesUpload($request->validated()));
        return redirect()->route('admin.rooms.index');
    }


    public function show($id)
    {
        if (empty($room = Room::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.rooms.show', compact('room'));
    }


    public function edit($id)
    {
        if (empty($room = Room::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.rooms.edit', compact('room'));

    }

    public function update(RoomUpdateRequest $request, $id)
    {
        if (empty($room = Room::find($id))) abort(Response::HTTP_NOT_FOUND);
        $room->update(EditorUploadImage::ImagesUpload($request->validated()));
        return back();
    }


    public function destroy($id)
    {
        if (empty($room = Room::find($id))) abort(Response::HTTP_NOT_FOUND);
//        EditorUploadImage::ImageDelete($room->description);
        $room->delete();
        return redirect()->route('admin.rooms.index');
    }
}
