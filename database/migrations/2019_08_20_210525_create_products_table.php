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
            $table->string('name', 255);
            $table->unsignedInteger('quantity');
            $table->unsignedDecimal('buy_price', 10, 2);
            $table->unsignedDecimal('sale_price', 10, 2);
            $table->foreignId('model_type_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
