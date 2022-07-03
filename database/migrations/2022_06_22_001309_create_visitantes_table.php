<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->id();

          
            $table->string('razonsocial')->nullable();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cargo')->nullable();
            $table->string('direccion');
            $table->string('distrito');
            $table->string('pais');
            $table->string('celular');
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('representa');
            $table->string('busca');
            $table->string('qr');
         
           

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
        Schema::dropIfExists('visitantes');
    }
}
