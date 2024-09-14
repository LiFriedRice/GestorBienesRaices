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
        Schema::create('tipo__terrenos', function (Blueprint $table) {
            $table->id('id_tipo_terreno');
            $table->unsignedBigInteger('id_propiedad');
            $table->enum('nombre_tipo_terreno', ['casa', 'terreno', 'departamento', 'local_comercial', 'oficina']);
            $table->enum('nombre_categoria', ['alquiler', 'venta', 'compra']);
            $table->timestamps();

            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo__terrenos');
    }
};
