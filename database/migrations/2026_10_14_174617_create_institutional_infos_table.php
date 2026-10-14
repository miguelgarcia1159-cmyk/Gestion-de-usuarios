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
        Schema::create('institutional_infos', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
    $table->enum('tipo', ['academico', 'administrativo']);
    $table->string('codigo', 20)->nullable()->unique();
    $table->string('departamento')->nullable();
    $table->date('fecha_ingreso')->nullable();
    // Académico
    $table->string('grado_maximo')->nullable();
    $table->string('categoria')->nullable();   // Titular, Asociado, Asignatura...
    $table->string('nivel_sni')->nullable();
    // Administrativo
    $table->string('puesto')->nullable();
    $table->string('area')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutional_infos');
    }
};
