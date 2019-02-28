<?php

namespace App\Http\Controllers;

use App\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
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
        $batches = Batch::orderBy('batch_id','ASC')->get();

        return view('Admin.Batch_Management.addNewBatch',compact('batches'));
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

            'batch_name'=> 'required|unique:batches',
            'expected_student_count'=> 'required|numeric|min:50|max:200',
            'application_closing_date'=> 'required',
            'interview_date'=> 'required',
            'academic_start_date' =>'required',
            'academic_end_date' => 'required',
            'application_fee'  => 'required',
            'admission_fee'  => 'required',
            'course_fee'  => 'required',
            'course_fee_installments'  => 'required',
            'repeat_exam_fee'  => 'required'
        ]);

        $new_batch = new Batch();

        $new_batch->batch_id = $this->batchIDGenerator($request);
        $new_batch->batch_name = $request->batch_name;
        $new_batch->students_count = $request->expected_student_count;
        $new_batch->current_sem = "Semester_1";
        $new_batch->interview_date = $request->interview_date;
        $new_batch->application_close_date = $request->application_closing_date;
        $new_batch->start_date = $request->academic_start_date;
        $new_batch->end_date = $request->academic_end_date;
        $new_batch->application_fee = $request->application_fee;
        $new_batch->admission_fee = $request->admission_fee;
        $new_batch->course_fee = $request->course_fee;
        $new_batch->course_fee_installments = $request->course_fee_installments;
        $new_batch->repeat_exam_fee = $request->repeat_exam_fee;

        $new_batch->save();

        return redirect('batches/create')->with('success',$request->batch_name.'/'.$request->batch_id.' Batch has been added to the system successfully');

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

    public function batchIDGenerator(Request $request){

        return $request->batch_name . 'TEST';
    }
}
