@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Create Property</h4>
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
                {!! Form::open(['route' => 'property.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="mb-3 col-md-6">
                    <div class="form-floating">
                        {!! Form::text('address', null, ['id' => 'floatingInputGrid', 'class' => 'form-control' , 'required']) !!}
                        <label for="floatingInputGrid">Address <i style="color:red;">*</i></label>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('property_type_id', ['' => 'Select'] + $propertytype , null, ['class' => 'form-select' ,'id' => 'floatingSelect','aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Property Type <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('listing_id',['' => 'Select'] + $listing, null, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Listing ID <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('type_id',['' => 'Select'] + $type, null, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Type <i style="color:red;">*</i></label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('status_id',['' => 'Select'] + $status, null, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Status <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('priority_id',['' => 'Select'] + $priority, null, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Priority <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('property_under_id',['' => 'Select'] + $priorityunder, null, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Priority Under <i style="color:red;">*</i></label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <div class="form-floating">
                            {!! Form::text('property_under_what', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Property Under What?</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <div class="form-floating">
                            {!! Form::text('reserve_by', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Reserve By:</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::number('asking_price', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Asking Price</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::number('last_price', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Last Price</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::number('leasing_price', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Leasing Price</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-0 col-md-4">
                        <div class="form-floating">
                            {!! Form::number('price_per_square', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Price/sqm</label>
                        </div>
                    </div>
                    <div class="mb-0 col-md-4">
                        <div class="form-floating">
                            {!! Form::number('lot_area', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Lot Area</label>
                        </div>
                    </div>
                    <div class="mb-0 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('delivery_unit_id',['' => 'Select'] + $deliveryunit, null, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Delivery Unit <i style="color:red;">*</i></label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-2">
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_unit', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Units</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_room', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Rooms</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_bedroom', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Bedroom</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_bathroom', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Bathroom</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_floor', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Floor</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_kitchen', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Kitchen</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_parking', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Parking</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_maid_room', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Maid Room</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::text('title_number', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Title Number</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::text('tax_dec_number', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Tax Dec. Number</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::text('unit_letter', null, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Unit Letter</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::text('owner', null, ['id' => 'floatingInputGrid', 'class' => 'form-control' , 'required']) !!}
                            <label for="floatingInputGrid">Owner <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::text('contact_number', null, ['id' => 'floatingInputGrid', 'class' => 'form-control' , 'required']) !!}
                            <label for="floatingInputGrid">Contact Number <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::email('email', null, ['id' => 'floatingInputGrid', 'class' => 'form-control' , 'required']) !!}
                            <label for="floatingInputGrid">Email <i style="color:red;">*</i></label>
                        </div>
                    </div>
                </div>
                <div class="mb-0 col-md-6">
                    <button class="btn btn-outline-info mb-2">Save</button>
                    <a href="{{ route('property.index') }}" class="btn btn-outline-danger mb-2">Cancel</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection