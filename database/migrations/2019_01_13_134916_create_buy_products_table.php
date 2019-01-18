<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_products', function (Blueprint $table) {
            $table->increments('buyer_id');
            $table->string('buyer_name');
            $table->string('buyer_contact');
            $table->string('buyer_email');
            $table->string('buyer_location');
            $table->string('buyer_city');
            $table->string('product_name');
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
        Schema::dropIfExists('buy_products');
    }
}
