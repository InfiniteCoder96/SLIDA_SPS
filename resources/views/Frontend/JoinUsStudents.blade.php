<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
@include('layouts.FrontendLayouts.head')
<style>

    * {
        box-sizing: border-box;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }



</style>
<body style="background-image: url({{asset('assets/images/frontend_images/con0.JPG')}});height:100%;background-size: cover">


<div class="col-md-12" style="margin-left: 500px;margin-top: 20px">
    <div class="row">
        @if ($errors->any())
            <div id="alertBox" class="alert alert-danger">
                <a class="close" data-dismiss="alert">&times;</a>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        @if (\Session::has('success'))
            <div id="alertBox" class="alert alert-success">
                <a class="close" data-dismiss="alert">&times;</a>

                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
    </div>

</div>
<div class="col-md-12  " style="opacity: 0.9">

    <form enctype="multipart/form-data"  id="regForm" action="{{url('temporary_students')}}" novalidate method="post" class="bg-dark text-white">
        {{csrf_field()}}
        <input type="hidden" value="joinUs" name="source">
        <h3>Online Application to Master of Public Management (MPM)</h3>
        <!-- One "tab" for each step in the form: -->


        <div class="tab">
            <div class="mb-3 bg-danger text-white">
                Applicant Information
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <p><select required name="salutation" class="form-control" >
                            <option selected disabled>- Select salutation -</option>
                            <option value="Rev">Rev</option>
                            <option value="Ms">Ms</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                        </select></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="first_Name" class="form-control" id="validationCustomUsername" value="{{old('first_Name')}}" placeholder="First Name..." aria-describedby="inputGroupPrepend" required></p>

                </div>
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="middle_Name" class="form-control" id="validationCustomUsername" value="{{old('middle_Name')}}" placeholder="Middle Name..." aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="last_Name" class="form-control" id="validationCustomUsername" value="{{old('last_Name')}}" placeholder="Last Name..." aria-describedby="inputGroupPrepend" required></p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="DoB" class="form-control" id="validationCustomUsername" value="{{old('DoB')}}" placeholder="Date of birth..." onfocus="(this.type='date')" aria-describedby="inputGroupPrepend" required></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><select name="Gender" class="form-control" required>
                            <option selected disabled>- Select Gender -</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select></p>
                </div>
                <div class="col-md-4 mb-3">
                    <p><input type="text" name="NIC" class="form-control" id="validationCustomUsername" value="{{old('NIC')}}" placeholder="NIC/Passport..." aria-describedby="inputGroupPrepend" required></p>
                </div>

            </div>

        </div>
        <div class="tab">
            <div class="mb-3 bg-danger text-white">
                Applicant Contact Information
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <textarea class="form-control" name="Address_Res" value="{{old('Address_Res')}}"  id="validationCustomUsername" placeholder="Address..." aria-describedby="inputGroupPrepend" required></textarea>
                </div>



            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p><input type="text" name="Telephone_No_Res" class="form-control" value="{{old('Telephone_No_Res')}}" id="validationCustomUsername" placeholder="Residential Telephone..." aria-describedby="inputGroupPrepend" required></p>

                </div>
                <div class="col-md-6 mb-3">
                    <p><input type="text" name="Telephone_No_Mob" class="form-control" value="{{old('Telephone_No_Mob')}}" id="validationCustomUsername" placeholder="Mobile Telephone..." aria-describedby="inputGroupPrepend" required></p>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <p><input type="email" name="Email_Address" class="form-control" value="{{old('Email_Address')}}" id="validationCustomUsername" placeholder="Email Address..." aria-describedby="inputGroupPrepend" required></p>
                </div>


            </div>

        </div>
        <div class="tab">
            <div class="mb-3 bg-danger text-white">
                Office Details
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p> <select name="sector" class="form-control" required>
                            <option selected disabled>- Select Sector -</option>
                            <option value="Public">Public</option>
                            <option value="Private">Private</option>
                            <option value="Other">Other</option>
                        </select></p>
                </div>
                <div class="col-md-6 mb-3">
                    <p><input type="text" name="curr_designation" class="form-control" value="{{old('curr_designation')}}" id="validationCustomUsername" placeholder="Designation..." aria-describedby="inputGroupPrepend" required></p>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <textarea class="form-control" name="Address_Office" value="{{old('Address_Office')}}"  id="validationCustomUsername" placeholder="Office Address..." aria-describedby="inputGroupPrepend" required></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <p><input type="text" name="Telephone_Office" class="form-control" value="{{old('Telephone_Office')}}" id="validationCustomUsername" placeholder="Office Telephone..." aria-describedby="inputGroupPrepend" required></p>

                </div>


            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p> <select name="service_type" class="form-control" required>
                            <option selected disabled>- Select Service Type -</option>
                            <option value="SLAS">SLAS</option>
                            <option value="SLAcS">SLAcS</option>
                            <option value="SLSS">SLSS</option>
                            <option value="SLEngS">SLEngS</option>
                            <option value="SLICTS">SLICTS</option>
                            <option value="SLPS">SLPS</option>
                            <option value="Other">Other</option>
                        </select></p>
                </div>
            </div>
            <div class="mb-3 bg-danger text-white">
                Career Details
            </div>


            {{--<div class="row">--}}
                {{--<div class="col-md-12 mb-3">--}}
                    {{--<p><textarea class="form-control" name="Known_Illnesses" value="{{old('Known_Illnesses')}}" id="validationCustomUsername" placeholder="Details of present employment and the positions held during last 10 years ( Insert - Name, Address of the Organization, Designation and employment period )" aria-describedby="inputGroupPrepend" required></textarea></p>--}}
                {{--</div>--}}


            {{--</div>--}}
            <div class="row">

                <div class="col-md-6 mb-3">
                    <p><input type="number" name="managerial_years" class="form-control" value="{{old('managerial_years')}}" id="validationCustomUsername" placeholder="No. of years in managerial grades..." aria-describedby="inputGroupPrepend" required></p>
                </div>

            </div>
            <div class="row">

                <div class="col-md-12 mb-3">
                    <p style="color: greenyellow">Details of present employment and the positions held during last 10 years <p style="color: whitesmoke">( Insert - Name, Address of the Organization, Designation and employment period )</p></p>
                </div>

            </div>
            <div class="field_wrapper_01">
                <div class="row">

                    <div class="col-md-4 mb-3">
                        <input type="text" name="org_name[]" class="form-control" value="{{old('org_name[]')}}" id="validationCustomUsername" placeholder="Name of the Organization..." aria-describedby="inputGroupPrepend" required/>
                    </div>
                    <div class="col-md-4 mb-3">
                        <textarea class="form-control" name="org_address[]" value="{{old('org_address[]')}}" id="validationCustomUsername" placeholder="Address of the Organization" aria-describedby="inputGroupPrepend" required></textarea>
                    </div>
                    <a href="javascript:void(0);" class="add_button_01" title="Add field"><img src="{{asset('assets/images/frontend_images/sign_add.png')}}" height="30px" width="30px"/></a>
                    <div class="col-md-4 mb-3">
                        <input type="text" name="designation[]" class="form-control" value="{{old('designation[]')}}" id="validationCustomUsername" placeholder="Designation..." aria-describedby="inputGroupPrepend" required/>
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="number" name="emp_period[]" class="form-control" value="{{old('emp_period[]')}}" id="validationCustomUsername" placeholder="Employment Period..." aria-describedby="inputGroupPrepend" required/>
                    </div>

                </div>

            </div>
        </div>
        <div class="tab">
            <div class="mb-3 bg-danger text-white">
                Qualifications
            </div>

            <div class="field_wrapper_02">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <select name="qualification_type[]" class="form-control" required>
                            <option selected disabled>- Select Qualification Type -</option>
                            <option value="Msc">Msc</option>
                            <option value="Degree">Degree</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Prof_Qualification">Professional Qualification</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <input type="text" name="qualification_name[]" class="form-control" value="{{old('qualification_name[]')}}" id="validationCustomUsername" placeholder="Name of the Qualification..." aria-describedby="inputGroupPrepend" required/>
                    </div>
                    <div class="col-md-3 mb-3">
                        <input type="text" name="institute_name[]" class="form-control" value="{{old('institute_name[]')}}" id="validationCustomUsername" placeholder="Institute..." aria-describedby="inputGroupPrepend" required/>
                    </div>
                    <a href="javascript:void(0);" class="add_button_02" title="Add field"><img src="{{asset('assets/images/frontend_images/sign_add.png')}}" height="30px" width="30px"/></a>

                    <div class="col-md-3 mb-3">
                        <input type="text" name="qualification_year[]" class="form-control" value="{{old('qualification_year[]')}}" id="validationCustomUsername" placeholder="Year of the Qualification..." aria-describedby="inputGroupPrepend" required/>
                    </div>
                    <div class="col-md-3 mb-3">
                        <input type="text" name="spec_area[]" class="form-control" value="{{old('spec_area[]')}}" id="validationCustomUsername" placeholder="Specialized Area..." aria-describedby="inputGroupPrepend" required/>
                    </div>
                    <div class="col-md-3 mb-3">
                        <input type="text" name="qualification_grade[]" class="form-control" value="{{old('qualification_grade[]')}}" id="validationCustomUsername" placeholder="Grade (Class)..." aria-describedby="inputGroupPrepend" required/>
                    </div>

                </div>

            </div>
            <div class="mb-3 bg-danger text-white">
                Other Information
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <p> <select name="class_type" class="form-control" required>
                            <option selected disabled>- Select Class type -</option>
                            <option value="Weekday">Weekday</option>
                            <option value="Weekend">Weekend</option>
                        </select></p>
                </div>


            </div>

            <div class="mb-3 bg-danger text-white">
                Sponsorship Information
            </div>

            <div class="row">
                <div class="col-md-3 mb-3">
                    <p> <select name="sponsored" class="form-control" onchange="SponsorshipCheck(this);" required>
                            <option selected disabled>- Select Sponsored or Not -</option>
                            <option value="Sponsored">Sponsored</option>
                            <option value="Not_Sponsored">Not Sponsored</option>
                        </select></p>
                </div>


            </div>

            <div class="row" id="emp_details" style="display: none;">
                <div class="col-md-12 mb-3"  >

                        <input type="text" class="form-control" name="employer_name" value="{{old('employer_name')}}"   placeholder="Employer Name..." />

                </div>

                <div class="col-md-12 mb-3">

                        <input type="text" class="form-control" name="employer_designation" value="{{old('employer_designation')}}"   placeholder="Employer Designation..." />

                </div>

                <div class="col-md-12 mb-3">
                    <textarea class="form-control" name="employer_address" value="{{old('employer_address')}}"   placeholder="Employer Address..."  ></textarea>


                </div>
            </div>
        </div>


        <div style="overflow:auto;">
            <div style="float:right;">
                <button class="btn btn-md btn-info" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button class="btn btn-md btn-success" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                <a href="{{url('addDemoData')}}"><button type="button" class="btn btn-md btn-warning">ADD DEMO</button> </a>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>

        </div>
    </form>
