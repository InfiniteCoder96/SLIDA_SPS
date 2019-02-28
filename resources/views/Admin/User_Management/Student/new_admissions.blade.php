@extends('layouts.app')

@section('content')
    <style>
        .blinking{
            animation:blinkingText 0.9s infinite;
        }
        @keyframes blinkingText{
            0%{     color: white;    }
            49%{    color: transparent; }
            50%{    color: orange; }
            99%{    color:transparent;  }
            100%{   color: white;    }
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
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif

            <div class="card">
                <div class="row">
                    <div class="card-body col-md-10">
                        <h5 class="card-title m-b-0">Student Details</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-dark btn-md text-success" type="button" data-toggle="modal" data-target="#acceptConfirmationModal"><span class="fas fa-search"></span></button>
                        <button class="btn btn-dark btn-md text-danger" type="button" data-toggle="modal" data-target="#acceptConfirmationModal"><span class="fas fa-comment-alt"></span></button>
                        <button class="btn btn-dark btn-md text-light" type="button" data-toggle="modal" data-target="#acceptConfirmationModal"><span class="fas fa-file-alt"></span></button>

                    </div>
                </div>
                <div class="table-responsive">
                    @if(count($temporary_students))
                    <form action="{{url('update_status')}}" method="post" id="formfield">
                        {{csrf_field()}}
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>


                            <th scope="col" style="font-size: 12px">Reference No.</th>
                            <th scope="col" style="font-size: 12px">First Name</th>
                            <th scope="col" style="font-size: 12px">Last Name</th>
                            <th scope="col" style="font-size: 12px">Address</th>
                            <th scope="col" style="font-size: 12px">Email</th>
                            <th scope="col" style="font-size: 12px">Telephone (Mob)</th>
                            <th scope="col" style="font-size: 12px">Status</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">

                        @foreach ($temporary_students as $temporary_student)

                            <tr>

                                <td style="font-size: 12px">{{$temporary_student->ref_num}}</td>
                                <td style="font-size: 12px">{{$temporary_student->first_Name}}</td>
                                <td style="font-size: 12px">{{$temporary_student->last_Name}}</td>
                                <td style="font-size: 12px">{{$temporary_student->Address_Res}}</td>
                                <td style="font-size: 12px">{{$temporary_student->Email_Address}}</td>
                                <td style="font-size: 12px">{{$temporary_student->Telephone_No_Mob}}</td>


                                    <td style="font-size: 12px">
                                        <select name="admission_status" class="form-control" required>
                                            <option selected disabled>- Select Status -</option>
                                            <option value="Interview">Interview</option>
                                            <option value="AAB/PTS">AAB / PTS</option>
                                            <option value="Rejected">Reject</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <input name="id" type="hidden" value="{{$temporary_student->id}}">
                                                <input name="url" type="hidden" value="/new-admissions">
                                                <span data-toggle="modal" data-target="#acceptConfirmationModal">

                                                    <button class="btn btn-dark btn-md text-orange btn-md" type="button" data-toggle="tooltip" data-placement="bottom" title="Change Student's Status"><span class="fas fa-check"></span></button>
                                                </span>

                                            </div>
                                            <div class="col-md-6">

                                                <a  class="waves-effect waves-dark" href="{{action('TemporaryStudentController@view', $temporary_student['id'])}}" data-toggle="tooltip" data-placement="bottom" title="View Student's Details"><button class="btn btn-dark btn-md text-orange btn-md" type="button"><span class="fas fa-eye"></span></button></a>
                                            </div>
                                        </div>

                                    </td>



                            </tr>



                        </tbody>


                        @endforeach
                    </table>
                    </form>
                        @else
                        <div class="card bg-dark text-white" style="margin-top: 20px">
                            <div class="card-body">
                                <center><h2 class="card-title blinking">No new admissions received</h2></center>
                                <center><h4>SPS/MPM/2018/2020</h4></center>
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
    @include('layouts.adminLayouts.deleteConfirmationModal')
    @include('layouts.adminLayouts.acceptConfirmationModal')

    <script>

        $('#submit').click(function(){
            /* when the submit button in the modal is clicked, submit the form */


            $('#formfield').submit();
        });
    </script>
@endsection