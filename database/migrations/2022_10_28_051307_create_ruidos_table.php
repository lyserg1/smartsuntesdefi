<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruidos', function (Blueprint $table) {
            $table->id();


            $table->string('cantidad');
            $table->string('slug')->nullable();

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
        Schema::dropIfExists('ruidos');
    }
};
