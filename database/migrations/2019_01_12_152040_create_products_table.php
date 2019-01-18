<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_brand');
            $table->string('product_color')->nullable();
            $table->enum('product_category',['laptop','phone','computer_part']);
            $table->enum('product_rating',['1','2','3','4','5']);
            $table->enum('product_availability',['available','sold'])->default('available');
            $table->string('brief_description');
            $table->string('description');
            $table->string('additional_info')->nullable();
            $table->enum('feature',['0','1'])->default('0');
            $table->enum('cart',['0','1'])->default('0');
            $table->string('thumb_picture');
            $table->string('image_one');
            $table->string('image_two');
            $table->string('image_three');
            $table->string('image_four');
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
