<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;
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


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        if (empty($delivery = Delivery::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.deliveries.show', compact('delivery'));
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
        if (empty($delivery = Delivery::find($id))) abort(Response::HTTP_NOT_FOUND);
        $delivery->delete();
        return redirect()->route('admin.deliveries.index');
    }
}
