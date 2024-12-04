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
        Schema::create('wifi_datas', function (Blueprint $table) {
            $table->id();
            $table->string('date'); // Assuming date is stored as a string (you could also use 'date' type if it's a proper date)
            $table->string('trade_code'); // This should stay as string if it represents a code
            $table->decimal('high', 15, 2); // Changed to decimal with 15 digits and 2 decimal places
            $table->decimal('low', 15, 2); // Changed to decimal
            $table->decimal('open', 15, 2); // Changed to decimal
            $table->decimal('close', 15, 2); // Changed to decimal
            $table->decimal('volume', 15, 2); // Changed to decimal

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wifi_datas');
    }
};
