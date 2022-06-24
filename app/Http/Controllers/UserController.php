<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Auth;


class UserController extends Controller
{
    public function index()
    {
        $list = User::orderBy('id','DESC')->paginate(10);
        return view('backend.usermanagement.user.index',compact('list'));
    }

    public function edit($id)
    {
        $data = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $data->roles->pluck('name','name')->all();
    
        return view('backend.usermanagement.user.edit',compact('data','roles','userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required',
            'status' => 'required'
        ]);
    
        $data = User::find($id);
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->address = $request->get('address');
        $data->bank_details = $request->get('bank_details');
        $data->crypto_wallet = $request->get('crypto_wallet');
        $data->status = $request->get('status');
        $data->updated_by = Auth::user()->id;
        $data->save();
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $data->assignRole($request->input('role'));
        return back()->with('success', 'Update successfully');
    }
}
