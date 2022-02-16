<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->bigInteger("category_id");
            $table->string("name");
            $table->string("type");
            $table->string("price");
            $table->string("status")->default('active');
            $table->string("discount")->default('0');
            $table->longText("secret_info")->default('');
            $table->longText("short_info")->default('');
            $table->string("thumbnail")->default('');
            $table->string("is_deleted")->default('0');
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
