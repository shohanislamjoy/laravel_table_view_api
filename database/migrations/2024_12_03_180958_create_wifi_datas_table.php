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
            $table->string('date');
            $table->string('trade_code');
            $table->string('high');
            $table->string('low');
            $table->string('open');
            $table->string('close');
            $table->string('volume');

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
