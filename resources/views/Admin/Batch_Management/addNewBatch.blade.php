@extends('layouts.app')

@section('content')

    @include('layouts.adminLayouts.header')
    @include('layouts.adminLayouts.sideBar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" style="background-image: url('/public/assets/images/big/img0.jpg')">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Welcome to Student Management Portal <i class="mdi mdi-face"></i></h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Student</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            @if ($errors->any())
                <div id="alertBox" class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            @if (\Session::has('success'))
                <div id="alertBox" class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Add New Subject</h5>
                </div>
                <div class="card-body bg-secondary">

                    <form  class="needs-validation" novalidate action="{{url('batches')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" value="admin" name="source">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-success text-white mb-3">Basic Details</div>
                                <div class="form-row">

                                    <div class="col-md-6 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Batch Name</span>
                                            </div>
                                            <input class="form-control" type="text" name="batch_name">
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Expected Student Count</span>
                                            </div>
                                            <input class="form-control" type="number" name="expected_student_count" min="50" max="200">
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="bg-success text-white mb-3">Important Dates</div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Application Closing Date</span>
                                            </div>
                                            <input class="form-control" type="date" name="application_closing_date">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Interview Date</span>
                                            </div>
                                            <input class="form-control" type="date" name="interview_date">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Academic Start Date</span>
                                            </div>
                                            <input class="form-control" type="date" name="academic_start_date">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Academic End Date</span>
                                            </div>
                                            <input class="form-control" type="date" name="academic_end_date">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="bg-success text-white mb-3">Fees Details</div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Application Fee (Rs.)</span>

                                            </div>
                                            <input class="form-control" type="text" name="application_fee">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Admission Fee (Rs.)</span>
                                            </div>
                                            <input class="form-control" type="text" name="admission_fee">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Course Fee (Rs.)</span>

                                            </div>
                                            <input class="form-control" type="text" name="course_fee">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Course Fee Installments (Rs.)</span>
                                            </div>
                                            <input class="form-control" type="text" name="course_fee_installments">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Repeat Exam Fee (Rs.)</span>

                                            </div>
                                            <input class="form-control" type="text" name="repeat_exam_fee">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>





                        <div class="card-footer text-white bg-dark">
                            <button class="btn btn-success" type="submit">SUBMIT</button>
                            <button class="btn btn-warning" type="reset">RESET</button>
                        </div>
                    </form>
                </div>


            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Ongoing Batches</h5>
                </div>
                <div class="table-responsive">
                    <form action="{{url('update_status')}}" method="post">
                        {{csrf_field()}}
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>


                                <th scope="col" style="font-size: 12px">Batch ID</th>
                                <th scope="col" style="font-size: 12px">Batch Name</th>
                                <th scope="col" style="font-size: 12px">Current Semester</th>
                                <th scope="col" style="font-size: 12px">Students</th>
                                <th scope="col" style="font-size: 12px">Action</th>


                            </tr>
                            </thead>
                            <tbody class="customtable">

                            @foreach($batches as $batch)

                                <tr>

                                    <td style="font-size: 12px">{{$batch->batch_id}}</td>
                                    <td style="font-size: 12px">{{$batch->batch_name}}</td>
                                    <td style="font-size: 12px">{{$batch->current_sem}}</td>
                                    <td style="font-size: 12px">{{$batch->students_count}}</td>
                                    <td style="font-size: 12px">
                                        <input name="ref_num" type="hidden" value="{{$batch->sub_id}}">
                                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#updateSubjectModal"

                                                data-id="{{$batch['sub_id']}}"
                                                data-name="{{$batch['sub_name']}}"
                                                data-sem="{{$batch['sub_sem']}}"
                                                data-credits="{{$batch['sub_credits']}}"

                                                type="button">Update</button>

                                        <button class="btn btn-danger btn-xs" type="submit" data-toggle="modal" data-target="#deleteConfirmationModal">Delete</button>
                                    </td>



                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </form>
                </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->


    @include('layouts.adminLayouts.footer')
    @include('layouts.adminLayouts.updateSubjectModal')
    @include('layouts.adminLayouts.acceptConfirmationModal')

    <script>
        //        $('#submit').click(function(){
        //            /* when the submit button in the modal is clicked, submit the form */
        //
        //            $('#formfield').submit();
        //        });


        setTimeout(function() {
            $('#alertBox').hide('fade');
        }, 4000);
    </script>
@endsection