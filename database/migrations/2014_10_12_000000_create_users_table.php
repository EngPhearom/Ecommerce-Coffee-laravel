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
            $table->string('userName', 255);
            $table->string('password', 255);
            $table->string('email', 255);
            $table->string('phoneNumber', 20);
            $table->enum('status', ['active', 'inactive', 'pending'])->default('active');
            $table->dateTime('createdDate')->nullable();
            $table->string('lastLogin', 255);
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
