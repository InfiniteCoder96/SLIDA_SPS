<?php

namespace App\Http\Controllers;

use App\Batch;
use App\Student;
use App\StudentPayments;
use Illuminate\Http\Request;

class StudentPaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_payments = null;
//        dd($student_payments);

        //$batch_counts = Batch::all();

        return view('Admin.Payment_Management.student_payments')->with(compact('student_payments','batch_counts'));
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
            'payment_type'=> 'required',
            'student_id'=> 'required',
            'payment_amount'=> 'required',
            'receipt_no'=> 'required|unique:student_payments',
        ]);


        $payment_type = $request->get('payment_type');
        $student_id = $request->get('student_id');
        $payment_amount = $request->get('payment_amount');
        $receipt_no = $request->get('receipt_no');
        $cheque_no = $request->get('cheque_no');

        $student = Student::where('sid','=',$student_id)->first();

        if(is_null($student)){
            return redirect('student_payments')->with('error','Student ID ( '.$student_id.' ) not found');
        }
        else{

            $student_payment_availability_check = StudentPayments::where([['sid','=',$student_id],['description','=',$payment_type]])->first();

            if(is_null($student_payment_availability_check)){

                $new_payment = new StudentPayments();

                $new_payment->sid = $student_id;
                $new_payment->batch_id = substr($student_id,0,9);
                $new_payment->description = $payment_type;
                $new_payment->amount = $payment_amount;
                $new_payment->cheque_no = $cheque_no;
                $new_payment->receipt_no = $receipt_no;

                $new_payment->save();

                return redirect('student_payments')->with('success','Payment details has been stored successfully');
            }
            else{
                return redirect('student_payments')->with('error','Student ID: '.$student_id.' || Payment Type: '.$payment_type.' || Receipt No: '.$receipt_no.' || This Payment already stored');
            }

        }



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

    public function searchPayment(Request $request)
    {

        $this->validate(request(), [
            'category' => 'required',
            'value' => 'required',
            'payment_type' => 'required',
        ]);

        $category = $request->get('category');
        $value = $request->get('value');
        $payment_type = $request->get('payment_type');

        if ($payment_type == 'All') {
            if ($category == 'sid') {
                $student_payments = StudentPayments::where('sid', '=', $value)->get()->sortby('created_at');

                if (count($student_payments) == 0) {
                    return redirect('student_payments')->with('error','Student ID - '.$value.' not found');
                }
                else{

                    $batch_id = StudentPayments::select('batch_id')->where('sid', '=', $value)->first();
                    $batch_count = Batch::where('batch_name', '=', $batch_id['batch_id'])->first();

                    return view('Admin.Payment_Management.student_payments')->with(compact('student_payments', 'batch_count'));

                }

            } else if ($category == 'batch_id') {
                $student_payments = StudentPayments::where('batch_id', '=', $value)->get()->sortby('sid');
                $batch_count = Batch::where('batch_name', '=', $value)->first();

                return view('Admin.Payment_Management.student_payments')->with(compact('student_payments', 'batch_count'));

            }
        } else {
            if ($category == 'sid') {
                $student_payments = StudentPayments::where([['sid', '=', $value], ['description', '=', $payment_type]])->get()->sortby('sid');

                if (count($student_payments) == 0) {
                    return redirect('student_payments')->with('error','Student ID - '.$value.' not found');
                }
                else{
                    $batch_id = StudentPayments::select('batch_id')->where('sid', '=', $value)->first();
                    $batch_count = Batch::where('batch_name', '=', $batch_id['batch_id'])->first();

                    return view('Admin.Payment_Management.student_payments')->with(compact('student_payments', 'batch_count'));

                }

            } else if ($category == 'batch_id') {
                $student_payments = StudentPayments::where([['batch_id', '=', $value], ['description', '=', $payment_type]])->get()->sortby('sid');
                $batch_count = Batch::where('batch_name', '=', $value)->first();

                return view('Admin.Payment_Management.student_payments')->with(compact('student_payments', 'batch_count'));

            }
        }



    }

}
