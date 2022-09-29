<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(5);
        return view('back.users.index', compact('users'));
    }


    public function create()
    {
        return view('back.users.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('admin.users.index');
    }

    public function show($id)
    {
        if (empty($user = User::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.users.show', compact('user'));
    }

    public function edit($id)
    {
        if (empty($user = User::find($id))) abort(Response::HTTP_NOT_FOUND);
        return view('back.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'string',
            'last_name' => 'string',
            'phone' => 'string',
            'email' => 'string', 'email', 'unique:users,email',
        ]);
        $user->update($data);
        return back();
    }

    public function destroy($id)
    {
        if (empty($user = User::find($id))) abort(Response::HTTP_NOT_FOUND);
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
