<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('property_type_id');
            $table->unsignedBigInteger('listing_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('priority_id');
            $table->unsignedBigInteger('property_under_id');
            $table->string('property_under_what')->nullable();
            $table->string('reserve_by')->nullable();
            $table->decimal('asking_price')->nullable();
            $table->decimal('last_price')->nullable();
            $table->decimal('leasing_price')->nullable();
            $table->decimal('price_per_square')->nullable();
            $table->integer('lot_area')->nullable();
            $table->unsignedBigInteger('delivery_unit_id')->nullable();
            $table->integer('number_of_unit')->nullable();
            $table->integer('number_of_room')->nullable();
            $table->integer('number_of_bedroom')->nullable();
            $table->integer('number_of_bathroom')->nullable();
            $table->integer('number_of_floor')->nullable();
            $table->integer('number_of_kitchen')->nullable();
            $table->integer('number_of_parking')->nullable();
            $table->integer('number_of_maid_room')->nullable();
            $table->string('title_number')->nullable();
            $table->string('tax_dec_number')->nullable();
            $table->string('unit_letter')->nullable();
            $table->string('owner');
            $table->string('contact_number');
            $table->string('email');

            $table->string('source')->nullable();
            $table->tinyInteger('favorite')->default(0);
            $table->text('remarks')->nullable();
            $table->string('references')->nullable();
            $table->string('attachment')->nullable();
            $table->string('nft_store_link')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('property_type_id')->references('id')->on('property_types')->onDelete('cascade');
            $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('listing_types')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('listing_statuses')->onDelete('cascade');
            $table->foreign('priority_id')->references('id')->on('listing_priorities')->onDelete('cascade');
            $table->foreign('property_under_id')->references('id')->on('listing_priority_unders')->onDelete('cascade');
            $table->foreign('delivery_unit_id')->references('id')->on('listing_delivery_units')->onDelete('cascade');

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
