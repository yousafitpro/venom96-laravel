<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string("status")->default('Pending');
            $table->string("bid_amount")->default('0');
            $table->text('instant_offer_id')->nullable();
            $table->text('request_id')->nullable();
            $table->text('api_version')->nullable();
            $table->text('year')->nullable();
            $table->text('make')->nullable();
            $table->text('model')->nullable();
            $table->text('trim')->nullable();
            $table->text('vin')->nullable();
            $table->text('body_type')->nullable();
            $table->text('door_count')->nullable();
            $table->text('fuel_type')->nullable();
            $table->text('body_style')->nullable();
            $table->text('adjusted_curb_weight')->nullable();
            $table->text('color')->nullable();
            $table->text('usage')->nullable();
            $table->text('squish_vin')->nullable();
            $table->text('category')->nullable();
            $table->text('weight_category')->nullable();
            $table->text('location_zip_code')->nullable();
            $table->text('location_city')->nullable();
            $table->text('location_county')->nullable();
            $table->text('location_state_code')->nullable();
            $table->text('condition_all_tires_inflated')->nullable();
            $table->text('condition_flat_tires_location')->nullable();
            $table->text('condition_driver_front')->nullable();
            $table->text('condition_passenger_front')->nullable();
            $table->text('condition_driver_rear')->nullable();
            $table->text('condition_passenger_rear')->nullable();
            $table->text('wheels_removed')->nullable();
            $table->text('wheels_removed_location_driver_front')->nullable();
            $table->text('wheels_removed_location_passenger_front')->nullable();
            $table->text('wheels_removed_location_driver_rear')->nullable();
            $table->text('wheels_removed_location_passenger_rear')->nullable();
            $table->text('drivetrain_condition')->nullable();
            $table->text('engine_transmission_condition')->nullable();
            $table->text('body_damage_free')->nullable();
            $table->text('body_damage_location_driver_front')->nullable();
            $table->text('body_damage_location_passenger_front')->nullable();
            $table->text('body_damage_location_driver_rear')->nullable();
            $table->text('body_damage_location_passenger_rear')->nullable();
            $table->text('mirrors_lights_glass_intact')->nullable();
            $table->text('mirrors_lights_glass_damage_location_driver_front')->nullable();
            $table->text('mirrors_lights_glass_damage_location_passenger_front')->nullable();
            $table->text('mirrors_lights_glass_damage_location_driver_rear')->nullable();
            $table->text('mirrors_lights_glass_damage_location_passenger_rear')->nullable();
            $table->text('interior_intact')->nullable();
            $table->text('flood_fire_damage_free')->nullable();
            $table->text('mileage')->nullable();
            $table->text('ownership_title_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
