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
        Schema::create('field', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('arena_id');
            $table->string('slug', 150);
            $table->string('field_name', 128);
            $table->string('field_image', 128);
            $table->float('rating')->nullable()->default(null);
            $table->integer('amount_order')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->boolean('active')->default(1);
            $table->timestamps();

            $table->foreign('arena_id')->references('id')->on('arena');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('field');
    }
};
