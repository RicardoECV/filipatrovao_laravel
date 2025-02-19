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
        Schema::create('home_page', function (Blueprint $table) {
          $table->id();
          $table->string('title', length: 200);
          $table->text('text');
          $table->string('header', length: 200);
          $table->string('header_sub_title', length: 200);
          $table->string('img', length: 500);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('home_page');
    }
};
