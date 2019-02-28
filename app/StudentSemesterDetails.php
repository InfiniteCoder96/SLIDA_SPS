<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSemesterDetails extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id','sid','semester_name','progress_status','sem_status'
    ];
}
