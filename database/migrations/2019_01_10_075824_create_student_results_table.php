<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_results', function (Blueprint $table) {

            $table->increments('id');
            $table->string('sid');
            $table->string('sub_id');
            $table->string('batch');
            $table->float('attendance')->nullable($value = true);
            $table->float('assignment_1')->nullable($value = true);
            $table->float('assignment_2')->nullable($value = true);
            $table->float('final')->nullable($value = true);
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
        Schema::dropIfExists('student_results');
    }
}
