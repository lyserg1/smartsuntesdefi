<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luzs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('intensidad');


            $table->unsignedBigInteger('poste_id');

            $table->foreign('poste_id')->references('id')->on('postes');


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
        Schema::dropIfExists('luzs');
    }
};
