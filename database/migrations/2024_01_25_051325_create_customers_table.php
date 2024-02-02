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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_num');
            $table->string('customer_name');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->unsignedDecimal('balance');
            $table->unsignedDecimal('credit_limit');
            $table->unsignedBigInteger('rep_num');
            $table->timestamps();
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
