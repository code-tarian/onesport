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
        Schema::create('venue', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('venue_name', 128);
            $table->string('contact', 25);
            $table->string('slug', 150);
            $table->string('logo', 128)->default('default.png');
            $table->integer('level_id')->default(1);
            $table->float('rating')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->boolean('active')->default(1);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venue');
    }
};
