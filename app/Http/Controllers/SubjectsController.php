<?php

namespace App\Http\Controllers;

use App\Subjects;
use Illuminate\Http\Request;

class SubjectsController extends Controller
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

            'sub_id'=> 'required|unique:subjects',
            'sub_name'=> 'required',
            'sub_sem'=> 'required',
            'sub_credits'=> 'required|min:1|max:1|',

        ]);

        $new_subject = new Subjects();

        $new_subject->sub_id = $request->sub_id;
        $new_subject->sub_name = $request->sub_name;
        $new_subject->sub_sem = $request->sub_sem;
        $new_subject->sub_credits = $request->sub_credits;

        $new_subject->save();

        return redirect('addsubject')->with('success',$request->sub_id.'/'.$request->sub_name.' subject has been added to the system successfully');

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

    public function ShowAddSubject(){

        $subjects = Subjects::orderBy('sub_id','ASC')->get();

        return view('Admin.Subject_Management.addNewSubject',compact('subjects'));
    }
}
