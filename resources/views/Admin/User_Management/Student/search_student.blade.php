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
        <div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 70%;">

        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
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
            @if (\Session::has('unsuccess'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('unsuccess') }}</p>
                </div><br />
            @endif
            <div class="card text-left">


                <div class="row">
                    <div class="col-md-6 card bg-dark">
                        <div class="card-header bg-dark text-orange">
                            <i class="mdi mdi-search-web "></i> Search Student
                        </div>

                        <div class="card-body">
                            <form action="{{url('/search_student')}}" method="get">
                                {{csrf_field()}}
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">Search by</span>
                                            </div>
                                            <select name="search_by" class="form-control" required>
                                                <option selected disabled>Select  </option>
                                                <option value="fname">First Name</option>
                                                <option value="mname">Middle Name</option>
                                                <option value="lname">Last Name</option>
                                                <option value="sid">SID</option>
                                                <option value="age">Age</option>
                                                <option value="gender">Gender</option>
                                                <option value="pfname">Parent First Name</option>
                                                <option value="pmname">Parent Middle Name</option>
                                                <option value="plname">Parent Last Name</option>
                                                <option value="poccupation">Parent Occupation</option>
                                                <option value="pnic">Parent NIC</option>
                                                <option value="workSector">Parent Working Sector</option>
                                            </select>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">Value</span>
                                            </div>
                                            <input type="text" name="query" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12 mb-3 card-footer text-white bg-dark">
                                        <div class="form-group">
                                            <div class="form-check">

                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block">SEARCH</button>
                                        <button class="btn btn-warning btn-block" type="reset">RESET</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 card bg-dark ">
                        <div class="card-header bg-dark text-orange">
                            <i class="mdi mdi-view-list "></i> View Student

                        </div>

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table">
                                    @if ($queryunsuccess)
                                        <div class="bg-orange text-white">
                                            <ul>

                                                    <li>{{ $queryunsuccess }}</li>

                                            </ul>
                                        </div><br />
                                    @endif
                                        @if ($querysuccess)
                                            <div class="bg-cyan text-white">
                                                <ul>

                                                    <li>{{ $querysuccess }}</li>

                                                </ul>
                                            </div><br />
                                        @endif
                                    <thead class="thead-dark">
                                    <tr>

                                        <th scope="col" style="font-size: 12px"></th>
                                        <th scope="col" style="font-size: 12px">SID</th>
                                        <th scope="col" style="font-size: 12px">First Name</th>
                                        <th scope="col" style="font-size: 12px">Middle name</th>
                                        <th scope="col" style="font-size: 12px">Last Name</th>
                                        <th scope="col" style="font-size: 12px">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody class="customtable">
                                    @if($students != null)
                                        @foreach($students as $student)

                                            <tr>


                                                <td style="font-size: 12px;color: #d39e00">
                                                    <a > <img src="{{asset('/storage/StudentImages/small/'.$student['image'])}}" class="rounded-circle" style="width:50px;height: 50px;border: 2px solid black" ></a>
                                                </td>

                                                <td style="font-size: 12px;color: #d39e00">{{$student->sid}}</td>
                                                <td style="font-size: 12px;color: #d39e00">{{$student->first_Name}}</td>
                                                <td style="font-size: 12px;color: #d39e00">{{$student->middle_Name}}</td>
                                                <td style="font-size: 12px;color: #d39e00">{{$student->last_Name}}</td>

                                                <td style="font-size: 12px" >
                                                    <div  id="sid"> <a  class="waves-effect waves-dark" href="{{action('StudentController@edit', $student['sid'])}}"><button class="btn btn-info btn-xs" type="button">Edit</button></a></div>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <form action="{{action('StudentController@destroy', $student['sid'])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                                                    </form>

                                                </td>
                                            </tr>

                                        @endforeach

                                    @elseif($parents != null)
                                        @foreach($parents as $parent)

                                            <tr>


                                                <td style="font-size: 12px">
                                                    <a data-toggle="modal" data-target="#loginModal"> <img src="{{asset('/storage/StudentImages/small/'.$parent->student->image)}}" class="rounded-circle" style="width:50px;height: 50px;border: 2px solid black" ></a>
                                                </td>
                                                <td style="font-size: 12px">{{$parent->student->sid}}</td>
                                                <td style="font-size: 12px">{{$parent->student->first_Name}}</td>
                                                <td style="font-size: 12px">{{$parent->student->middle_Name}}</td>
                                                <td style="font-size: 12px">{{$parent->student->last_Name}}</td>
                                                <td style="font-size: 12px">{{$parent->student->DoB}}</td>
                                                <td style="font-size: 12px">{{$parent->student->Gender}}</td>
                                                <td style="font-size: 12px">{{$parent->student->Address}}</td>
                                                <td style="font-size: 12px">{{$parent->student->Email_Address}}</td>
                                                <td style="font-size: 12px">{{$parent->student->Telephone_No_Mob}}</td>
                                                <td style="font-size: 12px">{{$parent->student->Telephone_No_Res}}</td>
                                                <td style="font-size: 12px" >
                                                    <div  id="sid"> <a  class="waves-effect waves-dark" href="{{action('StudentController@edit', $student['sid'])}}"><button class="btn btn-info btn-xs" type="button">Edit</button></a></div>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <form action="{{action('StudentController@destroy', $student['sid'])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                                                    </form>
                                                    <a class="waves-effect waves-dark" href=""><i class="mdi mdi-delete font-20"></i>
                                                </td>
                                            </tr>



                                        @endforeach

                                    @else
                                        <p>Nothing found</p>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>






            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>

            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    `@include('layouts.adminLayouts.footer')

@endsection