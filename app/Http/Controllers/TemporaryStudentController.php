<?php

namespace App\Http\Controllers;

use App\Admin;
use App\DisqualifiedStudent;
use App\DisqualifiedStudentCareerDetails;
use App\DisqualifiedStudentQualifications;
use App\Notifications\TaskCompleted;
use App\Student;
use App\StudentCareerDetails;
use App\StudentPayments;
use App\StudentQualifications;
use App\TemporaryStudent;
use App\TemporaryStudentCareerDetails;
use App\TemporaryStudentQualifications;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use \Opis\Closure\SerializableClosure;

class TemporaryStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new TemporaryStudent();


        $this->validate(request(), [

            'salutation'=> 'required',
            'first_Name'=> 'required',
            'middle_Name'=> 'required',
            'last_Name'=> 'required',
            'DoB'=> 'required|before:-18 years',
            'NIC'=> 'required|min:10|max:10|unique:temporary_students|unique:students',
            'Gender'=> 'required',
            'Address_Res'=> 'required',
            'Address_Office' => 'required',
            'Email_Address'=> 'required|email|unique:temporary_students|unique:students',
            'Telephone_No_Mob'=> 'required',
            'Telephone_No_Res'=> 'required',
            'Telephone_Office'=> 'required',
            'sector'=> 'required',
            'curr_designation'=> 'required',
            'service_type'=> 'required',
            'managerial_years'=> 'required',
            'sponsored'=> 'required',
            'class_type' => 'required'



        ]);

        $ref_num =  $this->reference_num_generator();

        $student->ref_num =  $ref_num;
        $student->salutation = $request->get('salutation');
        $student->first_Name = $request->get('first_Name');
        $student->middle_Name = $request->get('middle_Name');
        $student->last_Name = $request->get('last_Name');
        $student->DoB = $request->get('DoB');
        $student->NIC = $request->get('NIC');
        $student->Gender = $request->get('Gender');
        $student->Address_Res = $request->get('Address_Res');
        $student->Address_Office = $request->get('Address_Office');
        $student->Email_Address = $request->get('Email_Address');
        $student->Telephone_No_Mob = $request->get('Telephone_No_Mob');
        $student->Telephone_No_Res = $request->get('Telephone_No_Res');
        $student->Telephone_Office = $request->get('Telephone_Office');
        $student->sector = $request->get('sector');
        $student->curr_designation = $request->get('curr_designation');
        $student->service_type = $request->get('service_type');
        $student->managerial_years = $request->get('managerial_years');
        $student->sponsored = $request->get('sponsored');
        $student->employer_name = $request->get('employer_name');
        $student->employer_designation = $request->get('employer_designation');
        $student->employer_address = $request->get('employer_address');
        $student->class_type = $request->get('class_type');

        $organization_names = $request->get('org_name');
        $organization_addresses = $request->get('org_address');
        $designations = $request->get('designation');
        $periods = $request->get('emp_period');

        $no_of_employments = sizeof($organization_names);

        for($i = 0;$i < $no_of_employments;$i++){

            $qualifications = new TemporaryStudentCareerDetails();

            $qualifications->ref_num = $ref_num;
            $qualifications->organization_name = $organization_names[$i];
            $qualifications->organization_address = $organization_addresses[$i];
            $qualifications->designation = $designations[$i];
            $qualifications->period = $periods[$i];

            $qualifications->save();

        }

        $qualification_types = $request->get('qualification_type');
        $qualification_names = $request->get('qualification_name');
        $institutes = $request->get('institute_name');
        $years = $request->get('qualification_year');
        $specialized_areas = $request->get('spec_area');
        $grades = $request->get('qualification_grade');

        $no_of_qualifications = sizeof($qualification_types);

        for($i = 0;$i < $no_of_qualifications;$i++){

            $qualifications = new TemporaryStudentQualifications();

            $qualifications->ref_num = $ref_num;
            $qualifications->qualification_type = $qualification_types[$i];
            $qualifications->qualification_name = $qualification_names[$i];
            $qualifications->Institute = $institutes[$i];
            $qualifications->year = $years[$i];
            $qualifications->specialized_area = $specialized_areas[$i];
            $qualifications->grade = $grades[$i];

            $qualifications->save();

        }


        $student->save();

        $reference_num = $ref_num;
        $success = 'Your Application has been submitted successfully';

        $stdID = TemporaryStudent::select('id')->where('ref_num','=',$ref_num)->first();

        $id = $stdID->id;

        return view('Frontend.ApplicationFormDownload',compact('id','success','reference_num'));
    }


    public function Demo_store()
    {
        $student = new TemporaryStudent();

        $ref_num =  $this->reference_num_generator();

        $student->ref_num =  $ref_num;
        $student->salutation = 'Mr';
        $student->first_Name = str_random(4);
        $student->middle_Name = str_random(4);
        $student->last_Name = str_random(5);
        $student->DoB = '1984-05-18';
        $student->NIC = random_int(689714502,912478902).'v';
        $student->Gender = 'Male';
        $student->Address_Res = random_int(1,300).'/,Colombo';
        $student->Address_Office = random_int(1,300).'/,Colombo';
        $student->Email_Address = str_random(9).'@gmail.com';
        $student->Telephone_No_Mob = '071'.random_int(1391848,9999999);
        $student->Telephone_No_Res = '0112'.random_int(846013,999999);
        $student->Telephone_Office = '0112'.random_int(846013,999999);
        $student->sector = 'Public';
        $student->curr_designation = 'Manager';
        $student->service_type = 'SLAS';
        $student->managerial_years = '14';
        $student->sponsored = 'Not_Sponsored';
        $student->employer_name = null;
        $student->employer_designation = null;
        $student->employer_address = null;
        $student->class_type = 'Weekend';



            $qualifications = new TemporaryStudentCareerDetails();

            $qualifications->ref_num = $ref_num;
            $qualifications->organization_name = str_random(9);
            $qualifications->organization_address = str_random(9);
            $qualifications->designation = str_random(9);
            $qualifications->period = '5';

            $qualifications->save();


            $qualifications = new TemporaryStudentQualifications();

            $qualifications->ref_num = $ref_num;
            $qualifications->qualification_type = 'Degree';
            $qualifications->qualification_name = str_random(9);
            $qualifications->Institute = str_random(9);
            $qualifications->year = 4;
            $qualifications->specialized_area = str_random(5);
            $qualifications->grade = '1st Class';

            $qualifications->save();




        $student->save();

        $reference_num = $ref_num;
        $success = 'Your Application has been submitted successfully';

        $stdID = TemporaryStudent::select('id')->where('ref_num','=',$ref_num)->first();

        $id = $stdID->id;

        return view('Frontend.ApplicationFormDownload',compact('id','success','reference_num'));

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

    public function reference_num_generator(){

        $last_ID = null;
        $new_ID = null;
        $IdCount = 0;
        $students = TemporaryStudent::all();

        $date_now = Carbon::now();
        $year_now = $date_now->year;
        $academic_year_start = $year_now - 1;
        $academic_year_end = $academic_year_start + 2;

        $id_first_part = $academic_year_start.'/'.$academic_year_end.'/';

        foreach ($students as $student){
            $last_ID = $student->ref_num;

            $sub = substr($last_ID,0,10);

            if(strcmp($sub,$id_first_part) == 0){
                $IdCount = $IdCount + 1;
            }

        }


        if($last_ID == null){

            $new_ID = $id_first_part.'0001'.'_REF';

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

            $new_ID = $id_first_part.$id_last_part.'_REF';


        }




            return $new_ID;



    }

    public function showNewAdmissions(){
        $temporary_students = TemporaryStudent::where('admission_status','=','Pending')->get();
        return view('Admin.User_Management.Student.new_admissions')->with(compact('temporary_students'));
    }

    public function showInterviewStudentList(){
        $temporary_students = TemporaryStudent::where('admission_status','=','Interview')->get();

        $admin = Admin::where('role','=','Admin')->first();

        $admin->notify(new TaskCompleted);

        return view('Admin.User_Management.Student.interview_student_list')->with(compact('temporary_students'));
    }

    public function showAAB_PTSStudentList(){
        $temporary_students = TemporaryStudent::where('admission_status','=','AAB/PTS')->get();
        return view('Admin.User_Management.Student.AAB_PTS_student_list')->with(compact('temporary_students'));
    }

    public function showRejectedStudentList(){
        $temporary_students = TemporaryStudent::where('admission_status','=','Rejected')->get();
        return view('Admin.User_Management.Student.rejected_student_list')->with(compact('temporary_students'));
    }

    public function showSelectedStudentList(){
        $error = null;
        $temporary_students = TemporaryStudent::where('admission_status','=','Selected')->get();
        return view('Admin.User_Management.Student.selected_student_list')->with(compact('temporary_students','error'));
    }

    public function updateSelectedStudents(Request $request)
    {

        $student = new Student();

        $this->validate(request(), [

            'salutation' => 'required',
            'first_Name' => 'required',
            'middle_Name' => 'required',
            'last_Name' => 'required',
            'DoB' => 'required|before:-18 years',
            'NIC' => 'required|min:10|max:10|unique:students',
            'Gender' => 'required',
            'Address_Res' => 'required',
            'Address_Office' => 'required',
            'Email_Address' => 'required|email|unique:students',
            'Telephone_No_Mob' => 'required',
            'Telephone_No_Res' => 'required',
            'Telephone_Office' => 'required',
            'sector' => 'required',
            'curr_designation' => 'required',
            'service_type' => 'required',
            'managerial_years' => 'required',
            'payment' => 'required',
            'payment_amount' => 'required',
            'receipt_no' => 'required|unique:student_payments',
            'cheque_no' => 'required|unique:student_payments',

        ]);

//        try{
            $stdID = $this->student_id_generator();

            $student->sid = $stdID;
            $temp_id = $request->get('id');
            $ref_num = $request->get('ref_num');
            $student->salutation = $request->get('salutation');
            $student->first_Name = $request->get('first_Name');
            $student->middle_Name = $request->get('middle_Name');
            $student->last_Name = $request->get('last_Name');
            $student->DoB = $request->get('DoB');
            $student->NIC = $request->get('NIC');
            $student->Gender = $request->get('Gender');
            $student->Address_Res = $request->get('Address_Res');
            $student->Address_Office = $request->get('Address_Office');
            $student->Email_Address = $request->get('Email_Address');
            $student->Telephone_No_Mob = $request->get('Telephone_No_Mob');
            $student->Telephone_No_Res = $request->get('Telephone_No_Res');
            $student->Telephone_Office = $request->get('Telephone_Office');
            $student->sector = $request->get('sector');
            $student->curr_designation = $request->get('curr_designation');
            $student->service_type = $request->get('service_type');
            $student->managerial_years = $request->get('managerial_years');
            $student->sponsored = $request->get('sponsored');
            $student->employer_name = $request->get('employer_name');
            $student->employer_designation = $request->get('employer_designation');
            $student->employer_address = $request->get('employer_address');
            $student->curr_semester = 'Semester_1';
            $student->class_type = $request->get('class_type');



            $payments = $request->get('payment');
            $payment_amounts = $request->get('payment_amount');
            $receipt_nos = $request->get('receipt_no');
            $cheque_nos = $request->get('cheque_no');

            $no_of_payments = sizeof($payments);

            for($i = 0;$i < $no_of_payments;$i++){

                $student_payment = new StudentPayments();

                $student_payment->sid = $stdID;
                $student_payment->batch_id = substr($stdID,0,9);
                $student_payment->description = $payments[$i];
                $student_payment->amount = $payment_amounts[$i];
                $student_payment->receipt_no = $receipt_nos[$i];
                $student_payment->cheque_no = $cheque_nos[$i];

                $student_payment->save();

            }

            $temporary_student = TemporaryStudent::all()->find($temp_id);
            $temporary_student->delete();

            $temporary_student_qualifications = $temporary_student->StudentQualifications;

            foreach ($temporary_student_qualifications as $temporary_student_qualification) {

                $student_qualification = new StudentQualifications();

                $student_qualification->sid = $stdID;
                $student_qualification->qualification_type = $temporary_student_qualification->qualification_type;
                $student_qualification->qualification_name = $temporary_student_qualification->qualification_name;
                $student_qualification->institute = $temporary_student_qualification->institute;
                $student_qualification->year = $temporary_student_qualification->year;
                $student_qualification->specialized_area = $temporary_student_qualification->specialized_area;
                $student_qualification->grade = $temporary_student_qualification->grade;

                $student_qualification->save();
                $temporary_student_qualification->delete();
            }

            $temporary_student_careerdetails = $temporary_student->StudentCareerDetails;

            foreach ($temporary_student_careerdetails as $temporary_student_careerdetail) {

                $student_careerdetail = new StudentCareerDetails();

                $student_careerdetail->sid = $stdID;
                $student_careerdetail->organization_name = $temporary_student_careerdetail->organization_name;
                $student_careerdetail->organization_address = $temporary_student_careerdetail->organization_address;
                $student_careerdetail->designation = $temporary_student_careerdetail->designation;
                $student_careerdetail->period = $temporary_student_careerdetail->period;

                $student_careerdetail->save();
                $temporary_student_careerdetail->delete();

            }

        $student->save();

            return redirect('/selectlist')->with('success', 'Student has been registered successfully');

//        }
//        catch (Exception $e){
//            return redirect('/selectlist')->with('error', 'Student registration unsuccessful');
//        }





    }

    public function UpdateAdmissionStatus(Request $request){

        $status = $request->get('admission_status');
        $id = $request->get('id');
        $url = $request->get('url');

        $this->validate(request(), [

            'admission_status'=> 'required',
            'id'=> 'required',

        ]);

        $temporary_student = TemporaryStudent::all()->find($id);

        $temporary_student->admission_status = $status;

        $temporary_student->save();

        return redirect($url)->with('success','Student\'s admission status has been updated to '.$status.' stage successfully');

    }

    public function destroy(Request $request)
    {
        $temporary_student = TemporaryStudent::with('StudentQualifications','StudentCareerDetails')->find($request->get('temp_sid'));
        $temporary_student_qualifications = $temporary_student->StudentQualifications;
        $temporary_student_career_details = $temporary_student->StudentCareerDetails;

        $student_disqualified = new DisqualifiedStudent();

        $student_disqualified->sid =  $temporary_student->temp_sid;
        $student_disqualified->salutation = $temporary_student->salutation;
        $student_disqualified->first_Name = $temporary_student->first_Name;
        $student_disqualified->middle_Name = $temporary_student->middle_Name;
        $student_disqualified->last_Name = $temporary_student->last_Name;
        $student_disqualified->DoB = $temporary_student->DoB;
        $student_disqualified->NIC = $temporary_student->NIC;
        $student_disqualified->Gender = $temporary_student->Gender;
        $student_disqualified->Address_Res = $temporary_student->Address_Res;
        $student_disqualified->Address_Office = $temporary_student->Address_Office;
        $student_disqualified->Email_Address = $temporary_student->Email_Address;
        $student_disqualified->Telephone_No_Mob = $temporary_student->Telephone_No_Mob;
        $student_disqualified->Telephone_No_Res = $temporary_student->Telephone_No_Res;
        $student_disqualified->sector = $temporary_student->sector;
        $student_disqualified->curr_designation = $temporary_student->curr_designation;
        $student_disqualified->Telephone_Office = $temporary_student->Telephone_Office;
        $student_disqualified->service_type = $temporary_student->service_type;
        $student_disqualified->managerial_years = $temporary_student->managerial_years;
        $student_disqualified->sponsored = $temporary_student->sponsored;
        $student_disqualified->employer_name = $temporary_student->employer_name;
        $student_disqualified->employer_designation = $temporary_student->employer_designation;
        $student_disqualified->employer_address = $temporary_student->employer_address;
        $student_disqualified->class_type = $temporary_student->class_type;



        foreach ($temporary_student_career_details as $temporary_student_career_detail){

            $student_disqualified_career_details = new DisqualifiedStudentCareerDetails();

            $student_disqualified_career_details->temp_sid = $temporary_student_career_detail->temp_sid;
            $student_disqualified_career_details->organization_name = $temporary_student_career_detail->organization_name;
            $student_disqualified_career_details->organization_address = $temporary_student_career_detail->organization_address;
            $student_disqualified_career_details->designation = $temporary_student_career_detail->designation;
            $student_disqualified_career_details->period = $temporary_student_career_detail->period;

            $student_disqualified_career_details->save();
            $temporary_student_career_detail->delete();
        }

        foreach ($temporary_student_qualifications as $temporary_student_qualification){

            $student_disqualified_qualifications = new DisqualifiedStudentQualifications();

            $student_disqualified_qualifications->temp_sid = $temporary_student_qualification->temp_sid;
            $student_disqualified_qualifications->qualification_type = $temporary_student_qualification->qualification_type;
            $student_disqualified_qualifications->qualification_name = $temporary_student_qualification->qualification_name;
            $student_disqualified_qualifications->institute = $temporary_student_qualification->institute;
            $student_disqualified_qualifications->year = $temporary_student_qualification->year;
            $student_disqualified_qualifications->specialized_area = $temporary_student_qualification->specialized_area;
            $student_disqualified_qualifications->grade = $temporary_student_qualification->grade;

            $student_disqualified_qualifications->save();
            $temporary_student_qualification->delete();

        }

        $temporary_student->delete();



        $student_disqualified->save();

        return redirect('new-admissions')->with('success','Student has been deleted from the system successfully');

    }

    public function delete(Request $request)
    {
        $student = TemporaryStudent::find($request->get('temp_sid'));
//        $student->Temporary_Parent_Guardian->delete();
//        $student->delete();
        // return redirect('students')->with('success','Student has been deleted from the successfully');
        return $request->get('temp_sid');
    }

    public function checkProgress(Request $request)
    {
        $admission_status = TemporaryStudent::select('admission_status')->where('ref_num', $request->get('ref_num'))->pluck('admission_status')->toArray();

        if($admission_status == null){
            $progress = -99;
        }
        else if($admission_status[0] == "Pending"){
            $progress = -1;
        }
        else if($admission_status[0] == "Interview"){
            $progress = 1;
        }
        else if($admission_status[0] == "AAB/PTS"){
            $progress = 2;
        }
        else if($admission_status[0] == "Rejected"){
            $progress = 0;
        }
        else if($admission_status[0] == "Selected"){
            $progress = 3;
        }
        else{
            $progress = -99;
        }


        return view('Frontend.admission_progress_portal')->with(compact('progress'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $sid
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = TemporaryStudent::with('StudentQualifications','StudentCareerDetails')->find($id);

        return view('Admin.User_Management.Student.update_selected_student_details',compact('student','sid'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $student = TemporaryStudent::with('StudentQualifications','StudentCareerDetails')->find($id);

        return view('Admin.User_Management.Student.view_temporary_student_details',compact('student','sid'));
    }
}
