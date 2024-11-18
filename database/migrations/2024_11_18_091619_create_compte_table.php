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
        Schema::create('compte', function (Blueprint $table) {
            $table->id();
            $table->string('charge_totale');
            $table->string('revenu_total');
            $table->string('chiffre_affaire');
            $table->string('benefice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compte');
    }
};
