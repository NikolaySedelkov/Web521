<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        if(!Schema::hasTable('city'))
            Schema::create('city', function (Blueprint $table) {
                $table->id("city_id");
                $table->string("city");
                $table->smallInteger("country_id");
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city');
    }
};