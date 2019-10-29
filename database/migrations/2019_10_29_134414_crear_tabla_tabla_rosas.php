<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTablaRosas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_rosas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('variedad',255);
            $table->string('nombre',255);
            $table->string('estilo',255);
            $table->string('descripcion',255);
            $table->string('stem',255);
            $table->string('head',255);
            $table->string('life',255);
            $table->string('opening',255);
            $table->string('bloom',255);
            $table->string('available',255);
            $table->string('foto',255);
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
        Schema::dropIfExists('tabla_rosas');
    }
}
