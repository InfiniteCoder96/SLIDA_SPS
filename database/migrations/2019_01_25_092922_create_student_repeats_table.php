<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRepeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_repeats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sid');
            $table->string('sub_id');
            $table->double('marks')->nullable(true);
            $table->string('result')->nullable(true);
            $table->string('payment_status')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_repeats');
    }
}
