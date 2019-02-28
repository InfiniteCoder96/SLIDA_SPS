<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sid');
            $table->string('qualification_type');
            $table->string('qualification_name');
            $table->string('institute');
            $table->string('year');
            $table->string('specialized_area');
            $table->string('grade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_qualifications');
    }
}
