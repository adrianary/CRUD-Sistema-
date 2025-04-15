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
        Schema::create('equipo_trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->unsignedBigInteger("tecnico_id");
            $table->foreign("tecnico_id")
                 ->references("id")
                 ->on("tecnicos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_trabajos');
    }
};
