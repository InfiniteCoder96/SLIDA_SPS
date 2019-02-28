@extends('layouts.app')

@section('content')
    <style>
        a:hover {
            cursor:pointer;
        }
    </style>
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
                    <h4 class="page-title">Results Management Portal <i class="mdi mdi-face"></i></h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Results Management</li>
                                <li class="breadcrumb-item active" aria-current="page">New Result</li>
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
            @if (\Session::has('error'))
                <div id="alertBox" class="alert alert-danger">
                    <p>{{ \Session::get('error') }}</p>
                </div><br />
            @endif
            <div class="row">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Add New Result</h5>
                        </div>
                        <form  class="needs-validation" novalidate action="{{url('student_results')}}" method="post">
                            <div class="card-body bg-info">


                                {{csrf_field()}}
                                <input type="hidden" value="admin" name="source">



                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Student ID</span>
                                                </div>
                                                <input class="form-control" type="text" name="sid">
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Subject ID</span>
                                                </div>
                                                <select name="sub_id" class="form-control" required>
                                                    <option selected disabled>- Select Subject -</option>
                                                    <option disabled class="bg-dark text-light">- Semester 1 -</option>
                                                    @foreach($subject_IDs as $subject_ID)

                                                        @if($subject_ID->sub_sem == 'Semester_1')

                                                            <option value="{{$subject_ID->sub_id}}">{{$subject_ID->sub_id}} - {{$subject_ID->sub_name}}</option>
                                                        @endif

                                                    @endforeach
                                                    <option disabled class="bg-dark text-light">- Semester 2 -</option>
                                                    @foreach($subject_IDs as $subject_ID)

                                                        @if($subject_ID->sub_sem == 'Semester_2')

                                                            <option value="{{$subject_ID->sub_id}}">{{$subject_ID->sub_id}} - {{$subject_ID->sub_name}}</option>
                                                        @endif

                                                    @endforeach
                                                    <option disabled class="bg-dark text-light">- Semester 3 -</option>
                                                    @foreach($subject_IDs as $subject_ID)

                                                        @if($subject_ID->sub_sem == 'Semester_3')

                                                            <option value="{{$subject_ID->sub_id}}">{{$subject_ID->sub_id}} - {{$subject_ID->sub_name}}</option>
                                                        @endif

                                                    @endforeach
                                                    <option disabled class="bg-dark text-light">- Semester 4 -</option>
                                                    @foreach($subject_IDs as $subject_ID)

                                                        @if($subject_ID->sub_sem == 'Semester_4')

                                                            <option value="{{$subject_ID->sub_id}}">{{$subject_ID->sub_id}} - {{$subject_ID->sub_name}}</option>
                                                        @endif

                                                    @endforeach
                                                    <option disabled class="bg-dark text-light">- Semester 5 -</option>
                                                    @foreach($subject_IDs as $subject_ID)

                                                        @if($subject_ID->sub_sem == 'Semester_5')

                                                            <option value="{{$subject_ID->sub_id}}">{{$subject_ID->sub_id}} - {{$subject_ID->sub_name}}</option>
                                                        @endif

                                                    @endforeach
                                                    <option disabled class="bg-dark text-light">- Semester 6 -</option>
                                                    @foreach($subject_IDs as $subject_ID)

                                                        @if($subject_ID->sub_sem == 'Semester_6')

                                                            <option value="{{$subject_ID->sub_id}}">{{$subject_ID->sub_id}} - {{$subject_ID->sub_name}}</option>
                                                        @endif

                                                    @endforeach


                                                </select>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Result Type</span>
                                            </div>
                                            <select name="result_type" class="form-control" required>
                                                <option selected disabled>- Select Result type -</option>
                                                <option value="attendance">Attendance</option>
                                                <option value="assignment_1">Assignment 1</option>
                                                <option value="assignment_2">Assignment 2</option>
                                                <option value="final">Final</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Marks</span>
                                                </div>
                                                <input class="form-control" type="text" name="marks">
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>








                            <div class="modal-footer text-white bg-dark">
                                <button class="btn btn-success" type="submit">SUBMIT</button>
                                <button class="btn btn-warning" type="reset">RESET</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Add Batch Result</h5>
                        </div>
                        <form  class="needs-validation" novalidate action="{{url('addresult')}}" method="post">
                            <div class="card-body bg-success">


                                {{csrf_field()}}
                                <input type="hidden" value="admin" name="source">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Category</span>
                                                    </div>
                                                    <select name="category" class="form-control" onchange="SubjectCheck(this);" required>
                                                        <option selected disabled>- Select Category -</option>
                                                        <option value="sid">Student ID</option>
                                                        <option value="sub_id">Subject ID</option>
                                                        <option value="sub_name">Subject Name</option>
                                                    </select>
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Value</span>
                                                    </div>
                                                    <input class="form-control" type="text" name="value">
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Batch</span>
                                                    </div>
                                                    <select name="batch" class="form-control" required>
                                                        <option selected disabled>- Select Batch -</option>
                                                        @forelse($batches as $batch)
                                                            <option value="{{$batch->batch_name}}">{{$batch->batch_name}}</option>
                                                        @empty
                                                            <option disabled class="bg-danger text-white">< No Batches Found ></option>
                                                        @endforelse

                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3" id="sub_details" style="display: none;">

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Assessment</span>
                                                    </div>
                                                    <select name="assessment_type" class="form-control" required>
                                                        <option selected disabled>- Assessment Type -</option>
                                                        <option value="attendance">Attendance</option>
                                                        <option value="assignment_1">Assignment 01</option>
                                                        <option value="assignment_2">Assignment 02</option>
                                                        <option value="final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>







                            </div>
                            <div class="modal-footer bg-dark">
                                <button class="btn btn-success" type="submit">SEARCH</button>
                                <button class="btn btn-warning" type="reset">RESET</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    @if($results)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Result Information<span class="label label-info" style="font-size: 20px">{{count($results)}}</span></h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-dark text-white">
                                    <tr>

                                        <th scope="col" style="font-size: 12px">SID</th>
                                        <th scope="col" style="font-size: 12px">Subject ID</th>
                                        <th scope="col" style="font-size: 12px">Attendance</th>
                                        <th scope="col" style="font-size: 12px">Assignment 1</th>
                                        <th scope="col" style="font-size: 12px">Assignment 2</th>
                                        <th scope="col" style="font-size: 12px">Final</th>
                                        <th scope="col" style="font-size: 12px">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody class="customtable bg-secondary text-white">

                                    @foreach($results as $result)

                                        <tr>

                                            <td style="font-size: 12px">{{$result->sid}}</td>
                                            <td style="font-size: 12px">{{$result->sub_id}}</td>
                                            @if ($result->attendance == null)
                                                <td style="font-size: 12px">
                                                    <h5>
                                                        <a data-toggle="modal" data-target="#deleteConfirmationModal" class="badge badge-pill badge-warning text-dark font-weight-bold">Not Yet Published</a>
                                                    </h5>
                                                </td>

                                            @else
                                                <td style="font-size: 12px">{{$result->attendance}}</td>
                                            @endif
                                            @if ($result->assignment_1 == null)
                                                <td style="font-size: 12px">
                                                    <h5>
                                                        <a data-toggle="modal" data-target="#deleteConfirmationModal" class="badge badge-pill badge-warning text-dark font-weight-bold">Not Yet Published</a>                                                    </h5>
                                                </td>
                                            @else
                                                <td style="font-size: 12px">{{$result->assignment_1}}</td>
                                            @endif
                                            @if ($result->assignment_2 == null)
                                                <td style="font-size: 12px">
                                                    <h5>
                                                        <a data-toggle="modal" data-target="#deleteConfirmationModal" class="badge badge-pill badge-warning text-dark font-weight-bold">Not Yet Published</a>                                                    </h5>

                                                </td>
                                            @else
                                                <td style="font-size: 12px">{{$result->assignment_2}}</td>
                                            @endif
                                            @if ($result->final == null)
                                                <td style="font-size: 12px">
                                                    <h5>
                                                        <a data-toggle="modal" data-target="#deleteConfirmationModal" class="badge badge-pill badge-warning text-dark font-weight-bold">Not Yet Published</a>                                                    </h5>

                                                </td>
                                            @else
                                                <td style="font-size: 12px">{{$result->final}}</td>
                                            @endif
                                            <td style="font-size: 12px" >

                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <input name="url" type="hidden" value="/interviewlist">
                                                        <input name="id" type="hidden" value="">
                                                        <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="modal" data-target="#updateResultModal"

                                                                data-sid="{{$result['sid']}}"
                                                                data-subid="{{$result['sub_id']}}"
                                                                data-att="{{$result['attendance']}}"
                                                                data-ass1="{{$result['assignment_1']}}"
                                                                data-ass2="{{$result['assignment_2']}}"
                                                                data-final="{{$result['final']}}"><span class="fas fa-eye"></span></button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input name="url" type="hidden" value="/interviewlist">
                                                        <input name="id" type="hidden" value="">
                                                        <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="modal" data-target="#acceptConfirmationModal"><span class="fas fa-pencil-alt"></span></button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input name="url" type="hidden" value="/interviewlist">
                                                        <input name="id" type="hidden" value="">
                                                        <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="modal" data-target="#acceptConfirmationModal"><span class="fas fa-trash-alt"></span></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
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
    @include('layouts.adminLayouts.updateResultModal')
    @include('layouts.adminLayouts.deleteConfirmationModal')
    @include('layouts.adminLayouts.acceptConfirmationModal')

    <script>

        function SubjectCheck(that) {
            if (that.value == "sub_id") {
                document.getElementById("sub_details").style.display = "block";

            } else if(that.value == "sub_name"){
                document.getElementById("sub_details").style.display = "block";
            } else{
                document.getElementById("sub_details").style.display = "none";
            }

        }

        setTimeout(function() {
            $('#alertBox').hide('fade');
        }, 4000);
    </script>
@endsection