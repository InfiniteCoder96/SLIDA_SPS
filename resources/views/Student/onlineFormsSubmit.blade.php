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
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/logos/SLIDA_logo-_2018.png')}}">
    <title>SLIDA MPM - Online Forms</title>
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

            <div class="card bg-dark">
                <div class="card-body">
                    <hr style="background-color: whitesmoke">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <div class="row mb-3">
                                <a href="{{'onlineforms/submit?request=postponement-application-form'}}" data-toggle="tooltip" data-placement="right" title="This Application must be completed by any student who temporary interrupts his or her studies and who wishes to postpone his or her studies for a certain period of time." class="btn btn-outline-info">Application for a Postponement of Registration</a>
                            </div>
                            <div class="row mb-3">
                                <a href="{{'onlineforms/submit?request=transcript-request-form'}}" data-toggle="tooltip" data-placement="right" title="Please apply your acedemic transcript after your level completion." class="btn btn-outline-success">Transcript / Result Sheet Request Form</a>
                            </div>
                            <div class="row mb-3">
                                <a href="{{'onlineforms/submit?request=certificate-request-form'}}" data-toggle="tooltip" data-placement="right" title="Students requiring course completion certificate should fill this form and submit" class="btn btn-outline-danger">Certificate Request Form</a>
                            </div>
                            <div class="row mb-3">
                                <a href="" data-toggle="tooltip" data-placement="right" title="As per the fees charged for services provided by SLIDA pl. pay RS. 100/- for Letters of Studentship confirmation for VISA and Studentship for company placement" class="btn btn-outline-warning">Official Letter Request</a>
                            </div>
                        </div>
                    </div>
                    <hr style="background-color: whitesmoke">
                </div>

            </div>

            <div class="card bg-dark">
                <div class="card-footer bg-success">
                    All Rights Reserved by SLIDA. Designed and Developed by <strong>SLIDA SPS</strong> .
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