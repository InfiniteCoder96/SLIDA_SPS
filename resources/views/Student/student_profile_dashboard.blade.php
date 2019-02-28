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

    <link href="{{ asset('css/backend_css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet">

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

<body style="background-color: lightseagreen">
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
    <div class="container" >
        <div class="card-header bg-dark text-orange" style="margin-top: 50px">
            <h4>Hello <strong>{{$user->first_Name}}</strong></h4>
        </div>

        <div class="col-md-12" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-4">

                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="{{asset('assets/images/users/progress.png')}}" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-gray">Show</h6>
                                    <h4 class="card-title">My Progress</h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="{{'progress'}}" class="btn btn-primary btn-round">View</a>
                                </div>
                            </div>


                </div>

                <div class="col-md-4">

                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="{{asset('assets/images/users/payment.jpg')}}" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-gray">Show</h6>
                            <h4 class="card-title">My Payments</h4>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-primary btn-round">View</a>
                        </div>
                    </div>


                </div>

                <div class="col-md-4">

                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="{{asset('assets/images/users/gambar-user-png-2.png')}}" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-gray">Show</h6>
                            <h4 class="card-title">My Profile</h4>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-primary btn-round">View</a>
                        </div>
                    </div>


                </div>

            </div>
        </div>


            <div class="card-footer bg-dark text-white" >
                All Rights Reserved by SLIDA. Designed and Developed by <strong>SLIDA SPS</strong> .
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