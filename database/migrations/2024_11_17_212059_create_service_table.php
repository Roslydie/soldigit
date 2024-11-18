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
    Schema::create('service', function (Blueprint $table) {
        $table->id(); // Clé primaire auto-incrémentée
        $table->string('nomService'); // Colonne pour le nom du service
        $table->text('description'); // Colonne pour la description du service
        $table->timestamps(); // Colonne created_at et updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
