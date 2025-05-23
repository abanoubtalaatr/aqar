<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('apartments', function (Blueprint $table) {
            $table->string('floor_number')->nullable()->change();
            $table->string('number_of_rooms')->nullable()->change();
            $table->string('number_of_living_rooms')->nullable()->change();
            $table->string('number_of_bathrooms')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apartments', function (Blueprint $table) {
            $table->integer('floor_number')->nullable()->change();
            $table->integer('number_of_rooms')->nullable()->change();
            $table->integer('number_of_living_rooms')->nullable()->change();
            $table->integer('number_of_bathrooms')->nullable()->change();
        });
    }
};
