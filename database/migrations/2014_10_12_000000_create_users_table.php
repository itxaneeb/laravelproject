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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone');
            $table->string('password');
            $table->string('address');
            $table->string('package_id')->default('none');
            $table->string('sendernumber')->default('none');
            $table->string('trx_id')->nullable();
            $table->string('inviter_id')->nullable();
            $table->string('task_earning')->nullable();
            $table->string('team_earning')->nullable();
            $table->string('user_balance')->nullable();
            $table->string('status')->default('pending');
            $table->enum('role',['admin','user'])->default('user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
