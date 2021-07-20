<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            //$table->unsignedInteger('user_id');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
