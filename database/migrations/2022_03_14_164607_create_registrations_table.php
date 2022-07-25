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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mothers_name');
            $table->string('fathers_name');
            $table->string('address');
            $table->string('inlineRadioOptions');
            $table->string('dob');
            $table->integer('pincode');
            $table->string('state');
            $table->string('city');
            $table->bigInteger('contact');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('loksabha');
            $table->string('vidhansabha');
            $table->string('referralcode');
            $table->string('filename');
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
        Schema::dropIfExists('registrations');
    }
};
