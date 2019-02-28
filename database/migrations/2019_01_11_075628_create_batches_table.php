<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch_id');
            $table->string('batch_name');
            $table->string('students_count');
            $table->string('current_sem');
            $table->string('application_close_date');
            $table->date('interview_date');
            $table->date('start_date');
            $table->date('end_date');
            $table->float('application_fee');
            $table->float('admission_fee');
            $table->float('course_fee');
            $table->string('course_fee_installments');
            $table->float('repeat_exam_fee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batches');
    }
}
