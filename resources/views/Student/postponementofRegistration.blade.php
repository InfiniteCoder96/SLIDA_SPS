<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{asset('css/backend_css/style.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nova+Mono" rel="stylesheet">

    <link href="{{asset('css/backend_css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/student_app_css/studentProfileLogin.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-color: darkgrey">
<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card bg-dark" style="margin-top: 50px">
                <div class="card-header bg-orange">
                    <b><h1>SLIDA Online Forms</h1></b>
                    <hr style="background-color: black">
                </div>

            </div>
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
            <div class="card bg-dark">
                <div class="card-header">
                    <b><h5 style="color: whitesmoke">APPLICATION FOR A POSTPONEMENT OF REGISTRATION</h5></b>
                </div>

                <form class="needs-validation" action="{{url('submitForm')}}" method="post">
                    {{csrf_field()}}
                    <input name="request" value="postponement-application-form" type="hidden">
                <div class="card-body">
                    <div>
                        <p style="color: whitesmoke"><Text style="color: red">*&nbsp;</Text>This form will not be accepted if any of this fields are kept blank</p>
                        <p style="color: whitesmoke">The reply to this application will be forwarded to e-mail address provide by the applicant.</p><br>

                    </div>
                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Full Name</span>
                                </div>
                                <input class="form-control" type="text" name="full_name">
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Student Registration Number</span>
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

                        <div class="col-md-6 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >NIC Number</span>
                                </div>
                                <input class="form-control" type="text" name="NIC">
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Email Address</span>
                                </div>
                                <input class="form-control" type="text" name="email">
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

                        <div class="col-md-6 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Duration of the postponement</span>
                                </div>
                                <input class="form-control" type="text" name="duration">
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Reason for seeking a Postponement of Registration</span>
                                </div>
                                <textarea class="form-control" name="reason" ></textarea>
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer bg-dark">
                    <button class="btn btn-info" type="submit">SEND</button>
                </div>
                </form>
            </div>
            <div class="card bg-dark">
                <div class="card-footer bg-success">
                    <center>All Rights Reserved by SLIDA. Designed and Developed by <strong>SLIDA SPS</strong> .</center>
                </div>
            </div>




        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>

    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    setTimeout(function() {
        $('#alertBox').hide('fade');
    }, 4000);

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){

        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
</script>

</body>

</html>