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
        Schema::create('_customer', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing unsigned BIGINT primary key
            $table->string('name'); // Creates a VARCHAR column for the name
            $table->string('grade'); // Creates a VARCHAR column for the grade
            $table->timestamps(); // Creates created_at and updated_at TIMESTAMP columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_customer');
    }
};
