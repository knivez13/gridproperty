<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'view-user-management',
            'view-realstate-management',

            'user-list',
            'user-create',
            'user-edit',

            'role-list',
            'role-create',
            'role-edit',

            'property-list',
            'property-create',
            'property-edit',

            'aminity-list',
            'aminity-create',
            'aminity-edit',

            'near-location-list',
            'near-location-create',
            'near-location-edit',

            'property-type-list',
            'property-type-create',
            'property-type-edit',

            'delivery-units-list',
            'delivery-units-create',
            'delivery-units-edit',

            'priority-list',
            'priority-create',
            'priority-edit',

            'priority-under-list',
            'priority-under-create',
            'priority-under-edit',

            'property-status-list',
            'property-status-create',
            'property-status-edit',

            'property-listing-list',
            'property-listing-create',
            'property-listing-edit',

            'listing-type-list',
            'listing-type-create',
            'listing-type-edit',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
