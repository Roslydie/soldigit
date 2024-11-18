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
        Schema::create('charge', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('montant');
            $table->date('date');
            $table->string('id_depense');
            $table->string('comission');
            $table->string('salaire');
            $table->string('reserve');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charge');
    }
};
