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
        Schema::table('subscriptions_plans', function (Blueprint $table) {
            $table->string('product_id')->default(null);
            $table->string(column: 'price_id')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subscriptions_plans', function (Blueprint $table) {
            $table->dropColumn('product_id');
            $table->dropColumn('price_id');
        });
    }
};
