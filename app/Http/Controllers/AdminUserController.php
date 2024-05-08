<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function edit($id){
        $roles = Role::all();
        $user = User::find($id);
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $user->roles()->sync($request->role_id);
        return redirect()->route('user.index');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
