@extends('layouts.app')

@section('content')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" style="background-color: #00aff0">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Students</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Management</li>
                                <li class="breadcrumb-item active" aria-current="page"><strong>Student</strong></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Static Table With Checkboxes</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th>
                            <label class="customcheckbox m-b-20">
                                <input type="checkbox" id="mainCheckbox" />
                                <span class="checkmark"></span>
                            </label>
                        </th>
                        <th scope="col" style="font-size: 12px">SID</th>
                        <th scope="col" style="font-size: 12px">DoA</th>
                        <th scope="col" style="font-size: 12px">First Name</th>
                        <th scope="col" style="font-size: 12px">Middle name</th>
                        <th scope="col" style="font-size: 12px">Last Name</th>
                        <th scope="col" style="font-size: 12px">DoB</th>
                        <th scope="col" style="font-size: 12px">Gender</th>
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
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>


                                <td style="font-size: 12px">{{$student->sid}}</td>
                                <td style="font-size: 12px">{{$student->created_at}}</td>
                                <td style="font-size: 12px">{{$student->first_Name}}</td>
                                <td style="font-size: 12px">{{$student->middle_Name}}</td>
                                <td style="font-size: 12px">{{$student->last_Name}}</td>
                                <td style="font-size: 12px">{{$student->DoB}}</td>
                                <td style="font-size: 12px">{{$student->Gender}}</td>
                                <td style="font-size: 12px">{{$student->Address}}</td>
                                <td style="font-size: 12px">{{$student->Email_Address}}</td>
                                <td style="font-size: 12px">{{$student->Telephone_No_Mob}}</td>
                                <td style="font-size: 12px">{{$student->Telephone_No_Res}}</td>
                                <td style="font-size: 12px">
                                    <a class="waves-effect waves-dark" href=""><i class="mdi mdi-pencil font-20"></i>
                                    <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection