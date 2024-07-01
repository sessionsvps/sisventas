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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',30);
            $table->boolean('estado');
            $table->integer('stock');
            $table->float('precio');
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_unidad');

            // FK
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->foreign('id_unidad')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
