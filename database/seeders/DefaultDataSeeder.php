<?php

namespace Database\Seeders;

use App\Models\Aminity;
use App\Models\Listing;
use App\Models\ListingDeliveryUnit;
use App\Models\ListingPriority;
use App\Models\ListingPriorityUnder;
use App\Models\ListingStatus;
use App\Models\ListingType;
use App\Models\NearestLocation;
use App\Models\PropertyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Aminity::insert([
        //     ['name'=>'','status'=>1],
        //     ['name'=>'','status'=>1],
        //     ['name'=>'','status'=>1],
        //     ['name'=>'','status'=>1],
        //     ['name'=>'','status'=>1],
        //     ['name'=>'','status'=>1],
        //     ['name'=>'','status'=>1],
        //     ['name'=>'','status'=>1],
        //     ['name'=>'','status'=>1],
        //     ['name'=>'','status'=>1],
        // ]);

        Aminity::insert([
            ['name' => 'Good for kids', 'status' => 1],
            ['name' => 'Elevator in building', 'status' => 1],
            ['name' => 'Bike parking', 'status' => 1],
            ['name' => 'Alcohol', 'status' => 1],
            ['name' => 'Reservations', 'status' => 1],
            ['name' => 'Free coffee and tea', 'status' => 1],
            ['name' => 'Accepts Credit Card', 'status' => 1],
            ['name' => 'Air Condition', 'status' => 1],
            ['name' => 'Cable TV', 'status' => 1],
            ['name' => 'Balcony', 'status' => 1],
        ]);

        Listing::insert([
            ['name' => 'GPV (Grid Property Ventures)', 'status' => 1],
            ['name' => 'LB1 | For Brokers', 'status' => 1],
            ['name' => 'LA1 | For Agent', 'status' => 1],
            ['name' => 'LBF1 | For Real State Agent', 'status' => 1],
        ]);

        ListingType::insert([
            ['name' => 'Condo', 'status' => 1],
            ['name' => 'House', 'status' => 1],
            ['name' => 'Lot', 'status' => 1],
            ['name' => 'Town House', 'status' => 1],
            ['name' => 'Apartment', 'status' => 1],
        ]);

        ListingStatus::insert([
            ['name' => 'For Sale', 'status' => 1],
            ['name' => 'For Lease', 'status' => 1],
            ['name' => 'For Sale/Lease', 'status' => 1],
            ['name' => 'In Process', 'status' => 1],
            ['name' => 'Sold', 'status' => 1],
            ['name' => 'Not for Sales', 'status' => 1],
            ['name' => 'Others', 'status' => 1],
        ]);

        ListingPriority::insert([
            ['name' => 'Low | 30 days or more', 'status' => 1],
            ['name' => 'Med | 14 days or more', 'status' => 1],
            ['name' => 'High | within 7 days', 'status' => 1],
        ]);

        ListingPriorityUnder::insert([
            ['name' => 'Individual', 'status' => 1],
            ['name' => 'Corporation', 'status' => 1],
        ]);
        ListingDeliveryUnit::insert([
            ['name' => 'Unfurnished', 'status' => 1],
            ['name' => 'Semi Furnished', 'status' => 1],
            ['name' => 'Fully Furnished', 'status' => 1],
        ]);

        PropertyType::insert([
            ['name' => 'Residential - R1', 'status' => 1],
            ['name' => 'Industrial - IN1', 'status' => 1],
            ['name' => 'Commercial - C1', 'status' => 1],
            ['name' => 'Agricultural - A1', 'status' => 1],
            ['name' => 'Mix Use - M1', 'status' => 1],
        ]);

        NearestLocation::insert([
            ['name' => 'Rail Station', 'status' => 1],
            ['name' => 'Bus Station', 'status' => 1],
            ['name' => 'Airport', 'status' => 1],
            ['name' => 'Beach', 'status' => 1],
            ['name' => 'Metro', 'status' => 1],
            ['name' => 'Bank', 'status' => 1],
            ['name' => 'School', 'status' => 1],
            ['name' => 'Hospital', 'status' => 1],
            ['name' => 'Super Market', 'status' => 1],
            ['name' => 'Pharmacy', 'status' => 1],
        ]);
    }
}
