<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;



class Property extends Model
{
    use HasFactory,Sortable;
    protected $guarded = [];
    public $sortable = ['id', 'address'];


    public function propertytype()
    {
        return $this->belongsTo(PropertyType::class, 'property_type_id');
    }

    public function listingid()
    {
        return $this->belongsTo(Listing::class, 'listing_id');
    }

    public function listingtype()
    {
        return $this->belongsTo(ListingType::class, 'type_id');
    }

    public function deliveryunit()
    {
        return $this->belongsTo(ListingDeliveryUnit::class, 'delivery_unit_id');
    }

    public function priority()
    {
        return $this->belongsTo(ListingPriority::class, 'priority_id');
    }

    public function priorityunder()
    {
        return $this->belongsTo(ListingPriorityUnder::class, 'property_under_id');
    }

    public function status()
    {
        return $this->belongsTo(ListingStatus::class, 'status_id');
    }
}
