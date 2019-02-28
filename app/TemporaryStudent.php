<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class TemporaryStudent extends Authenticatable
{
    use Notifiable;

    public $table = 'temporary_students';


    protected $fillable = [
        'id','ref_num','salutation','first_Name',
        'middle_Name','last_Name','DoB','NIC','Gender','Address_Res','Address_Office','email',
        'Telephone_No_Mob','Telephone_No_Res','sector','curr_designation','Telephone_Office',
        'service_type','managerial_years','sponsored','employer_name','employer_designation','employer_address','class_type','admission_status'
    ];

    public function StudentQualifications(){
        return $this->hasMany(TemporaryStudentQualifications::class,'ref_num','ref_num');
    }

    public function StudentCareerDetails(){
        return $this->hasMany(TemporaryStudentCareerDetails::class,'ref_num','ref_num');
    }

}
