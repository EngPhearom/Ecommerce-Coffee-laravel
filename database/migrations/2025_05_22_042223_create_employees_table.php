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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 255);
            $table->string('lastname', 255);
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('email', 255);
            $table->string('phoneNumber', 20);
            $table->string('position', 255);
            $table->string('hireDate', 255);
            $table->decimal('salary', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
