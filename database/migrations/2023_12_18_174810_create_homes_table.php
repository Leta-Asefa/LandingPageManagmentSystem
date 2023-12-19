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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->String('BrandName');
            $table->String('HeadLine');
            $table->String('Slogan');
            $table->json('ServiceHeader');
            $table->json('ServiceDescription');
            $table->json('ProjectHeader');
            $table->json('ProjectDescription');
            $table->json('TestimonialText');
            $table->json('CustomerName');
            $table->String('Phone');
            $table->String('Email');
            $table->String('Address');
            $table->String('SocialMediaLink');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
