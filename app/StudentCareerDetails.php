<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCareerDetails extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'sid','organization_name','organization_address',
        'designation','period'
    ];
}
