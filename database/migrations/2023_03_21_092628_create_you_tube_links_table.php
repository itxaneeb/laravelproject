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
        Schema::create('you_tube_links', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->double('reward');
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('pacakge_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('you_tube_links');
    }
};
