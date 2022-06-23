<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\ListingDeliveryUnit;
use App\Models\ListingPriority;
use App\Models\ListingPriorityUnder;
use App\Models\ListingStatus;
use App\Models\ListingType;
use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Auth;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Property::orderBy('id', 'DESC')->paginate(10);
        return view('backend.property.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listing = Listing::pluck('name', 'name')->all();
        $deliveryunit = ListingDeliveryUnit::pluck('name', 'name')->all();
        $priority = ListingPriority::pluck('name', 'name')->all();
        $priorityunder = ListingPriorityUnder::pluck('name', 'name')->all();
        $type = ListingType::pluck('name', 'name')->all();
        $status = ListingStatus::pluck('name', 'name')->all();
        $propertytype = PropertyType::pluck('name', 'name')->all();
        return view('backend.property.create', compact('listing', 'deliveryunit', 'priority', 'priorityunder', 'type', 'status', 'status', 'propertytype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'address' => 'required',
            'property_type_id' => 'required',
            'listing_id' => 'required',
            'type_id' => 'required',
            'status_id' => 'required',
            'priority_id' => 'required',
            'property_under_id' => 'required',
            'owner' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
        ]);

        $listing = Listing::where('name', $request->get('listing_id'))->first();
        $deliveryunit = ListingDeliveryUnit::where('name', $request->get('delivery_unit_id'))->first();
        $priority = ListingPriority::where('name', $request->get('priority_id'))->first();
        $priorityunder = ListingPriorityUnder::where('name', $request->get('property_under_id'))->first();
        $type = ListingType::where('name', $request->get('type_id'))->first();
        $status = ListingStatus::where('name', $request->get('status_id'))->first();
        $propertytype = PropertyType::where('name', $request->get('property_type_id'))->first();

        $data = new Property([
            'address' => $request->get('address'),
            'country_id' => $request->get('country_id'),
            'state_id' => $request->get('state_id'),
            'city_id' => $request->get('city_id'),
            'property_type_id' => $propertytype->id,
            'listing_id' => $listing->id,
            'type_id' => $type->id,
            'status_id' => $status->id,
            'priority_id' => $priority->id,
            'property_under_id' => $priorityunder->id,
            'delivery_unit_id' => $deliveryunit->id,

            'property_under_what' => $request->get('property_under_what'),
            'reserve_by' => $request->get('reserve_by'),
            'asking_price' => $request->get('asking_price'),
            'last_price' => $request->get('last_price'),
            'leasing_price' => $request->get('leasing_price'),
            'price_per_square' => $request->get('price_per_square'),
            'lot_area' => $request->get('lot_area'),
            'number_of_unit' => $request->get('number_of_unit'),
            'number_of_room' => $request->get('number_of_room'),
            'number_of_bedroom' => $request->get('number_of_bedroom'),
            'number_of_bathroom' => $request->get('number_of_bathroom'),
            'number_of_floor' => $request->get('number_of_floor'),
            'number_of_kitchen' => $request->get('number_of_kitchen'),
            'number_of_parking' => $request->get('number_of_parking'),
            'number_of_maid_room' => $request->get('number_of_maid_room'),
            'title_number' => $request->get('title_number'),
            'tax_dec_number' => $request->get('tax_dec_number'),
            'unit_letter' => $request->get('unit_letter'),
            'owner' => $request->get('owner'),
            'contact_number' => $request->get('contact_number'),
            'email' => $request->get('email'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,

        ]);

        $data->save(); // Finally, save the record.

        return back()->with('success', 'Property created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
