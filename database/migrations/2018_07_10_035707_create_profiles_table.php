<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('place_birth');
            $table->date('date_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('staff_id');
            $table->string('position');
            $table->string('unit');
            $table->string('direktorat');
            $table->string('bpjs_number');
            $table->string('bank_number');
            $table->string('phone');
            $table->string('current_address');
            $table->string('origin_address');
            $table->string('email');
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
        Schema::dropIfExists('profiles');
    }
}
