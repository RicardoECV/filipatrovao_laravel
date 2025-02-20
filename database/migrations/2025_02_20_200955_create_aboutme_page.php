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
        Schema::create('aboutme_page', function (Blueprint $table) {
          $table->id();
          $table->string('title', length: 200);         
          $table->string('sub_title_1', length: 200);
          $table->string('sub_title_2', length: 200);
          $table->string('sub_title_3', length: 200);         
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutme_page');
    }
};
