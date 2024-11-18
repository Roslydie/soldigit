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
        Schema::create('depense_mensuel', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('invertissement');
            $table->string('depense_projet');
            $table->string('depense_fournisseur');
            $table->string('depense_bancaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depense_mensuel');
    }
};
