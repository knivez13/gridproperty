@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Edit Property</h4>
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
                {!! Form::open(['route' => ['property.update', $data->id], 'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}
                <div class="mb-3 col-md-6">
                    <div class="form-floating">
                        {!! Form::text('address', $data->address, ['id' => 'floatingInputGrid', 'class' => 'form-control' , 'required']) !!}
                        <label for="floatingInputGrid">Address <i style="color:red;">*</i></label>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('property_type_id', ['' => 'Select'] + $propertytype , $data->propertytype->name, ['class' => 'form-select' ,'id' => 'floatingSelect','aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Property Type <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('listing_id',['' => 'Select'] + $listing, $data->listingid->name, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Listing ID <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('type_id',['' => 'Select'] + $type, $data->listingtype->name, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Type <i style="color:red;">*</i></label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('status_id',['' => 'Select'] + $status, $data->status->name, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Status <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('priority_id',['' => 'Select'] + $priority, $data->priority->name, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Priority <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('property_under_id',['' => 'Select'] + $priorityunder, $data->priorityunder->name, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Priority Under <i style="color:red;">*</i></label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <div class="form-floating">
                            {!! Form::text('property_under_what', $data->property_under_what, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Property Under What?</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <div class="form-floating">
                            {!! Form::text('reserve_by', $data->reserve_by, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Reserve By:</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::number('asking_price', $data->asking_price, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Asking Price</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::number('last_price', $data->last_price, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Last Price</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::number('leasing_price', $data->leasing_price, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Leasing Price</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-0 col-md-4">
                        <div class="form-floating">
                            {!! Form::number('price_per_square', $data->price_per_square, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Price/sqm</label>
                        </div>
                    </div>
                    <div class="mb-0 col-md-4">
                        <div class="form-floating">
                            {!! Form::number('lot_area', $data->lot_area, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Lot Area</label>
                        </div>
                    </div>
                    <div class="mb-0 col-md-4">
                        <div class="form-floating">
                            {!! Form::select('delivery_unit_id',['' => 'Select'] + $deliveryunit, $data->deliveryunit->name, ['class' => 'form-select' ,'id' => 'floatingSelect', 'aria-label' => 'Floating label select example', 'required' ]) !!}
                            <label for="floatingSelect">Delivery Unit <i style="color:red;">*</i></label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-2">
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_unit', $data->number_of_unit, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Units</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_room', $data->number_of_room, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Rooms</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_bedroom', $data->number_of_bedroom, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Bedroom</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_bathroom', $data->number_of_bathroom, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Bathroom</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_floor', $data->number_of_floor, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Floor</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_kitchen', $data->number_of_kitchen, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Kitchen</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_parking', $data->number_of_parking, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Parking</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="form-floating">
                            {!! Form::number('number_of_maid_room', $data->number_of_maid_room, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Number of Maid Room</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::text('title_number', $data->title_number, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Title Number</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::text('tax_dec_number', $data->tax_dec_number, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Tax Dec. Number</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::text('unit_letter', $data->unit_letter, ['id' => 'floatingInputGrid', 'class' => 'form-control']) !!}
                            <label for="floatingInputGrid">Unit Letter</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::text('owner', $data->owner, ['id' => 'floatingInputGrid', 'class' => 'form-control' , 'required']) !!}
                            <label for="floatingInputGrid">Owner <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::text('contact_number', $data->contact_number, ['id' => 'floatingInputGrid', 'class' => 'form-control' , 'required']) !!}
                            <label for="floatingInputGrid">Contact Number <i style="color:red;">*</i></label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <div class="form-floating">
                            {!! Form::email('email', $data->email, ['id' => 'floatingInputGrid', 'class' => 'form-control' , 'required']) !!}
                            <label for="floatingInputGrid">Email <i style="color:red;">*</i></label>
                        </div>
                    </div>
                </div>
                <div class="mb-0 col-md-6">
                    <button class="btn btn-outline-info mb-2">Update</button>
                    <a href="{{ route('property.index') }}" class="btn btn-outline-danger mb-2">Cancel</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection