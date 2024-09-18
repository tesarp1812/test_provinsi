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
        Schema::create('ktp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_prop'); 
            $table->string('nik', 16)->unique(); 
            $table->string('nama'); 
            $table->timestamps();

            $table->foreign('Id_prop')->references('id')->on('provinsi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktp');
    }
};
