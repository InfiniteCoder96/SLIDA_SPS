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
                <div class="card-body">

                    <form  class="needs-validation" novalidate action="{{url('subjects')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" value="admin" name="source">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-row">
                                    <div class="col-md-2 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Subject ID</span>
                                            </div>
                                            <input class="form-control" type="text" name="sub_id">
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                    <div class="col-md-5 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Subject Name</span>
                                            </div>
                                            <input class="form-control" type="text" name="sub_name">
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>

                                    </div>
                                    <div class="col-md-3 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Semester</span>
                                            </div>
                                            <select name="sub_sem" class="form-control" required>
                                                <option selected disabled>- Select Semester -</option>
                                                <option  value="Semester_1">Semester 1</option>
                                                <option  value="Semester_2">Semester 2</option>
                                                <option  value="Semester_3">Semester 3</option>
                                                <option  value="Semester_4">Semester 4</option>
                                                <option  value="Semester_5">Semester 5</option>
                                                <option  value="Semester_6">Semester 6</option>

                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Credits</span>
                                            </div>
                                            <input class="form-control" type="number" name="sub_credits" min="1" max="5">
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
                        <h5 class="card-title m-b-0">Currently Offering Subjects    <span class="label label-info" style="font-size: 20px">{{count($subjects)}}</span></h5>
                    </div>
                    <div class="table-responsive">
                        <form action="{{url('update_status')}}" method="post">
                            {{csrf_field()}}
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>


                                    <th scope="col" style="font-size: 12px">Subject ID</th>
                                    <th scope="col" style="font-size: 12px">Subject Name</th>
                                    <th scope="col" style="font-size: 12px">Offering Semester</th>
                                    <th scope="col" style="font-size: 12px">Credits</th>
                                    <th scope="col" style="font-size: 12px">Action</th>


                                </tr>
                                </thead>
                                <tbody class="customtable">

                                @foreach($subjects as $subject)

                                    <tr>

                                        <td style="font-size: 12px">{{$subject->sub_id}}</td>
                                        <td style="font-size: 12px">{{$subject->sub_name}}</td>
                                        <td style="font-size: 12px">{{$subject->sub_sem}}</td>
                                        <td style="font-size: 12px">{{$subject->sub_credits}}</td>



                                        <td style="font-size: 12px">
                                            <input name="ref_num" type="hidden" value="{{$subject->sub_id}}">
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#updateSubjectModal"

                                                    data-id="{{$subject['sub_id']}}"
                                                    data-name="{{$subject['sub_name']}}"
                                                    data-sem="{{$subject['sub_sem']}}"
                                                    data-credits="{{$subject['sub_credits']}}"

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