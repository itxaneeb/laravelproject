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
        Schema::create('add_products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->double('price');
            $table->double('reward');
            $table->unsignedBigInteger('packageid');
            $table->unsignedBigInteger('levelid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_products');
    }
};
