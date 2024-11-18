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
        Schema::create('projets_realises', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('cout');
            $table->string('depense_projet');
            $table->string('revenu');
            $table->string('somme_percu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets_realises');
    }
};
