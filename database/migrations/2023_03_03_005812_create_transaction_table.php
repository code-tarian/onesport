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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code')->unique();
            $table->unsignedBigInteger('user_id');
            $table->integer('total_pay');
            $table->boolean('use_ticket')->default(0);
            $table->boolean('dp_method')->default(0);
            $table->integer('total_dp')->nullable()->default(null);
            $table->boolean('dp_status')->nullable()->default(0);
            $table->boolean('repayment')->default(0);
            $table->dateTime('transaction_date');
            $table->dateTime('transaction_exp_date');
            $table->string('snap_token');
            $table->string('transaction_status')->nullable()->default(null);
            $table->integer('status_code')->nullable()->default(null);
            $table->boolean('cancel')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
