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
        Schema::create('studdents', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 255);
            $table->string('email' , 50);
            $table->string('password' , 50);
            $table->string('class' , 50);
            $table->string('faculty' , 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studdents');
    }
};
