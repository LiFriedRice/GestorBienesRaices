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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id('id_transaccion');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_propiedad');
            $table->decimal('monto', 15, 2);
            $table->enum('tipo_transaccion', ['compra', 'alquiler']);
            $table->timestamps();
            $table->enum('estado', ['completada', 'pendiente', 'cancelada']);

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
