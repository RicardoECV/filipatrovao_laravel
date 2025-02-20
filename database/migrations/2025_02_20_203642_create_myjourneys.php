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
        Schema::create('myjourneys', function (Blueprint $table) {
            $table->id();
            $table->string('title', length: 200);
            $table->string('title_logo', length: 300);
            $table->string('text');
            $table->string('img', length: 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('myjourneys');
    }
};
