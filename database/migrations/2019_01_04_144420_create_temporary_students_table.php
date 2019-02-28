<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemporaryStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_students', function (Blueprint $table) {

            $table->increments('id');
            $table->string('ref_num');
            $table->string('salutation');
            $table->string('first_Name');
            $table->string('middle_Name');
            $table->string('last_Name');
            $table->date('DoB');
            $table->string('NIC');
            $table->string('Gender');
            $table->string('Address_Res');
            $table->string('Address_Office');
            $table->string('Email_Address');
            $table->integer('Telephone_No_Mob');
            $table->integer('Telephone_No_Res');
            $table->string('sector');
            $table->string('curr_designation');
            $table->string('Telephone_Office');
            $table->text('service_type');
            $table->integer('managerial_years');
            $table->text('sponsored');
            $table->string('employer_name')->nullable($value = true);
            $table->text('employer_designation')->nullable($value = true);
            $table->text('employer_address')->nullable($value = true);
            $table->text('class_type');
            $table->string('admission_status')->default($value = 'Pending');

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
        Schema::dropIfExists('temporary_students');
    }
}
