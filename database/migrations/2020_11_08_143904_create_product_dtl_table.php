<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDtlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_dtl', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->string('product_code')->nullable();
            $table->integer('variant_id')->nullable();
            $table->integer('kdv')->nullable();
            $table->integer('shipping_day')->nullable();
            $table->integer('type_id')->nullable();
            $table->float('price')->nullable();
            $table->integer('stock')->nullable();
            $table->float('shipping_price')->nullable();
            $table->json('old_prices')->nullable();
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
        Schema::dropIfExists('product_dtl');
    }
}
