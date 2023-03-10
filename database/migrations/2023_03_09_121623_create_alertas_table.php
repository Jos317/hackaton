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
        Schema::create('alertas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('detalle');
            $table->json('foto');
            $table->string('video')->nullable();
            $table->double('ubicacion_long');
            $table->double('ubicacion_lat');
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('idevento')->nullable();
            $table->foreign('idevento')->references('id')->on('eventos');
            $table->unsignedBigInteger('idestado')->nullable();
            $table->foreign('idestado')->references('id')->on('estados');
            $table->unsignedBigInteger('idunidad')->nullable();
            $table->foreign('idunidad')->references('id')->on('unidads');
            $table->unsignedBigInteger('idmunicipio')->nullable();
            $table->foreign('idmunicipio')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alertas');
    }
};
