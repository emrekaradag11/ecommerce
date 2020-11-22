<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->integer('variant_id')->nullable();
            $table->integer('member_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('comment_type')->nullable();
            $table->integer('star')->nullable();
            $table->string('comment_title')->nullable();
            $table->string('comment_body')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
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
        Schema::dropIfExists('product_comments');
    }
}
