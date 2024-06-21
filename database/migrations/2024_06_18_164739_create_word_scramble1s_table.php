<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('word_scramble1s', function (Blueprint $table) {
            $table->id();
            $table->string('word');
            $table->string('hint');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('word_scramble1s');
    }
};
