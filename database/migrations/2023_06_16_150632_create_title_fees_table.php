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
        Schema::create('title_fees', function (Blueprint $table) {
            $table->id();
            $table->decimal('price_low', 10, 2);
            $table->decimal('price_high', 10, 2);
            $table->decimal('title_policy_fee', 10, 2);
            $table->string('transaction_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('title_fees');
    }
};
