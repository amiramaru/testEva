<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores', function (Blueprint $table) {
            $table->id();
            $table->decimal('porcenta_avance', 8, 2)->nullable();
            $table->string('coordinacion', 15)->nullable();
            $table->integer('rango_max')->nullable();
            $table->integer('rango_min')->nullable();
            $table->timestamps();
            $table->string('user_id')->nullable();
            $table->string('coordinacion_id')->nullable();
            
            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadores');
    }
}
