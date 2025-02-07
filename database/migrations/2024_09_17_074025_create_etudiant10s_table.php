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
        Schema::create('etudiant10s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table-> string('nomEtudiant');
            $table-> string('prenomEtudiant');
            $table-> string ('email') ->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant10s');
    }
};
