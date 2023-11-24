<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
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
            $table->string('incident');
            $table->string('drug_type');
            $table->string('culprit_vessel');
            $table->string('vessel_category');
            $table->string('total_tonnage');
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
        Schema::dropIfExists('drugs');
    }
}
