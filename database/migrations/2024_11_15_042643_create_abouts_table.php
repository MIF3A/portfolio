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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default("Laravel Developer");
            $table->date('dob')->default("2024-11-15");
            $table->string('website')->default("uraynaufal.net");
            $table->string("phone")->default("+6289694761427");
            $table->string("city")->default("Sambas");
            $table->string("email")->default("uraynaufal11@gmail.com");
            $table->string('degree')->default("Bs");
            $table->integer('age')->default("19");
            $table->string('profession')->default("Freelancer");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
