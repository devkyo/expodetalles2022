<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpo2022sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expo2022s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('visitante_id')->unsigned();
            $table->enum('asintencia', ['Si', 'No'])->nullable()->default('No');

            $table->foreign('visitante_id')->references('id')->on('visitantes');

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
        Schema::dropIfExists('expo2022s');
    }
}
