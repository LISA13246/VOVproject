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
        Schema::create('participants_works', function (Blueprint $table) {
            $table->integer('id_participants_work');
            $table->integer('id_participant');
            $table->integer('id_post');
            $table->integer('id_place_of_work');
            $table->string('start_of_work');
            $table->string('end_of_work');
            $table->string('description');
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
        Schema::dropIfExists('participants_works');
    }
};
