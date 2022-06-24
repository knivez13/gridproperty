@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Create Role</h4>
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
                {!! Form::open(['route' => 'role.store', 'method' => 'POST']) !!}
                <div class="mb-3 col-md-4">
                    <div class="form-floating">
                        {!! Form::text('name', null, ['id' => 'floatingInputGrid', 'class' => 'form-control' , 'required']) !!}
                        <label for="floatingInputGrid">Name<i style="color:red;">*</i></label>
                    </div>
                </div>
                <ul class="mb-3 list-group">
                    @foreach($permission as $value)
                    <li class="list-group-item">
                        {!! Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input me-1')) !!}
                        {{ $value->name }}
                    </li>
                    @endforeach
                </ul>

                <div class="mb-0 col-md-6">
                    <button class="btn btn-outline-info mb-2">Save</button>
                    <a href="{{ route('role.index') }}" class="btn btn-outline-danger mb-2">Cancel</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection