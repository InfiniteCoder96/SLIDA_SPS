<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficialRequests extends Model
{
    protected $fillable = [
        'id','sid','request_type','data'
    ];

    protected $casts = [
        'data' => 'array'
    ];
}
