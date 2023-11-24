<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIllegalMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illegal_migration', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('date');
            $table->string('time');
            $table->string('incident');
            $table->string('incident_category');
            $table->string('sp_latitude_degrees');
            $table->string('sp_latitude_minutes');
            $table->string('sp_latitude_cardinal');
            $table->string('sp_longitude_degrees');
            $table->string('sp_longitude_minutes');
            $table->string('sp_longitude_cardinal');
            $table->string('dp_latitude_degrees');
            $table->string('dp_latitude_minutes');
            $table->string('dp_latitude_cardinal');
            $table->string('dp_longitude_degrees');
            $table->string('dp_longitude_minutes');
            $table->string('dp_longitude_cardinal');
            $table->string('individual_numbers');
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
        Schema::dropIfExists('illegal_migration');
    }
}
