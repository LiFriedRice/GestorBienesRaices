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
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id('id_propiedad');
            $table->unsignedBigInteger('id_usuario'); // Define la columna de clave foránea
            $table->string('titulo', 255);
            $table->text('descripcion');
            $table->enum('tipo_propiedad', ['comercial', 'residencial']);
            $table->decimal('area_construida', 10, 2);
            $table->decimal('area_terraza', 10, 2);
            $table->string('ubicacion', 255);
            $table->decimal('precio', 15, 2);
            $table->enum('estado', ['disponible', 'en negociacion', 'vendida', 'alquilada']);
            $table->integer('año_construccion')->default(0);
            $table->integer('dormitorios')->default(0);
            $table->integer('baños')->default(0);
            $table->integer('parqueos')->default(0);
            $table->integer('pisos')->default(0);
            //$table->point('geolocalizacion'); // Change to string or text if point is not supported
            $table->string('tipo_suelo', 50);
            $table->string('servicios_comunitarios', 255);
            $table->decimal('gastos_comunes', 10, 2);
            $table->enum('estado_inmueble', ['a estrenar', 'usado']);
            $table->enum('entrega', ['inmediata', 'otra_fecha']);
            $table->integer('status');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};
