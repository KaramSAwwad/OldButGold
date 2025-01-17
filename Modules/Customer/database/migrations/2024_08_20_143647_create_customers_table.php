<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phoneNumber')->unique();
            $table->string('address');
            $table->string('postal_code');
            $table->unsignedBigInteger('city_id'); // Foreign key to cities table
            $table->string('avatar')->nullable();
            $table->softDeletes();
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
