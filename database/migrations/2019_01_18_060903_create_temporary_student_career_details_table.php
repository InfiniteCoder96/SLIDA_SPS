<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemporaryStudentCareerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_student_career_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref_num');
            $table->string('organization_name');
            $table->string('organization_address');
            $table->string('designation');
            $table->string('period');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporary_student_career_details');
    }
}
