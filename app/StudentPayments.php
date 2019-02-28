<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPayments extends Model
{
    protected $fillable = [
        'sid','batch_id','description','amount','cheque_no','receipt_no'

    ];

}
