<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;


class RoleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:role-list', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
    }
    
    public function index()
    {
        $list = Role::orderBy('id','ASC')->paginate(10);
        return view('backend.usermanagement.role.index',compact('list'));
    }
    
    public function create()
    {
        $permission = Permission::get();
        return view('backend.usermanagement.role.create',compact('permission'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
    
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
    
        return back()->with('success','Created successfully');
    }

    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();
    
        return view('backend.usermanagement.role.show',compact('role','rolePermissions'));
    }
    
    public function edit($id)
    {
        $data = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
    
        return view('backend.usermanagement.role.edit',compact('data','permission','rolePermissions'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
    
        $role->syncPermissions($request->input('permission'));
    
        return back()->with('success','Updated successfully');
    }
    
    public function destroy($id)
    {

    }
}