</div>



<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the crurrent tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
             //If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {

            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

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

    setTimeout(function() {
        $('#alertBox').hide('fade');
    }, 4000);

    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button_02'); //Add button selector
        var wrapper = $('.field_wrapper_02'); //Input field wrapper
        var fieldHTML = '<div class="row">\n' +
            '                    <div class="col-md-3 mb-3">\n' +
            '                        <select name="qualification_type[]" class="form-control" required>\n' +
            '                            <option selected disabled>- Select Qualification Type -</option>\n' +
            '                            <option value="Msc">Msc</option>\n' +
            '                            <option value="Degree">Degree</option>\n' +
            '                            <option value="Diploma">Diploma</option>\n' +
            '                            <option value="Prof_Qualification">Professional Qualification</option>\n' +
            '                            <option value="Other">Other</option>\n' +
            '                        </select>\n' +
            '                    </div>\n' +
            '                    <div class="col-md-3 mb-3">\n' +
            '                        <input type="text" name="qualification_name[]" class="form-control" value="{{old('qualification_name[]')}}" id="validationCustomUsername" placeholder="Name of the Qualification..." aria-describedby="inputGroupPrepend" required/>\n' +
            '                    </div>\n' +
            '                    <div class="col-md-3 mb-3">\n' +
            '                        <input type="text" name="institute_name[]" class="form-control" value="{{old('institute_name[]')}}" id="validationCustomUsername" placeholder="Institute..." aria-describedby="inputGroupPrepend" required/>\n' +
            '                    </div>\n' +
            '                    <a href="javascript:void(0);" class="remove_button_02" title="Add field"><img src="{{asset('assets/images/frontend_images/sign_remove_icon.png')}}" height="30px" width="30px"/></a>\n' +
            '\n' +
            '                    <div class="col-md-3 mb-3">\n' +
            '                        <input type="text" name="qualification_year[]" class="form-control" value="{{old('qualification_year[]')}}" id="validationCustomUsername" placeholder="Year of the Qualification..." aria-describedby="inputGroupPrepend" required/>\n' +
            '                    </div>\n' +
            '                    <div class="col-md-3 mb-3">\n' +
            '                        <input type="text" name="spec_area[]" class="form-control" value="{{old('spec_area[]')}}" id="validationCustomUsername" placeholder="Specialized Area..." aria-describedby="inputGroupPrepend" required/>\n' +
            '                    </div>\n' +
            '                    <div class="col-md-3 mb-3">\n' +
            '                        <input type="text" name="qualification_grade[]" class="form-control" value="{{old('qualification_grade[]')}}" id="validationCustomUsername" placeholder="Grade (Class)..." aria-describedby="inputGroupPrepend" required/>\n' +
            '                    </div>\n' +
            '\n' +
            '                </div>'; //New input field html
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

    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button_01'); //Add button selector
        var wrapper = $('.field_wrapper_01'); //Input field wrapper
        var fieldHTML = '<div class="row">\n' +
            '\n' +
            '                    <div class="col-md-4 mb-3">\n' +
            '                        <input type="text" name="org_name[]" class="form-control" value="{{old('org_name[]')}}" id="validationCustomUsername" placeholder="Name of the Organization..." aria-describedby="inputGroupPrepend" required/>\n' +
            '                    </div>\n' +
            '                    <div class="col-md-4 mb-3">\n' +
            '                        <textarea class="form-control" name="org_address[]" value="{{old('org_address[]')}}" id="validationCustomUsername" placeholder="Address of the Organization" aria-describedby="inputGroupPrepend" required></textarea>\n' +
            '                    </div>\n' +
            '                    <a href="javascript:void(0);" class="remove_button_01" title="Add field"><img src="{{asset('assets/images/frontend_images/sign_remove_icon.png')}}" height="30px" width="30px"/></a>\n' +
            '                    <div class="col-md-4 mb-3">\n' +
            '                        <input type="text" name="designation[]" class="form-control" value="{{old('designation[]')}}" id="validationCustomUsername" placeholder="Designation..." aria-describedby="inputGroupPrepend" required/>\n' +
            '                    </div>\n' +
            '                    <div class="col-md-4 mb-3">\n' +
            '                        <input type="number" name="emp_period[]" class="form-control" value="{{old('emp_period[]')}}" id="validationCustomUsername" placeholder="Employment Period..." aria-describedby="inputGroupPrepend" required/>\n' +
            '                    </div>\n' +
            '\n' +
            '\n' +
            '\n' +
            '                </div>'; //New input field html
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

    (function() {
        var curImgId = 0;

        var numberOfImages = 3; // Change this to the number of background images
        window.setInterval(function() {

            $('body').css('background-image','url('+'{{asset('assets/images/frontend_images/con')}}'+ curImgId + '.jpg');
            curImgId = (curImgId + 1) % numberOfImages;

        }, 3 * 1000);
    })();

    function SponsorshipCheck(that) {
        if (that.value == "Sponsored") {
            document.getElementById("emp_details").style.display = "block";

        } else {
            document.getElementById("emp_details").style.display = "none";
        }
    }
</script>

</body>
</html>
