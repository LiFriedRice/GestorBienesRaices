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
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id('id_anuncio');
            $table->unsignedBigInteger('id_propiedad');
            $table->unsignedBigInteger('id_usuario');
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
            $table->decimal('costo', 10, 2);
            $table->enum('status', ['activo', 'finalizado', 'cancelado'])->default('activo');

            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncios');
    }
};
