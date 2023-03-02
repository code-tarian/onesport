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
        Schema::create('arena_facilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('arena_id');
            $table->unsignedBigInteger('facility_id');
            $table->timestamps();

            $table->foreign('arena_id')->references('id')->on('arena');
            $table->foreign('facility_id')->references('id')->on('facilities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arena_facilities');
    }
};
