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
        Schema::table('farms', function (Blueprint $table) {
            $table->string('number_of_rooms')->nullable()->default(null)->change();
            $table->string('number_of_bathrooms')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('farms', function (Blueprint $table) {
            $table->string('number_of_rooms')->default(0)->change();
            $table->string('number_of_bathrooms')->default(0)->change();
        });
    }
};
