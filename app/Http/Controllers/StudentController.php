<?php

namespace App\Http\Controllers;

use App\Student;
use App\StudentPayments;
use App\StudentResults;
use App\StudentSemesterDetails;
use App\Subjects;
use App\TemporaryStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Nexmo\Call\Collection;

class StudentController extends Controller
{
    public function showProfile()
    {

        $user = Auth::guard('student')->user();
        if (!is_null($user)){

            return view('Student.student_profile_dashboard')->with(compact('user'));
        }
        else
            return redirect('/student_login');
    }


    public function showProgress()
    {
        $logged_student = Auth::guard('student')->user();

        $curr_sem = $logged_student->curr_semester;

        $sem_int = intval(substr($curr_sem,9,9));

        $id = $logged_student->sid;

        $completed_sems = 0;

        for($i = 0;$i <= $sem_int;$i++){
            $studentSemesterDetails = StudentSemesterDetails::where([['sid','=',$id],['semester_name','=','Semester_'.$sem_int],['sem_status','=','Complete']])->get();

            if(count($studentSemesterDetails) > 0){
                $completed_sems++;
            }
        }

        $StudentResults = StudentResults::select('student_results.sub_id','student_results.attendance','student_results.assignment_1','student_results.assignment_2','student_results.final','subjects.sub_name','subjects.sub_sem')
            ->join('subjects','subjects.sub_id','=','student_results.sub_id')
            ->where([['sid','=',$id]])
            ->get();

        return view('Student.student_profile')->with(compact('StudentResults','completed_sems'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('Admin.User_Management.Student.all_students')->with(compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.User_Management.Student.admission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temp_sid = $request->get('temp_sid');

        $temporary_student = TemporaryStudent::with('StudentQualifications','StudentCareerDetails')->find($request->get('temp_sid'));
        $temporary_student_qualifications = $temporary_student->StudentQualifications;
        $temporary_student_career_details = $temporary_student->StudentCareerDetails;

        $student = new Student();

        $sid = $this->student_id_generator();

        $student->sid =  $sid;

        $student->salutation = $temporary_student->salutation;
        $student->first_Name = $temporary_student->first_Name;
        $student->middle_Name = $temporary_student->middle_Name;
        $student->last_Name = $temporary_student->last_Name;
        $student->DoB = $temporary_student->DoB;
        $student->NIC = $temporary_student->NIC;
        $student->Gender = $temporary_student->Gender;
        $student->Address_Res = $temporary_student->Address_Res;
        $student->Address_Office = $temporary_student->Address_Office;
        $student->Email_Address = $temporary_student->Email_Address;
        $student->Telephone_No_Mob = $temporary_student->Telephone_No_Mob;
        $student->Telephone_No_Res = $temporary_student->Telephone_No_Res;
        $student->sector = $temporary_student->sector;
        $student->curr_designation = $temporary_student->curr_designation;
        $student->Telephone_Office = $temporary_student->Telephone_Office;
        $student->service_type = $temporary_student->service_type;
        $student->managerial_years = $temporary_student->managerial_years;
        $student->sponsored = $temporary_student->sponsored;
        $student->employer_name = $temporary_student->employer_name;
        $student->employer_designation = $temporary_student->employer_designation;
        $student->employer_address = $temporary_student->employer_address;
        $student->class_type = $temporary_student->class_type;

        $student->save();

        foreach ($temporary_student_career_details as $temporary_student_career_detail){



            $temporary_student_career_detail->temp_sid = $sid;
            $temporary_student_career_detail->save();

        }

        foreach ($temporary_student_qualifications as $temporary_student_qualification){

            $temporary_student_qualification->temp_sid = $sid;
            $temporary_student_qualification->save();

        }

        $temporary_student->delete();

        return redirect('new-admissions')->with('success','Student has been enrolled for the MPM course successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::all()->find($id)->first();
        return view('Admin.User_Management.Student.edit_student')->with(compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function student_id_generator(){

        $last_ID = null;
        $new_ID = null;
        $IdCount = 0;
        $students = Student::all();

        $date_now = Carbon::now();
        $year_now = $date_now->year;
        $academic_year_start = $year_now - 1;
        $academic_year_end = $academic_year_start + 2;

        $id_first_part = $academic_year_start.'/'.$academic_year_end.'/';

        foreach ($students as $student){
            $last_ID = $student->sid;

            $sub = substr($last_ID,0,10);
            if(strcmp($sub,$id_first_part) == 0){
                $IdCount = $IdCount + 1;
            }
        }



        if($last_ID == null){

            $new_ID = $id_first_part.'0001';

        }
        else{

            $last_digits = intval($IdCount + 1);

            if($last_digits < 10)
                $id_last_part = '000'.$last_digits;
            elseif ($last_digits < 100 && $last_digits >= 10)
                $id_last_part = '00'.$last_digits;
            elseif($last_digits < 1000 && $last_digits >= 100)
                $id_last_part = '0'.$last_digits;
            else
                $id_last_part = $last_digits;

            $new_ID = $id_first_part.$id_last_part;


        }


        return $new_ID;
    }

    public function getStudentPayments($sid){
        $student_payments = StudentPayments::where('sid','=',$sid)->get();
        return $student_payments;
    }

    public function showStudentPayments($sid){
        $student_payments = $this->getStudentPayments($sid);
        return view('');
    }
}
