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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id('id_mensaje');
            $table->unsignedBigInteger('id_usuario_remitente');
            $table->unsignedBigInteger('id_usuario_destinatario');
            $table->unsignedBigInteger('id_propiedad');
            $table->text('mensaje');
            $table->timestamps();

            $table->foreign('id_usuario_remitente')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_usuario_destinatario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensajes');
    }
};
