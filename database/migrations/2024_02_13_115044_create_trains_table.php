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
        Schema::create('trains', function (Blueprint $table) {
            $table -> id();
            $table -> string('company', 60);
            $table -> string('departure_station', 60);
            $table -> string('arrival_station', 60);
            $table -> dateTime('departure_time');
            $table -> dateTime('arrival_time');
            $table -> string('train_code') -> unique();
            $table -> integer('carriages_count');
            $table -> boolean('on_time') -> default(true);
            $table -> boolean('cancelled') -> default(false);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
