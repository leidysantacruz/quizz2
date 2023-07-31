<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionCamioneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion_camionero', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camionero_id')->nullable();
            $table->unsignedBigInteger('camion_id')->nullable();

            $table->foreign('camionero_id')
            ->references('id')
            ->on('camioneros')->onDelete('cascade');

            $table->foreign('camion_id')
            ->references('id')
            ->on('camions')->onDelete('cascade');


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
        Schema::dropIfExists('camion_camionero');
    }
}
