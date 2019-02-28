<?php

namespace App\Http\Controllers;

use App\Batch;
use App\Student;
use App\StudentRepeats;
use App\StudentResults;
use App\StudentSemesterDetails;
use App\Subjects;
use Illuminate\Http\Request;

class StudentResultsController extends Controller
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
        $this->validate(request(), [
            'sid'=> 'required',
            'sub_id'=> 'required',
            'result_type'=> 'required',
            'marks'=> 'required|numeric|min:0|max:100',

        ]);

        if($this->CheckResultAvailability($request)){
            return redirect('addresult')->with('error','Result already stored OR Student Id is Invalid...Please check subject ID,Student ID and try again');
        }
        else{

            $sid = $request->get('sid');
            $subject_id = $request->get('sub_id');
            $results_type = $request->get('result_type');
            $marks = $request->get('marks');
            $student_results = StudentResults::where(
                [['sub_id','=',$subject_id],
                    ['sid','=',$sid]])->first();

            if (is_null($student_results)) {

                $student_result = new StudentResults();

                if($results_type == 'attendance'){
                    $student_result->attendance = $marks;
                }
                else if($results_type == 'assignment_1'){
                    $student_result->assignment_1 = $marks;
                }
                else if($results_type == 'assignment_2'){
                    $student_result->assignment_2 = $marks;
                }
                else if($results_type == 'final'){
                    $student_result->final = $marks;

                    if($marks < 35){

                        $final_repeat = new StudentRepeats();

                        $final_repeat->sid = $sid;
                        $final_repeat->sub_id = $subject_id;

                        $final_repeat->save();

                    }

                }

                $student_result->sub_id = $subject_id;
                $student_result->sid = $sid;
                $student_result->batch = substr($sid,0,9);

                $student_result->save();
                return redirect('addresult')->with('success','Student\'s result has been updated successfully');
            }
            else{
                $student_id = $student_results->id;

                $student_resultss = StudentResults::find($student_id);

                if($results_type == 'attendance'){
                    $student_resultss->attendance = $marks;
                }
                else if($results_type == 'assignment_1'){
                    $student_resultss->assignment_1 = $marks;
                }
                else if($results_type == 'assignment_2'){
                    $student_resultss->assignment_2 = $marks;
                }
                else if($results_type == 'final'){
                    $student_resultss->final = $marks;

                    if($marks < 17.5){

                        $final_repeat = new StudentRepeats();

                        $final_repeat->sid = $sid;
                        $final_repeat->sub_id = $subject_id;

                        $final_repeat->save();

                    }
                    else{
                        $ass1 = $student_results->assignment_1;
                        $ass2 = $student_results->assignment_2;
                        $attd = $student_results->attendance;

                        $total = $ass1 + $ass2 + $attd + $marks;

                        if($total < 50){

                            $final_repeat = new StudentRepeats();

                            $final_repeat->sid = $sid;
                            $final_repeat->sub_id = $subject_id;

                            $final_repeat->save();
                        }

                    }

                }

                $student_resultss->save();

                $sem_status = $this->CheckSemesterComplete($sid);

                $student = Student::where('sid','=',$sid)->first();

                $sem_details = StudentSemesterDetails::where([['sid','=',$sid],['semester_name','=',$student->curr_semester]])->first();

                if(is_null($sem_details)){
                    if($sem_status == true){

                        //$student->curr_semester = substr($student->curr_semester,0,9).(intval(substr($student->curr_semester,9,9)) + 1);

                        $student_sem_details = new StudentSemesterDetails();

                        $student_sem_details->sid = $sid;
                        $student_sem_details->semester_name = $student->curr_semester;
                        $student_sem_details->progress_status = 'Pass';
                        $student_sem_details->sem_status = 'Complete';

                        $student_sem_details->save();

                    }
                    else if($sem_status == false) {

                        $student_sem_details = new StudentSemesterDetails();

                        $student_sem_details->sid = $sid;
                        $student_sem_details->semester_name = $student->curr_semester;
                        $student_sem_details->progress_status = 'Fail';

                        $student_sem_details->save();
                    }
                }
                else{
                    if($sem_status == true){

                        $sem_details->sid = $sid;
                        $sem_details->semester_name = $student->curr_semester;
                        $sem_details->progress_status = 'Pass';
                        $sem_details->sem_status = 'Complete';

                        $sem_details->save();

                    }
                    else if($sem_status == false) {

                        $sem_details->sid = $sid;
                        $sem_details->semester_name = $student->curr_semester;
                        $sem_details->progress_status = 'Fail';

                        $sem_details->save();
                    }
                }

                $student->save();

                return redirect('addresult')->with('success','Student\'s result has been updated successfully');

            }

        }

    }

    public function CheckSemesterComplete($sid){

        $student = Student::where('sid','=',$sid)->first();

        $std_current_sem = $student->curr_semester;

        $subjects = Subjects::where('sub_sem','=',$std_current_sem)->get();

        $sub_count = count($subjects);

        $completed_subs = 0;

        foreach ($subjects as $subject){

            $sub_id = $subject->sub_id;

            $student_results = StudentResults::where(
                [['sub_id','=',$sub_id],
                    ['sid','=',$sid]])->first();

            if(!is_null($student_results)){

                $status = $this->progression_criteria($student_results);

                if($status == true){
                    $completed_subs = $completed_subs + 1;
                }

            }
        }

        if($completed_subs == $sub_count){
            return true;
        }
        else{
            return false;
        }
    }

    public function progression_criteria($results){

        $attd_marks = $results->attendance;
        $ass1_marks = $results->assignment_1;
        $ass2_marks = $results->assignment_2;
        $final_marks = $results->final;

        $total = $attd_marks + $ass1_marks + $ass2_marks + $final_marks;

        $status = null;

        if($ass1_marks != null || $ass2_marks != null || $final_marks != null){

            if(!$final_marks < 17.5){

                if(!$total < 50){
                    $status = true;
                }
                else{
                    $status = false;
                }
            }
            else{
                $status = false;
            }

        }


        return $status;
    }

    public function CheckResultAvailability(Request $request){
        $sid = $request->get('sid');
        $subject_id = $request->get('sub_id');
        $results_type = $request->get('result_type');

        $results = StudentResults::where(
            [['sub_id','=',$subject_id],
                ['sid','=',$sid]])->pluck($results_type);

        $student = Student::where('sid','=',$sid)->first();

        if(is_null($student)){
            return true;
        }
        else{
            if(is_null($results)){
                return false;
            }
            else{
                if($results->count() > 0){
                    if($results[0]){
                        return true;
                    }
                    else{
                        return false;
                    }
                }
                else{
                    return false;
                }
            }
        }

    }

    public function ShowAddResult()
    {
        $results = null;

        $subject_IDs = Subjects::all();
        $batches = Batch::all();

        return view('Admin.Result_Management.AddNewResult')->with(compact('results','subject_IDs','batches'));
    }



    public function ShowBatchResult(Request $request)
    {

        $this->validate(request(), [
            'category'=> 'required',
            'value'=> 'required',
            'batch'=> 'required',


        ]);

        $subject_IDs = Subjects::all();

        $category = $request->get('category');
        $value = $request->get('value');
        $batch = $request->get('batch');
        $assessment_type = $request->get('assessment_type');

        if($category == 'sub_id'){
            if($assessment_type == null){
                $results = StudentResults::where(
                    [['sub_id','=',$value],
                        ['batch','=',$batch]])->get();
            }
            else{
                $results = StudentResults::select($assessment_type,'sid','sub_id')->where(
                    [['sub_id','=',$value],
                        ['batch','=',$batch]])->get();
            }
        }
        else if($category == 'sub_name'){
            if($assessment_type == null){
                $results = StudentResults::where(
                    [['sub_name','=',$value],
                        ['batch','=',$batch]])->get();
            }
            else{
                $results = StudentResults::select($assessment_type,'sid')->where(
                    [['sub_name','=',$value],
                        ['batch','=',$batch]])->get();
            }


        }
        else if($category == 'sid'){
            $results = StudentResults::where(
                [['sid','=',$value],
                ['batch','=',$batch]])->get();
        }

        $column = $assessment_type;
        $batches = Batch::all();


        return view('Admin.Result_Management.AddNewResult')->with(compact('results','subject_IDs','column','batches'));
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
        //
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

    public function showPayments(Request $request){

    }

}
