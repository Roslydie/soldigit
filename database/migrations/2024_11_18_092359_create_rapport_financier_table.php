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
        Schema::create('rapport_financier', function (Blueprint $table) {
            $table->id();
            $table->string('id_compte');
            $table->string('periode');
            $table->string('bilan_annuel');
            $table->string('chiffre_affaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapport_financier');
    }
};
