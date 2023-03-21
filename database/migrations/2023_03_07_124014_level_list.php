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
        Schema::create('LevelList', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->double('firstperson');
            $table->double('secondperson');
            $table->double('thirdperson');
            $table->double('totalmember');
            $table->double('withdrawlimit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LevelList');
    }
};
