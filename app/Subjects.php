<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'sub_id';
    public $timestamps = false;

    protected $fillable = [
        'sub_id','sub_name',
        'sub_sem','sub_credits'
    ];

    public function StudentResults(){
        return $this->hasMany(StudentResults::class,'sub_id','sub_id');
    }
}
