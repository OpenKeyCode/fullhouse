<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
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


    public function store(Request $request)
    {
        $validated = $request->validated();
        Room::created($validated);
        return redirect()->route('admin.rooms.index');
    }


    public function show($id)
    {
        if (empty($room = Room::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.rooms.show', compact('room'));
    }


    public function edit($id)
    {
        return back();
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        if (empty($room = Room::find($id))) abort(Response::HTTP_NOT_FOUND);
        $room->delete();
        return redirect()->route('admin.rooms.index');
    }
}
