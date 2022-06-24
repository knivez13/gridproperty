<?php

namespace App\Http\Controllers;

use App\Models\ListingPriorityUnder as Model;
use Illuminate\Http\Request;
use Auth;


class ListingPriorityUnderController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:priority-under-list', ['only' => ['index']]);
        $this->middleware('permission:priority-under-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:priority-under-edit', ['only' => ['edit', 'update']]);
    }

    public function index()
    {
        $list = Model::orderBy('id', 'DESC')
            ->paginate(10);
        return view('backend.realstate.priorityunder.index', compact('list'));
    }

    public function create()
    {
        return view('backend.realstate.priorityunder.create');

    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);

        $data = new Model([
            'name' => $request->get('name'),
            'status' => $request->get('status'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,

        ]);

        $data->save(); // Finally, save the record.

        return back()->with('success', 'Created successfully');
        return $request;
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $data = Model::find($id);   
        return view('backend.realstate.priorityunder.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);

        $data = Model::find($id);
        $data->name = $request->get('name');
        $data->status = $request->get('status');
        $data->updated_by = Auth::user()->id;

        $data->save(); // Finally, save the record.
        return back()->with('success', 'Update successfully');
    }

    public function destroy($id)
    {
        //
    }
}
