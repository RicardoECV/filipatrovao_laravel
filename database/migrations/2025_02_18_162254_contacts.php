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
      Schema::create('contacts', function(Blueprint $table){
        $table->id();
        $table->string('logo_email', length:300);
        $table->string('email', length: 300);
        $table->string('logo_linkdin', length:300);
        $table->string('linkdin', length: 300);
        $table->string('logo_x', length:300);
        $table->string('link_x', length: 300);
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
