@extends('layouts.app')

@section('content')
    <style>
        .blinking{
            animation:blinkingText 0.9s infinite;
        }
        @keyframes blinkingText{
            0%{     color: greenyellow;    }
            49%{    color: greenyellow; }
            50%{    color: black; }
            99%{    color:black;  }
            100%{   color: black;    }
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
                    <h4 class="page-title">Welcome to Family <i class="mdi mdi-face"></i></h4>
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

            <div class="card text-left">
                <div class="card-header bg-dark text-orange " style="font-size: 20px">
                    Student ID : <span class="blinking">{{$student->ref_num}}</span>
                </div>
                <div class="card-body bg-warning text-dark ">
                    <h5><i class="fas fa-info-circle"></i> Please enter the information in the designated boxes. Click on the SUBMIT button when completed.
                        <Text style="color: red">*</Text>   indicates required field.</h5>
                </div>
                <div class="card-body bg-secondary">

                    <form enctype="multipart/form-data" class="needs-validation" novalidate action="{{action('TemporaryStudentController@updateSelectedStudents')}}" method="post" id="formfield">
                        {{csrf_field()}}
                        <input type="hidden" value="admin" name="source">
                        <div class="card-title text-orange text-lg-center bg-dark ">
                            <i class="mdi mdi-account-card-details"></i> Student Information(applicant)
                        </div>
                        <div class="col-md-12 card-title text-white">
                            <i class="fas fa-user"></i> Personal Information
                        </div>


                        <div class="row">




                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Salutation</span>
                                            </div>
                                            <select name="salutation" class="form-control" id="salutation" required>
                                                <option selected disabled>Select salutation</option>
                                                @if($student['salutation'] == 'Rev')
                                                    <option selected value="Rev">Rev</option>
                                                @elseif($student['salutation'] == 'Mr')
                                                    <option selected value="Mr">Mr</option>
                                                @elseif($student['salutation'] == 'Ms')
                                                    <option selected value="Ms">Ms</option>
                                                @elseif($student['salutation'] == 'Mrs')
                                                    <option selected value="Mrs">Mrs</option>
                                                @endif



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
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">First Name</span>
                                            </div>
                                            <input type="text" name="first_Name" class="form-control" id="fname" value="{{$student['first_Name']}}" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">

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
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Middle Name</span>
                                            </div>
                                            <input type="text" name="middle_Name" class="form-control" id="mname" value="{{$student['middle_Name']}}" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Last Name</span>
                                            </div>
                                            <input type="text" name="last_Name" class="form-control" id="lname" value="{{$student['last_Name']}}" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div></div>
                                </div>


                            </div>



                            <div class="col-md-6">


                                <div class="form-row ">
                                    <div class="col-md-12 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >NIC / Postal ID<Text style="color: red">*</Text></span>
                                            </div>
                                            <input type="text" name="NIC" class="form-control" id="nic" value="{{$student['NIC']}}" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div></div>
                                </div>



                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Gender<Text style="color: red">*</Text></span>
                                            </div>
                                            <select name="Gender" class="form-control" readonly id="gender">
                                                <option selected disabled>Select Gender</option>
                                                @if($student['Gender'] == 'Male')
                                                    <option selected value="Male">Male</option>
                                                @elseif($student['Gender'] == 'Female')
                                                    <option selected value="Female">Female</option>
                                                @endif
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
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Date of birth</span>
                                            </div>
                                            <input type="date" name="DoB" class="form-control" id="validationCustomUsername" value="{{$student['DoB']}}" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div></div>
                                </div>

                            </div>





                        </div>







                        <div class="card-title  text-white">
                            <i class="fas fa-phone"></i> Contact Information
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Address<Text style="color: red">*</Text></span>
                                    </div>
                                    <textarea class="form-control" name="Address_Res"  id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" readonly>{{$student['Address_Res']}}</textarea>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Email<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="email" name="Email_Address" class="form-control" value="{{$student['Email_Address']}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Telephone(Res)<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="Telephone_No_Res" class="form-control" value="{{$student['Telephone_No_Res']}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Telephone(Mob)<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="Telephone_No_Mob" class="form-control" value="{{$student['Telephone_No_Mob']}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="card-title  text-white">
                            <i class="fas fa-info-circle"></i> Office Information
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Office Address</span>
                                    </div>

                                    <textarea class="form-control" name="Address_Office" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" readonly>{{$student['Address_Office']}}</textarea>



                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Telephone (Office)</span>
                                    </div>
                                    <input type="text" name="first_name" class="form-control" value="{{$student['Telephone_Office']}}" id="tpoffice" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">
                                    <input type="hidden" name="Telephone_Office" class="form-control" value="{{$student['Telephone_Office']}}" id="tpoffice" placeholder="Username" aria-describedby="inputGroupPrepend" >
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Sector</span>
                                    </div>
                                    <select name="sector" class="form-control" readonly>
                                        <option selected disabled>- Select Sector -</option>
                                        @if($student['sector'] == 'Public')
                                            <option selected value="Public">Public</option>
                                        @elseif($student['sector'] == 'Private')
                                            <option selected value="Private">Private</option>
                                        @elseif($student['sector'] == 'Other')
                                            <option selected value="Other">Other</option>
                                        @endif

                                    </select>



                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Current Designation</span>
                                    </div>
                                    <input type="text" name="curr_designation" class="form-control" value="{{$student['curr_designation']}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" readonly>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Service Type</span>
                                    </div>
                                    <input type="text" name="service_type" class="form-control" value="{{$student['first_Name']}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" readonly>


                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Managerial Years</span>
                                    </div>
                                    <input type="number" name="managerial_years" class="form-control" value="{{$student['managerial_years']}}"  id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" readonly>


                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-title text-orange text-center bg-dark">
                            <i class="mdi mdi-account-card-details"></i> Qualifications
                        </div>
                        @foreach($student->StudentQualifications as $student_qualification)

                            <div class="form-row">
                                <div class="col-md-3 mb-3">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Qualification Type</span>
                                        </div>
                                        <select name="qualification_type[]" class="form-control" readonly>
                                            <option selected disabled>- Select Qualification Type -</option>
                                            @if($student_qualification['qualification_type'] == 'Msc')
                                                <option selected value="Msc">Msc</option>
                                            @elseif($student_qualification['qualification_type'] == 'Degree')
                                                <option selected value="Degree">Degree</option>
                                            @elseif($student_qualification['qualification_type'] == 'Diploma')
                                                <option selected value="Diploma">Diploma</option>
                                            @elseif($student_qualification['qualification_type'] == 'Prof_Qualification')
                                                <option selected value="Prof_Qualification">v</option>
                                            @elseif($student_qualification['qualification_type'] == 'Other')
                                                <option selected value="Other">Other</option>
                                            @endif
                                        </select>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Qualification Name</span>
                                        </div>
                                        <input type="text" name="qualification_name[]" class="form-control" value="{{$student_qualification['qualification_name']}}" id="validationCustomUsername" placeholder="Name of the Qualification..." aria-describedby="inputGroupPrepend" readonly/>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Institute Name</span>
                                        </div>
                                        <input type="text" name="institute_name[]" class="form-control" value="{{$student_qualification['institute']}}" id="validationCustomUsername" placeholder="Institute..." aria-describedby="inputGroupPrepend" readonly/>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Year</span>
                                        </div>
                                        <input type="text" name="qualification_year[]" class="form-control" value="{{$student_qualification['year']}}" id="validationCustomUsername" placeholder="Year of the Qualification..." aria-describedby="inputGroupPrepend" readonly/>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Specialized Area</span>
                                        </div>
                                        <input type="text" name="spec_area[]" class="form-control" value="{{$student_qualification['specialized_area']}}" id="validationCustomUsername" placeholder="Specialized Area..." aria-describedby="inputGroupPrepend" readonly/>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Grade/Class</span>
                                        </div>
                                        <input type="text" name="qualification_grade[]" class="form-control" value="{{$student_qualification['grade']}}" id="validationCustomUsername" placeholder="Grade (Class)..." aria-describedby="inputGroupPrepend" readonly/>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>

                                </div>

                            </div>


                        @endforeach


                        <div class="card-title text-orange text-center bg-dark">
                            <i class="mdi mdi-paperclip"></i> Career Information
                        </div>
                        @foreach($student->StudentCareerDetails as $studentCareerDetail)

                            <div class="form-row">

                                <div class="col-md-5 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Organization Name</span>
                                        </div>
                                        <input type="text" name="org_name[]" class="form-control" value="{{$studentCareerDetail['organization_name']}}" id="org_name" placeholder="Name of the Organization..." aria-describedby="inputGroupPrepend" readonly/>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Organization Address</span>
                                        </div>
                                        <textarea class="form-control" name="org_address[]" id="validationCustomUsername" placeholder="Address of the Organization" aria-describedby="inputGroupPrepend" readonly>{{$studentCareerDetail['organization_address']}}</textarea>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-5 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Designation</span>
                                        </div>
                                        <input type="text" name="designation[]" class="form-control" value="{{$studentCareerDetail['designation']}}" id="validationCustomUsername" placeholder="Designation..." aria-describedby="inputGroupPrepend" readonly/>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light"  id="inputGroupPrepend">Employment Period</span>
                                        </div>
                                        <input type="number" name="emp_period[]" class="form-control" value="{{$studentCareerDetail['period']}}" id="validationCustomUsername" placeholder="Employment Period..." aria-describedby="inputGroupPrepend" readonly/>

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>

                                </div>

                            </div>







                        @endforeach

                        @if($student['sponsored'] == 'Sponsored')
                            <div class="card-title text-orange text-center bg-dark">
                                <i class="mdi mdi-account-card-details"></i> Sponsership Details
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-2">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Employer Name</span>
                                        </div>
                                        <input type="text" name="employer_name" class="form-control" value="{{$student['employer_name']}}" id="tpoffice" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-2">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Employer Designation</span>
                                        </div>
                                        <input type="text" name="employer_designation" class="form-control" value="{{$student['employer_designation']}}" id="tpoffice" placeholder="Username" aria-describedby="inputGroupPrepend" readonly="readonly">

                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Employer Address</span>
                                        </div>

                                        <textarea class="form-control" name="employer_address" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" readonly>{{$student['employer_address']}}</textarea>



                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>



                            </div>
                        @else
                            <input type="hidden" name="sponsored" class="form-control" value="{{$student['sponsored']}}" placeholder="Username" aria-describedby="inputGroupPrepend" >
                            <input type="hidden" name="employer_name" class="form-control" value="{{$student['employer_name']}}" placeholder="Username" aria-describedby="inputGroupPrepend" >
                            <input type="hidden" name="employer_designation" class="form-control" value="{{$student['employer_designation']}}" placeholder="Username" aria-describedby="inputGroupPrepend" >
                            <input type="hidden" name="employer_address" class="form-control" value="{{$student['employer_address']}}" placeholder="Username" aria-describedby="inputGroupPrepend" >

                        @endif



                    </form>
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

                $('#browse_image').on('click', function(e){
                    $('#image').click();
                })
                $('#image').on('change', function(e){
                    var fileInput = this;
                    if(fileInput.files[0]){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#img').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(fileInput.files[0]);
                    }
                })

                $('#editable_btn').on('click', function(e){
                    $('#editable_btn').attr('readonly', false);
                    $('#org_name').attr('readonly', false);
                    $('#fname').attr('readonly', false);
                    $('#mname').attr('readonly', false);
                    $('#lname').attr('readonly', false);
                    $('#nic').attr('readonly', false);
                    $('#gender').attr('readonly', false);
                    $('#tpoffice').attr('readonly', false);
                })

                function change_name() // no ';' here
                {
                    var elem = document.getElementById("editable_btn");

                    if (elem.value === "Make Editable"){
                        elem.value = "Close Editable";
                    }
                    else if(elem.value === "Close Editable"){
                        elem.value = "Make Editable";
                    }

                }


                $(document).ready(function(){

                    var maxField = 10; //Input fields increment limitation
                    var addButton = $('.add_button_02'); //Add button selector
                    var wrapper = $('.field_wrapper_02'); //Input field wrapper

                    var x = 1; //Initial field counter is 1

                    var fieldHTML = '<div class="row">\n' +
                        '                                <div class="col-md-4 mb-3">\n' +
                        '                                    <div class="input-group">\n' +
                        '                                        <div class="input-group-prepend">\n' +
                        '                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Payment Type</span>\n' +
                        '                                        </div>\n' +
                        '                                        <select name="payment[]" class="form-control" required>\n' +
                        '                                            <option selected disabled>- Select Payment Type -</option>\n' +
                        '                                            <option value="Application Fee">Application Fee</option>\n' +
                        '                                            <option value="Admission Fee">Admission Fee</option>\n' +
                        '                                            <option value="Course Fee">Course Fee</option>\n' +
                        '                                        </select>\n' +
                        '                                        <div class="invalid-feedback">\n' +
                        '                                            Please choose a username.\n' +
                        '                                        </div>\n' +
                        '                                    </div>\n' +
                        '\n' +
                        '                                </div>\n' +
                        '                                <div class="col-md-4 mb-3">\n' +
                        '                                    <div class="input-group">\n' +
                        '                                        <div class="input-group-prepend">\n' +
                        '                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Payment Amount</span>\n' +
                        '                                        </div>\n' +
                        '                                        <input type="text" name="payment_amount[]" class="form-control" id="validationCustomUsername" placeholder="Enter amount" aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                        <div class="invalid-feedback">\n' +
                        '                                            Please choose a username.\n' +
                        '                                        </div>\n' +
                        '                                    </div>\n' +
                        '                                </div>\n' +
                        '                                <div class="col-md-3 mb-3">\n' +
                        '                                    <div class="input-group">\n' +
                        '                                        <div class="input-group-prepend">\n' +
                        '                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Receipt No</span>\n' +
                        '                                        </div>\n' +
                        '                                        <input type="text" name="receipt_no[]" class="form-control" id="validationCustomUsername" placeholder="Enter Receipt No" aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                        <div class="invalid-feedback">\n' +
                        '                                            Please choose a username.\n' +
                        '                                        </div>\n' +
                        '                                    </div>\n' +
                        '                                </div>\n' +
                        '                                <a href="javascript:void(0);" class="remove_button_02" title="Add field"><img src="{{asset('assets/images/frontend_images/sign_remove_icon.png')}}" height="30px" width="30px"/></a>\n' +
                        '                                \n' +
                        '                                <div class="col-md-4 mb-3 cheque_no_field">\n' +
                        '                                    <div class="input-group">\n' +
                        '                                        <div class="input-group-prepend">\n' +
                        '                                            <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Cheque No</span>\n' +
                        '                                        </div>\n' +
                        '                                        <input type="text" name="cheque_no[]" class="form-control" id="validationCustomUsername" placeholder="Enter Cheque No" aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                        <div class="invalid-feedback">\n' +
                        '                                            Please choose a username.\n' +
                        '                                        </div>\n' +
                        '                                    </div>\n' +
                        '                                </div>\n' +
                        '\n' +
                        '\n' +
                        '                            </div>'; //New input field html


                    //Once add button is clicked
                    $(addButton).click(function(){
                        //Check maximum number of input fields
                        if(x < maxField){
                            x++; //Increment field counter
                            $(wrapper).append(fieldHTML); //Add field html
                        }
                    });

                    //Once remove button is clicked
                    $(wrapper).on('click', '.remove_button_02', function(e){
                        e.preventDefault();
                        $(this).parent('div').remove(); //Remove field html
                        x--; //Decrement field counter
                    });

                    for(var i = 0; i <= maxField; i++) {
                        $(wrapper).attr('id', function (i) {
                            document.getElementById("cheque_no").id = "cheque_no" + i;
                        });
                    }
                });
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