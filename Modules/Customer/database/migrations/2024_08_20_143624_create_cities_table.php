<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id(); // Primary key, unsignedBigInteger
            $table->string('name')->unique(); // City name
            $table->timestamps();
        });

        // Insert the 10 largest cities in Iran
        DB::table('cities')->insert([
            ['name' => 'Tehran'],
            ['name' => 'Mashhad'],
            ['name' => 'Isfahan'],
            ['name' => 'Karaj'],
            ['name' => 'Shiraz'],
            ['name' => 'Tabriz'],
            ['name' => 'Qom'],
            ['name' => 'Ahvaz'],
            ['name' => 'Kermanshah'],
            ['name' => 'Urmia'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
}
