<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiracyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piracy', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('latitude_degrees');
            $table->string('latitude_minutes');
            $table->string('latitude_cardinal');
            $table->string('longitude_degrees');
            $table->string('longitude_minutes');
            $table->string('longitude_cardinal');
            $table->string('date');
            $table->string('time');
            $table->string('culprit_vessel');
            $table->string('victim_vessel');
            $table->string('incident');
            $table->string('incident_type');
            $table->string('other_incident')->nullable();
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
        Schema::dropIfExists('piracy');
    }
}
