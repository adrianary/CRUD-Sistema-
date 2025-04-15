<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_de_trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('nOrden');
            $table->string('direccion');
            $table->unsignedBigInteger("tarea_id");
            $table->foreign("tarea_id")
                 ->references("id")
                 ->on("tareas");
                 $table->unsignedBigInteger("cliente_id");
                 $table->foreign("cliente_id")
                      ->references("id")
                      ->on("clientes");
           $table->date('fecha');
                 $table->timestamps();
                 $table->unsignedBigInteger("estado_id");
                 $table->foreign("estado_id")
                     ->references("id")
                     ->on("estados");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_de_trabajos');
    }
};
