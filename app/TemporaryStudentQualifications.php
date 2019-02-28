<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporaryStudentQualifications extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'ref_num','qualification_type','qualification_name',
        'institute','year','specialized_area','grade'
    ];
}
