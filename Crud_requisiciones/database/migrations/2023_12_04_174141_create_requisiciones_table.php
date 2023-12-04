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
        Schema::create('requisiciones', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion_cargo');
            $table->string('justificacion');
            $table->string('candidato_ideal');
            $table->string('mision_cargo');
            $table->string('responsabilidades');
            $table->string('descripcion_candidato');
            $table->string('talentos_candidato');
            $table->string('criterios_seleccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisiciones');
    }
};
