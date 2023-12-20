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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone', 30);
            $table->string('username');
            $table->foreignId('system_role_id')->constrained('system_roles')->onDelete('cascade');
            $table->foreignId('store_chain_id')->constrained('store_chains')->onDelete('cascade');
            $table->foreignId('store_chain_role_id')->constrained('store_chain_roles')->onDelete('cascade');
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('phone');
            $table->dropColumn('username');
            $table->dropColumn('is_active');
            $table->dropForeign(['system_role_id']);
            $table->dropColumn('system_role_id');
            $table->dropForeign(['store_chain_id']);
            $table->dropColumn('store_chain_id');
            $table->dropForeign(['store_chain_role_id']);
            $table->dropColumn('store_chain_role_id');
        });
    }
};
