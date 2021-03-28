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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('text')->nullable();
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('tags')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('product_unit_id')->nullable();
            $table->integer('status_id')->default('1');
            $table->integer('ord')->nullable();
            $table->integer('currency_id')->nullable();
            $table->string('barcode')->nullable();
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
