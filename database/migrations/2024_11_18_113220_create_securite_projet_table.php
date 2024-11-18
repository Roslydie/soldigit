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
        Schema::create('securite_projet', function (Blueprint $table) {
            $table->id();
            $table->string('categorie_mdp');
            $table->string('mdp_client');
            $table->string('mdp_interne');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('securite_projet');
    }
};
