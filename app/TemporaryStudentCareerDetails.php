<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporaryStudentCareerDetails extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'ref_num','organization_name','organization_address',
        'designation','period'
    ];
}
