<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nationality');
            $table->string('state');
            $table->string('address');
            $table->string('email');
            $table->string('phone_number');
            $table->string('DOB');
            $table->string('gender');
            $table->string('martial_status');
            $table->string('description');
            $table->string('image');
            $table->boolean('status');
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
        Schema::dropIfExists('patients');
    }
}
