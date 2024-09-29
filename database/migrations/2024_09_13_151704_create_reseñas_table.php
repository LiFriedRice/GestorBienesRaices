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
        Schema::create('reseñas', function (Blueprint $table) {
            $table->id('id_reseña');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_propiedad');
            $table->integer('calificacion')->default(5);
            $table->text('comentario')->nullable();
            $table->timestamps();

            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseñas');
    }
};
