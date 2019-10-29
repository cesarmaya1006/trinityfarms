<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearEmpaqueRosas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empaque_rosas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rosa_id');
            $table->foreign('rosa_id', 'fk_tabla_empaque_rosa')->references('id')->on('tabla_rosas')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('capacidad_empaque');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empaque_rosas');
    }
}
