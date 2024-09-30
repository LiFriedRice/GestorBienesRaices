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
        Schema::create('foto_videos', function (Blueprint $table) {
            $table->id('id_media');
            $table->unsignedBigInteger('id_propiedad');
            $table->string('url_media', 255);
            $table->enum('tipo_media', ['foto', 'video']);
            $table->timestamps();

            $table->foreign('id_propiedad')->references('id_propiedad')->on('propiedades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_videos');
    }
};
