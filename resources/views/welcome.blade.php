<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com"><!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">

    <!-- Custom CSS -->
    <link href="{{asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/backend_css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link href="{{asset('css/backend_css/fabochart.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.flot/0.8.3/jquery.flot.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Codystar" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;

        }

        /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
        .icon-bar {
            position: fixed;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        /* Style the icon bar links */
        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        /* Style the social media icons with color, if you want */
        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
        }

        .twitter {
            background: #55ACEE;
            color: white;
        }

        .google {
            background: #dd4b39;
            color: white;
        }

        .linkedin {
            background: #007bb5;
            color: white;
        }

        .youtube {
            background: #bb0000;
            color: white;
        }

        canvas {
            display: block;
            vertical-align: bottom;
        }

        /* ---- particles.js container ---- */

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: darkslategray;
            background-image: url("");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
        }

        /* ---- stats.js ---- */

        .count-particles{
            background: #000022;
            position: absolute;
            top: 48px;
            left: 0;
            width: 80px;
            color: #13E8E9;
            font-size: .8em;
            text-align: left;
            text-indent: 4px;
            line-height: 14px;
            padding-bottom: 2px;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
        }

        .js-count-particles{
            font-size: 1.1em;
        }

        #stats,
        .count-particles{
            -webkit-user-select: none;
        }

        #stats{
            border-radius: 3px 3px 0 0;
            overflow: hidden;
        }

        .count-particles{
            border-radius: 0 0 3px 3px;
        }
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <script type="text/javascript" src="{{asset('js/backend_js/bootstrap.min.js')}}"></script>
</head>
<!-- particles.js container --> <div id="particles-js"></div> <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
<body>

<div class="flex-center position-ref full-height">

    <div class="top-right links">


        @if(Auth::guard('admin')->check())

            <a  style="color: orange" href="{{url('/admin/dashboard')}}">Home</a>
            <a  style="color: white;">|</a>
            <a  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white" href="">Logout</a>

            <form id="logout-form" action="{{url('logout_user')}}" method="post" style="display: none;">
                {{csrf_field()}}
            </form>

        @else
            <a  style="color: orange" href="{{url('login_user')}}">Login</a>
            <a  style="color: white;">|</a>
            <a  style="color: greenyellow" href="{{url('logout_user')}}">Help</a>
        @endif
    </div>



    <div class="content">
        {{--@if(Session::has('flash_message_error'))--}}

        {{--<div class="alert alert-danger alert-block">--}}
        {{--<button type="button" class="close" data-dismiss="alert">x</button>--}}
        {{--<strong>{!! session('flash_message_error') !!}</strong>--}}
        {{--</div>--}}
        {{--@endif--}}

        {{--@if(Session::has('Status'))--}}
        {{--<div class="alert alert-success alert-block">--}}
        {{--<button type="button" class="close" data-dismiss="alert">x</button>--}}
        {{--<strong>{!! session('flash_message_success') !!}</strong>--}}
        {{--</div>--}}
        {{--@endif--}}




        <div class="title ">
            <img src="{{asset('assets\images\logos\Emblem_of_Sri_Lanka.svg.png')}}" style="width: 70px;height: 90px">
            <Text style="color: #ebebeb">SLIDA</Text>
            <img src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}" style="width: 90px;height: 90px">
        </div>
        <div class="links m-b-md">
            <Text style="color: whitesmoke;"><span style="font-weight:bold;letter-spacing: 2px;">Sri Lanka Institute of Development Administration</span></Text>
        </div><br>
        <div class="links m-b-md">
            <Text style="color: goldenrod;font-size: 20px;font-family: 'Kaushan Script', cursive;"><span style="font-weight:bold">Learning Confers Discipline...</span></Text>
        </div><br>



        {{--@if (Session::has('Status'))--}}
        {{--<div class="alert alert-success alert-block">--}}
        {{--<p style="color: white">{{ Session::get('Status') }}</p>--}}
        {{--</div>--}}
        {{--@endif--}}



    </div>


</div>





<!-- The social media icon bar -->
<div class="icon-bar">
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google"><i class="fa fa-google"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>

</body>


<script>
    particlesJS("particles-js", {"particles":{"number":{"value":109,"density":{"enable":true,"value_area":710.2665077774184}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);
</script>

</html>
