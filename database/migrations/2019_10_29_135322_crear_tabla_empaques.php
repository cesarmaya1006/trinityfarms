<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEmpaques extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_empaques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rosa_id');
            $table->foreign('rosa_id', 'fk_empaque_rosa')->references('id')->on('tabla_rosas')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('tam_tallo');
            $table->string('quarter',255);
            $table->string('half_box',255);
            $table->string('russian_hb',255);
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
        Schema::dropIfExists('tabla_empaques');
    }
}
