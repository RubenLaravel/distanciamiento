<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collisions', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            // $table->string('semana');
            // $table->string('mes');
            // $table->string('año');
            
            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id')->references('id')->on('devices')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('device2_id');
            $table->foreign('device2_id')->references('id')->on('devices')
            ->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collisions');
    }
}
