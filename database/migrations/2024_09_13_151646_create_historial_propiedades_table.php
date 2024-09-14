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
        Schema::create('historial_propiedades', function (Blueprint $table) {
            $table->id('id_historial');
            $table->unsignedBigInteger('id_propiedad');
            $table->enum('estado_anterior', ['disponible', 'en negociacion', 'vendida', 'alquilada']);
            $table->enum('estado_nuevo', ['disponible', 'en negociacion', 'vendida', 'alquilada']);
            $table->timestamp('fecha_cambio');

            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_propiedades');
    }
};
