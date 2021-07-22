<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->unsignedInteger('quantity');
            $table->unsignedDecimal('buy_price',10,2);
            $table->unsignedDecimal('sale_price',10,2);
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->unsignedInteger('media_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
