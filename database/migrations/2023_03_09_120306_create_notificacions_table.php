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
        Schema::create('notificacions', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->json('foto');
            $table->string('video')->nullable();
            $table->dateTime('fecha');
            $table->string('ubicacion_long');
            $table->string('ubicacion_lat');
            $table->unsignedBigInteger('idevento')->nullable();
            $table->foreign('idevento')->references('id')->on('eventos');
            $table->unsignedBigInteger('idusuario')->nullable();
            $table->foreign('idusuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacions');
    }
};
