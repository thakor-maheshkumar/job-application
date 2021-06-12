<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('designation');
            $table->string('address1');
            $table->string('email');
            $table->string('designation');
            $table->string('phonenumber');
            $table->string('city');
            $table->string('gender');
            $table->string('state');
            $table->string('relationship');
            $table->string('dob');
            $table->string('sscboard');
            $table->string('sscpassingyear');
            $table->string('sscpercentage');
            $table->string('hscboard');
            $table->string('hscpassingyear');
            $table->string('hscpercentage');
            $table->string('bachelorcourcename');
            $table->string('bacheloruniversity');
            $table->string('bachelorpassingyear');
            $table->string('bachelorpercentage');
            $table->string('mastercoursename');
            $table->string('masteruniversity');
            $table->string('masterpassingyear');
            $table->string('masterpercentage');

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
        Schema::dropIfExists('employees');
    }
}
