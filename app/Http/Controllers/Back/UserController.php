<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(5);
//        $users = User::withTrashed()->orderBy('id', 'DESC')->paginate(5);
//        dd(User::onlyTrashed()->get());
        return view('back.users.index', compact('users'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        if (empty($user = User::find($id))) abort(404);
        return view('back.users.show', compact('user'));
    }

    public function edit($id)
    {
        if (empty($user = User::find($id))) abort(404);
        return view('back.users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        if (empty($user = User::find($id))) abort(404);
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
