<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class StudentResults extends Authenticatable
{

    protected $fillable = [
        'id','sid','sub_id','attendance',
        'assignment_1','assignment_2','final','batch'
    ];

    public function Subjects(){
        return $this->hasMany(Subjects::class,'sub_id','sub_id');
    }

    public function Student(){
        return $this->hasMany(Student::class,'sid','sid');
    }
}
