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
            <div class="card bg-white text-black-50">
                <div class="card-body wizard-content">
                    <h4 class="card-title">Add A New Student</h4>
                    <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="#" method="get" class="m-t-40">
                        <div>
                            <h3>Personal Details</h3>
                            <section>
                                <label for="userName">Full Name *</label>
                                <input id="userName" name="userName" type="text" class="required form-control">
                                <label for="password">Data of Birth *</label>
                                <input id="password" name="password" type="date" class="required form-control">
                                <label for="confirm">Gender *</label>
                                <input id="confirm" name="confirm" type="text" class="required form-control">
                                <label for="confirm">Address *</label>
                                <input id="confirm" name="confirm" type="text" class="required form-control">

                                <p>(*) Mandatory</p>
                            </section>
                            <h3>Contact Details</h3>
                            <section>
                                <label for="name">First name *</label>
                                <input id="name" name="name" type="text" class="required form-control">
                                <label for="surname">Last name *</label>
                                <input id="surname" name="surname" type="text" class="required form-control">
                                <label for="email">Email *</label>
                                <input id="email" name="email" type="text" class="required email form-control">
                                <label for="address">Address</label>
                                <input id="address" name="address" type="text" class=" form-control">
                                <p>(*) Mandatory</p>
                            </section>
                            <h3>Parents/Guardian Details</h3>
                            <section>
                                <ul>
                                    <li>Foo</li>
                                    <li>Bar</li>
                                    <li>Foobar</li>
                                </ul>
                            </section>
                            <h3>Finish</h3>
                            <section>
                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Student Details</h5>
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