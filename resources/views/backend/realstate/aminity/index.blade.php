@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Aminity List Tables</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-7">
                        <a href="{{ route('aminity.create') }}" class="btn btn-outline-info mb-2"><i class="mdi mdi-plus-circle me-2"></i>Create</a>
                    </div>
                    <div class="col-sm-5">
                        <div class="input-group text-sm-end">
                            <input type="text" class="form-control mb-2 me-1" placeholder="Searh..">
                            <button type="button" class="btn btn-light mb-2 me-1">Search</button>
                        </div>
                    </div><!-- end col-->
                </div>
                @include('backend.realstate.aminity.list')
            </div>
            @if (Session::has('success'))
            <div class="alert alert-success text-sm" role="alert">
                <strong>Well Done!</strong> {{ Session::get('success') }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection