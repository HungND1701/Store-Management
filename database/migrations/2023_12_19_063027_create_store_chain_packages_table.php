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
        Schema::create('store_chain_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('store_number');
            $table->integer('staff_number');
            $table->integer('customer_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_chain_packages');
    }
};
