<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'batch_id','batch_name','students_count',
        'current_sem','interview_date','application_close_date',
        'start_date','end_date','application_fee',
        'admission_fee','course_fee','course_fee_installments','repeat_exam_fee'

    ];
}
