<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contrato_id');
            $table->foreign('contrato_id')->references('id')->on('contratos');
           /* $table->integer('paquete_id');
            $table->foreign('paquete_id')->references('id')->on('paquetes')->onDelete('cascade');*/
            $table->string( 'package');
            $table->string( 'model');
            $table->string( 'base_color');
            $table->string( 'plaque_color');
            $table->string( 'plaque_model');
            $table->string('picture');
            $table->string( 'text_number');
            $table->string( 'dedicated_to');
            $table->string( 'anexos');
            $table->float( 'cost');
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
        Schema::dropIfExists('pedidos');
    }
}
