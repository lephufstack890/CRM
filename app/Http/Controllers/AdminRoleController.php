<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }

    public function create()
    {
        $permissionsParents = Permission::where('parent_id', 0)->get();
        return view('admin.role.add', compact('permissionsParents'));
    }

    public function store(Request $request){
        $role = Role::create([
            'name' => $request->name
        ]);

        $role->permissions()->attach($request->permission_id);
        return redirect()->route('role.index');
    }

    public function edit($id)
    {
        $permissionsParents = Permission::where('parent_id', 0)->get();
        $role = Role::find($id);
        $permissionsChecked = $role->permissions;
        return view('admin.role.edit', compact('permissionsParents', 'role', 'permissionsChecked'));
    }

    public function update($id, Request $request){
        $role = Role::find($id);
        $role->update([
            'name' => $request->name
        ]);

        $role->permissions()->sync($request->permission_id);
        return redirect()->route('role.index');
    }
}
