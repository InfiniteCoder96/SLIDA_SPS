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
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="font-size: 12px">SID</th>
                            <th scope="col" style="font-size: 12px">First Name</th>
                            <th scope="col" style="font-size: 12px">Last Name</th>
                            <th scope="col" style="font-size: 12px">Address</th>
                            <th scope="col" style="font-size: 12px">Email</th>
                            <th scope="col" style="font-size: 12px">Telephone (Res)</th>
                            <th scope="col" style="font-size: 12px">Telephone (Mob)</th>
                            <th scope="col" style="font-size: 12px">Action</th>

                        </tr>
                        </thead>
                        <tbody class="customtable">

                        @foreach($students as $student)

                            <tr>

                                <td style="font-size: 12px">{{$student->sid}}</td>
                                <td style="font-size: 12px">{{$student->first_Name}}</td>
                                <td style="font-size: 12px">{{$student->last_Name}}</td>
                                <td style="font-size: 12px">{{$student->Address_Res}}</td>
                                <td style="font-size: 12px">{{$student->Email_Address}}</td>
                                <td style="font-size: 12px">{{$student->Telephone_No_Mob}}</td>
                                <td style="font-size: 12px">{{$student->Telephone_No_Res}}</td>
                                <td>
                                    <div class="form-row">
                                        <div class="col-md-3">

                                            <a href="{{action('StudentController@edit',$student['id'])}}">
                                                <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="tooltip" data-placement="bottom" title="Student's progress"><span class="fas fa-eye"></span></button>
                                            </a>

                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{action('StudentController@edit',$student['id'])}}">
                                                <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="tooltip" data-placement="bottom" title="Student's progress"><span class="fa fa-money-bill-alt"></span></button>
                                            </a>


                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{action('StudentController@edit',$student['id'])}}">
                                                <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="tooltip" data-placement="bottom" title="Student's progress"><span class="fas fa-chart-line"></span></button>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <form action="{{action('StudentController@destroy', $student['sid'])}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="tooltip" data-placement="bottom" title="Student's progress"><span class="fas fa-trash-alt"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
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
    @include('layouts.adminLayouts.studentInfoCategoryDisplayModal')
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

        $('#submit').click(function(){
            /* when the submit button in the modal is clicked, submit the form */

            $('#formfield').submit();
        });
    </script>

@endsection