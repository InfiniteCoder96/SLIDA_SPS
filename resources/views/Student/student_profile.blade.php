<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SLIDA Student Portal</title>

    <link href="{{asset('css/backend_css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/student_app_css/studentProfile.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: maroon">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link active" href="#">
                    <img class="slida_logo" style="height: 50px;width: 50px" src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}">
                </a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto text-warning" style="font-family: 'Righteous', cursive, black;
        font-size: 30px;" href="#">MPM - Student Profile</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-success" href="#"><i class="fa fa-mortar-board"></i><b> {{Auth::guard('student')->user()->sid}}</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white" href="">Logout</a>

                <form id="logout-form" action="{{url('student_logout')}}" method="post">
                    {{csrf_field()}}
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="card bg-dark text-white" id="result_table">
        <div class="card-body">

            <table class="table">
                @if($completed_sems == 0)
                    <div class="card bg-dark text-white" style="border: solid #b37400 ">
                        <div class="card-body">
                            <center><h2 class="card-title blinking">1st Semester not yet complete</h2></center>
                            <center><h7>Master of Public Management - School of Postgraduate Studies</h7></center>
                        </div>
                    </div>
                @else
                    @for($i = 1;$i < $completed_sems;$i++)
                        <thead class="bg-success">
                        <tr>
                            <th colspan="4" scope="col">Semester {{$i}}</th>
                        </tr>
                        </thead>
                        <thead style="background-color: #00131b">
                        <tr>
                            <th scope="col">Subject Code </th>
                            <th scope="col">Subject Name</th>
                            <th scope="col">Semester </th>
                            <th scope="col">Latest CA Marks</th>
                        </tr>
                        </thead>
                        @foreach($StudentResults as $result)

                            @if($result->sub_sem == 'Semester_'.($i))

                                <tbody>
                                <tr>
                                    <th scope="row">{{$result->sub_id}}</th>
                                    <td>{{$result->sub_name}}</td>
                                    <td>{{$result->sub_sem}}</td>
                                    <td>{{$result->attendance + $result->assignment_1 + $result->assignment_2}}</td>
                                </tr>
                                </tbody>
                            @endif

                        @endforeach
                    @endfor
                @endif




            </table>
            <footer class="page-footer font-small blue pt-4 bg-danger">

                <div class="footer-copyright text-center py-3 bg-dark text-white">
                    <p style="font-style: italic">Note : As this is a computer generated sheet, no signature is required. To apply official transcript please use this link</p>
                </div>
                <!-- Copyright -->

            </footer>
        </div>


    </div>
</div>


<!-- Footer -->

<!-- Footer -->

</body>


</html>