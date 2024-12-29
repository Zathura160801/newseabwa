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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('thumbnail');
            $table->string('photo');
            $table->text('about');
            $table->string('tagline');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('price_per_person');
            $table->unsignedBigInteger('duration');
            $table->unsignedBigInteger('capacity');
            $table->boolean('is_popular');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
