@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Edit Status</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            @if (Session::has('success'))
            <div class="alert alert-success text-sm" role="alert">
                <strong>Well Done!</strong> {{ Session::get('success') }}
            </div>
            @endif
                <h4 class="header-title">Information</h4>
                <hr>
                {!! Form::open(['route' => ['status.update', $data->id], 'method' => 'PATCH',]) !!}
                <div class="mb-3 col-md-4">
                    <div class="form-floating">
                        {!! Form::text('name', $data->name, ['id' => 'floatingInputGrid', 'class' => 'form-control' , 'required']) !!}
                        <label for="floatingInputGrid">Name<i style="color:red;">*</i></label>
                    </div>
                </div>
                <div class="mb-3 col-md-4">
                    <div class="form-floating">
                        {!! Form::select('status', ['' => 'Select','1' => 'Active','0' => 'Inactive'] , $data->status, ['class' => 'form-select' ,'id' => 'floatingSelect','aria-label' => 'Floating label select example', 'required' ]) !!}
                        <label for="floatingSelect">Status<i style="color:red;">*</i></label>
                    </div>
                </div>
                <div class="mb-0 col-md-6">
                    <button class="btn btn-outline-info mb-2">Update</button>
                    <a href="{{ route('status.index') }}" class="btn btn-outline-danger mb-2">Cancel</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection