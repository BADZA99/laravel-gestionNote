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
        //ajoute le champ matricule
        Schema::table('apprenant', function (Blueprint $table) {
            $table->string('matricule');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //fais l'inverse
        Schema::table('apprenant', function (Blueprint $table) {
            $table->dropColumn('matricule');
        });
    }
};
