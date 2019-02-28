<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'id','sid','salutation','first_Name',
        'middle_Name','last_Name','DoB',
        'NIC','Gender','Address_Res',
        'Address_Office','Email_Address',
        'Telephone_No_Mob','Telephone_No_Res',
        'sector','curr_designation','Telephone_Office',
        'service_type','managerial_years',
        'sponsored','employer_name', 'employer_designation',
        'employer_address','class_type','curr_semester',

    ];

    public function StudentQualifications(){
        return $this->hasMany(StudentQualifications::class,'sid','sid');
    }

    public function StudentCareerDetails(){
        return $this->hasMany(StudentCareerDetails::class,'sid','sid');
    }

    public function StudentPayments(){
        return $this->hasOne(StudentPayments::class,'sid','sid');
    }

    public function StudentResults(){
        return $this->hasMany(StudentResults::class,'sid','sid');
    }

    public function Subjects(){
        return $this->hasMany(Subjects::class,'sub_sem','curr_semester');
    }

    public function routeNotificationForNexmo($notification)
    {
        return $this->phone;
    }
}
