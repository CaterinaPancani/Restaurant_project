<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('food_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fdid');
            $table->foreign('fdid')->references('id')->on('foods');
            $table->unsignedBigInteger('odid');
            $table->foreign('odid')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_order');
    }
    };
