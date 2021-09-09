<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->string('adress');
            $table->string('id number');
            $table->string('gender');
            $table->string('id proof');
            $table->string('image');
            $table->string('fathername');
            $table->string('idproof');
            $table->string('dob');
            $table->string('bankname');
            $table->string('bank/ac/no');
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
        Schema::dropIfExists('journalists');
    }
}
