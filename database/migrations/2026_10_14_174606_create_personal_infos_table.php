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
        Schema::create('personal_infos', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
    $table->string('apellido_paterno')->nullable();
    $table->string('apellido_materno')->nullable();
    $table->date('fecha_nacimiento')->nullable();
    $table->string('genero', 20)->nullable();
    $table->string('curp', 18)->nullable()->unique();
    $table->string('telefono', 20)->nullable();
    $table->string('direccion')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_infos');
    }
};
