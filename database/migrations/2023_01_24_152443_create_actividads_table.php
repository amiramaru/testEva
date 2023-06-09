<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 191);
            $table->string('nombre', 100);
            $table->string('status');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('coordinacion_id');
            $table->foreign('coordinacion_id')->references('id')->on('coordinacions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividads');
    }
}
