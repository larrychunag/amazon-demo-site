<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100)->nullable(false);
            $table->integer('price')->nullable(false);
            $table->string('size', 10)->nullable(false);
            $table->text('description')->nullable(false);
            $table->json('image')->nullable(false);
            $table->string('status', 10)->nullable(false);
            $table->timestamp('created_data');
            $table->timestamp('updated_data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
