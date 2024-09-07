<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
            $table->softDeletes();
        });

        // Insert predefined categories
        DB::table('categories')->insert([
            ['name' => 'Real estate'],
            ['name' => 'Vehicles'],
            ['name' => 'Digital goods'],
            ['name' => 'Home and kitchen'],
            ['name' => 'Services'],
            ['name' => 'Personal belongings'],
            ['name' => 'Entertainment and leisure'],
            ['name' => 'Industrial equipment'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
