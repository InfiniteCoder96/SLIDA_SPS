<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentQualifications extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'sid','qualification_type','qualification_name',
        'institute','year','specialized_area','grade'
    ];
}
