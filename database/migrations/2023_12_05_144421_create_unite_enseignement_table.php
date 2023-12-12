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
        Schema::create('unite_enseignement', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // ajoute les champs libelle coefficient
            $table->string('libelle');
            $table->integer('credit');
            $table->integer('coefficient');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unite_enseignement');
    }
};
