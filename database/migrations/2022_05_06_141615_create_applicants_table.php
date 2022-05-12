<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('Region');
            $table->string('Province');
            $table->string('City');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('sex');
            $table->string('age');
            $table->string('maritalstatus');
            $table->string('positionapplied');
            $table->string('course');
            $table->string('accountstatus')->nullable();
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
        Schema::dropIfExists('applicants');
    }
}
