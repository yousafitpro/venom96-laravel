<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('gateways');
        Schema::create('gateways', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable()->default('N/A');
            $table->string("private_key")->nullable()->default('N/A');
            $table->string("public_key")->nullable()->default('N/A');
            $table->string("email")->nullable()->default('N/A');
            $table->string("merchantId")->nullable()->default('N/A');
            $table->string("returnUrl")->nullable()->default('N/A');
            $table->string("merchantname")->nullable()->default('N/A');
            $table->string("merchantusername")->nullable()->default('N/A');
            $table->string("merchantApiusername")->nullable()->default('N/A');
            $table->string("signature")->nullable()->default('N/A');
            $table->string("password")->nullable()->default('N/A');
            $table->string("status")->nullable()->default('0');
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
        Schema::dropIfExists('gateways');
    }
}
