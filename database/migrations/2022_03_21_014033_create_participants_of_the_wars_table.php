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
        Schema::create('participants_of_the_wars', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('name');
            $table->string('patronymic');
            $table->string('date_of_birth');
            $table->string('date_of_death');
            $table->string('place_of_appeal');
            $table->integer('id_ranks');
            $table->string('place_of_service');
            $table->string('place_of_birth');
            $table->string('photo');
            $table->string('biography');
            $table->timestamps();

            $table->foreign('id_ranks')->references('id')->on('militaryranks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants_of_the_wars');
    }
};
