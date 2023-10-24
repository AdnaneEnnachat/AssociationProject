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
        Schema::create('condidats', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('educationLevel');
            $table->string('commune');
            $table->string('photo');
            $table->string('cv');
            $table->string('diplome');
            $table->string('numDossier')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condidats');
    }
};
