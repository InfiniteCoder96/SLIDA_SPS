<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRepeats extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id','sid','sub_id','marks',
        'payment_status','result'
    ];

}
