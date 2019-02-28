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
                <form enctype="multipart/form-data" class="needs-validation" novalidate action="{{url('students')}}" method="post">
                    {{csrf_field()}}
                <div class="card-header bg-dark text-orange">
                    <i class="mdi mdi-account-plus "></i> Enroll New Student
                </div>
                <div class="card-body bg-warning text-dark ">
                    <h5><i class="fas fa-info-circle"></i> Please enter the information in the designated boxes. Click on the SUBMIT button when completed.
                        <Text style="color: red">*</Text>   indicates required field.</h5>
                </div>
                <div class="card-body bg-secondary">


                        <input type="hidden" value="admin" name="source">
                        <div class="card-title text-white bg-success text-lg-center">
                            <i class="mdi mdi-account-card-details"></i> Student Information(applicant)
                        </div>
                        <div class="col-md-12 card-title text-white">
                            <i class="fas fa-user"></i> Personal Information
                        </div>


                        <div class="row">


                                    <div class="col-md-12">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Salutation</span>
                                                    </div>
                                                    <select name="salutation" class="form-control" required>
                                                        <option selected disabled>Select salutation</option>
                                                        <option value="Master">Master</option>
                                                        <option value="Ms">Ms</option>
                                                        <option value="Mr">Mr</option>
                                                    </select>
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >NIC / Postal ID<Text style="color: red">*</Text></span>
                                                    </div>
                                                    <input type="text" name="NIC" class="form-control" id="validationCustomUsername" value="{{old('NIC')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Gender<Text style="color: red">*</Text></span>
                                                    </div>
                                                    <select name="Gender" class="form-control" required>
                                                        <option selected disabled>Select salutation</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
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
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">First Name</span>
                                                    </div>
                                                    <input type="text" name="first_Name" class="form-control" id="validationCustomUsername" value="{{old('first_Name')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Middle Name</span>
                                                    </div>
                                                    <input type="text" name="middle_Name" class="form-control" id="validationCustomUsername" value="{{old('middle_Name')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Last Name</span>
                                                    </div>
                                                    <input type="text" name="last_Name" class="form-control" id="validationCustomUsername" value="{{old('last_Name')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>



                                    <div class="col-md-4">

                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Date of birth</span>
                                                    </div>
                                                    <input type="date" name="DoB" class="form-control" id="validationCustomUsername" value="{{old('DoB')}}" placeholder="Username" aria-describedby="inputGroupPrepend" required>
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
                            <div class="col-md-3 mb-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Address<Text style="color: red">*</Text></span>
                                    </div>
                                    <textarea class="form-control" name="Address" value="{{old('Address')}}"  id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></textarea>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Telephone(Res)<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="Telephone_No_Res" class="form-control" value="{{old('Telephone_No_Res')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Telephone(Mob)<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="text" name="Telephone_No_Mob" class="form-control" value="{{old('Telephone_No_Mob')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Email<Text style="color: red">*</Text></span>
                                    </div>
                                    <input type="email" name="Email_Address" class="form-control" value="{{old('Email_Address')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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

                                    <textarea class="form-control" name="Address_Office" value="{{old('Address_Office')}}"  id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required></textarea>



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
                                    <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                    <select name="role" class="form-control" required>
                                        <option selected disabled>- Select Sector -</option>
                                        <option value="Public">Public</option>
                                        <option value="Private">Private</option>
                                        <option value="Other">Other</option>
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
                                    <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>

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
                                    <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>


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
                                    <input type="number" name="first_name" class="form-control" value="{{old('first_name')}}" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>


                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-title text-white bg-success text-lg-center">
                            <i class="mdi mdi-account-card-details"></i> Qualifications
                        </div>
                        <div class="field_wrapper_02">
                        <div class="form-row">
                                    <div class="col-md-3 mb-3">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Qualification Type</span>
                                            </div>
                                            <select name="qualification_type[]" class="form-control" required>
                                                <option selected disabled>- Select Qualification Type -</option>
                                                <option value="Msc">Msc</option>
                                                <option value="Degree">Degree</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="Prof_Qualification">Professional Qualification</option>
                                                <option value="Other">Other</option>
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
                                            <input type="text" name="qualification_name[]" class="form-control" value="{{old('qualification_name[]')}}" id="validationCustomUsername" placeholder="Name of the Qualification..." aria-describedby="inputGroupPrepend" required/>

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
                                            <input type="text" name="institute_name[]" class="form-control" value="{{old('institute_name[]')}}" id="validationCustomUsername" placeholder="Institute..." aria-describedby="inputGroupPrepend" required/>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>

                                    </div>
                                    <a href="javascript:void(0);" class="add_button_02" title="Add field"><img src="{{asset('assets/images/frontend_images/sign_add.png')}}" height="30px" width="30px"/></a>

                                    <div class="col-md-3 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Year</span>
                                            </div>
                                            <input type="text" name="qualification_year[]" class="form-control" value="{{old('qualification_year[]')}}" id="validationCustomUsername" placeholder="Year of the Qualification..." aria-describedby="inputGroupPrepend" required/>

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
                                            <input type="text" name="spec_area[]" class="form-control" value="{{old('spec_area[]')}}" id="validationCustomUsername" placeholder="Specialized Area..." aria-describedby="inputGroupPrepend" required/>

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
                                            <input type="text" name="qualification_grade[]" class="form-control" value="{{old('qualification_grade[]')}}" id="validationCustomUsername" placeholder="Grade (Class)..." aria-describedby="inputGroupPrepend" required/>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>

                                    </div>

                                </div>



                        </div>

                        <div class="card-title text-white bg-success text-lg-center">
                            <i class="mdi mdi-paperclip"></i> Career Information
                        </div>
                        <div class="field_wrapper_01">
                            <div class="form-row">

                                    <div class="col-md-5 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Organization Name</span>
                                            </div>
                                            <input type="text" name="org_name[]" class="form-control" value="{{old('org_name[]')}}" id="validationCustomUsername" placeholder="Name of the Organization..." aria-describedby="inputGroupPrepend" required/>

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
                                            <textarea class="form-control" name="org_address[]" value="{{old('org_address[]')}}" id="validationCustomUsername" placeholder="Address of the Organization" aria-describedby="inputGroupPrepend" required></textarea>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>

                                    </div>
                                    <a href="javascript:void(0);" class="add_button_01" title="Add field"><img src="{{asset('assets/images/frontend_images/sign_add.png')}}" height="30px" width="30px"/></a>
                            </div>
                            <div class="form-row">
                                <div class="col-md-5 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Designation</span>
                                            </div>
                                            <input type="text" name="designation[]" class="form-control" value="{{old('designation[]')}}" id="validationCustomUsername" placeholder="Designation..." aria-describedby="inputGroupPrepend" required/>

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
                                            <input type="number" name="emp_period[]" class="form-control" value="{{old('emp_period[]')}}" id="validationCustomUsername" placeholder="Employment Period..." aria-describedby="inputGroupPrepend" required/>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
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

                $(document).ready(function(){
                    var maxField = 10; //Input fields increment limitation
                    var addButton = $('.add_button_01'); //Add button selector
                    var wrapper = $('.field_wrapper_01'); //Input field wrapper
                    var fieldHTML = '<div class="field_wrapper_01"><div class="row">\n' +
                        '\n' +
                        '                                    <div class="col-md-5 mb-3">\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Organization Name</span>\n' +
                        '                                            </div>\n' +
                        '                                            <input type="text" name="org_name[]" class="form-control" value="{{old('org_name[]')}}" id="validationCustomUsername" placeholder="Name of the Organization..." aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                            <div class="invalid-feedback">\n' +
                        '                                                Please choose a username.\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '                                    <div class="col-md-6 mb-3">\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Organization Address</span>\n' +
                        '                                            </div>\n' +
                        '                                            <textarea class="form-control" name="org_address[]" value="{{old('org_address[]')}}" id="validationCustomUsername" placeholder="Address of the Organization" aria-describedby="inputGroupPrepend" required></textarea>\n' +
                        '\n' +
                        '                                            <div class="invalid-feedback">\n' +
                        '                                                Please choose a username.\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '                                    <a href="javascript:void(0);" class="remove_button_01" title="Add field"><img src="{{asset('assets/images/frontend_images/sign_remove_icon.png')}}" height="30px" width="30px"/></a>\n' +
                        '                                <div class="col-md-5 mb-3">\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Designation</span>\n' +
                        '                                            </div>\n' +
                        '                                            <input type="text" name="designation[]" class="form-control" value="{{old('designation[]')}}" id="validationCustomUsername" placeholder="Designation..." aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                            <div class="invalid-feedback">\n' +
                        '                                                Please choose a username.\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '                                    <div class="col-md-6 mb-3">\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <span class="input-group-text bg-dark text-light"  id="inputGroupPrepend">Employment Period</span>\n' +
                        '                                            </div>\n' +
                        '                                            <input type="number" name="emp_period[]" class="form-control" value="{{old('emp_period[]')}}" id="validationCustomUsername" placeholder="Employment Period..." aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                            <div class="invalid-feedback">\n' +
                        '                                                Please choose a username.\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '\n' +
                        '                                </div></div>'; //New input field html
                    var x = 1; //Initial field counter is 1

                    //Once add button is clicked
                    $(addButton).click(function(){
                        //Check maximum number of input fields
                        if(x < maxField){
                            x++; //Increment field counter
                            $(wrapper).append(fieldHTML); //Add field html
                        }
                    });

                    //Once remove button is clicked
                    $(wrapper).on('click', '.remove_button_01', function(e){
                        e.preventDefault();
                        $(this).parent('div').remove(); //Remove field html
                        x--; //Decrement field counter
                    });
                });

                $(document).ready(function(){
                    var maxField = 10; //Input fields increment limitation
                    var addButton = $('.add_button_02'); //Add button selector
                    var wrapper = $('.field_wrapper_02'); //Input field wrapper
                    var fieldHTML = '<div class="field_wrapper_02">\n' +
                        '                        <div class="form-row">\n' +
                        '                                    <div class="col-md-3 mb-3">\n' +
                        '\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Qualification Type</span>\n' +
                        '                                            </div>\n' +
                        '                                            <select name="qualification_type[]" class="form-control" required>\n' +
                        '                                                <option selected disabled>- Select Qualification Type -</option>\n' +
                        '                                                <option value="Msc">Msc</option>\n' +
                        '                                                <option value="Degree">Degree</option>\n' +
                        '                                                <option value="Diploma">Diploma</option>\n' +
                        '                                                <option value="Prof_Qualification">Professional Qualification</option>\n' +
                        '                                                <option value="Other">Other</option>\n' +
                        '                                            </select>\n' +
                        '\n' +
                        '                                            <div class="invalid-feedback">\n' +
                        '                                                Please choose a username.\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '                                    <div class="col-md-4 mb-3">\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Qualification Name</span>\n' +
                        '                                            </div>\n' +
                        '                                            <input type="text" name="qualification_name[]" class="form-control" value="{{old('qualification_name[]')}}" id="validationCustomUsername" placeholder="Name of the Qualification..." aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                            <div class="invalid-feedback">\n' +
                        '                                                Please choose a username.\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '                                    <div class="col-md-4 mb-3">\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Institute Name</span>\n' +
                        '                                            </div>\n' +
                        '                                            <input type="text" name="institute_name[]" class="form-control" value="{{old('institute_name[]')}}" id="validationCustomUsername" placeholder="Institute..." aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                            <div class="invalid-feedback">\n' +
                        '                                                Please choose a username.\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '                                    <a href="javascript:void(0);" class="remove_button_02" title="Add field"><img src="{{asset('assets/images/frontend_images/sign_remove_icon.png')}}" height="30px" width="30px"/></a>\n' +
                        '\n' +
                        '                                    <div class="col-md-3 mb-3">\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Year</span>\n' +
                        '                                            </div>\n' +
                        '                                            <input type="text" name="qualification_year[]" class="form-control" value="{{old('qualification_year[]')}}" id="validationCustomUsername" placeholder="Year of the Qualification..." aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                            <div class="invalid-feedback">\n' +
                        '                                                Please choose a username.\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '                                    <div class="col-md-4 mb-3">\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Specialized Area</span>\n' +
                        '                                            </div>\n' +
                        '                                            <input type="text" name="spec_area[]" class="form-control" value="{{old('spec_area[]')}}" id="validationCustomUsername" placeholder="Specialized Area..." aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                            <div class="invalid-feedback">\n' +
                        '                                                Please choose a username.\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '                                    <div class="col-md-4 mb-3">\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Grade/Class</span>\n' +
                        '                                            </div>\n' +
                        '                                            <input type="text" name="qualification_grade[]" class="form-control" value="{{old('qualification_grade[]')}}" id="validationCustomUsername" placeholder="Grade (Class)..." aria-describedby="inputGroupPrepend" required/>\n' +
                        '\n' +
                        '                                            <div class="invalid-feedback">\n' +
                        '                                                Please choose a username.\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '\n' +
                        '                                </div>\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '                        </div>'; //New input field html
                    var x = 1; //Initial field counter is 1

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
                });

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