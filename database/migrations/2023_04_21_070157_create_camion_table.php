<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->id();
            $table->string('placa_camion', 6);
            $table->string('marca', 30);
            $table->string('color', 30);
            $table->string('modelo', 4);
            $table->integer('capacidad_toneladas');
            $table->unsignedBigInteger('id_Transporte');
            $table->timestamps();
            
            $table->foreign('id_Transporte')->references('id')->on('transportes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('camion');
    }
}
