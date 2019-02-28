@extends('layouts.student_app')

@section('content')
<style>
    h1{
        font-family: 'Righteous', cursive, black;
        font-size: 100px;
        color: white;
        margin: 0px;
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    h4{
        font-family: 'Kaushan Script', cursive;
        font-size: 30px;
        color: white;
        margin: 10px;
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    h3{
        font-family: 'Kaushan Script', cursive;
        font-size: 30px;
        color: black;

        text-align: center;
        margin-left: 20px;
        display: table-cell;
        vertical-align: middle;
    }

    #newstd{
        font-family: 'Fredericka the Great', cursive;
        color: white;
        text-align: center;
        display: table-cell;
        vertical-align: middle;
        margin-top: 100px;
        font-size: 50px;

    }

    #newstd_para{
        color: white;
        text-align: center;
        display: table-cell;
        vertical-align: middle;
        margin-top: 100px;
        font-size: 20px;

    }

    h5{
        font-size: 20px;
        color: white;
        text-align: left;
        margin-left: 20px;
        display: table-cell;
        vertical-align: middle;
    }

    a:link {
        text-decoration: none;
    }
</style>
<body>
    <div id="box1">
        <div class="title" align="center">
            <h1><Text style="color: maroon">I AM </Text><Text style="color: goldenrod">SLIDA</Text></h1>
        </div>
        <div class="subtitle" align="center">
            <h4>Learning Confers Discipline</h4>
        </div>
        <div class="portal_btn" align="center">
            <a href="#box2" ><button id="portal_button">View Student Portal</button></a>
        </div>

    </div>
    <div id="box2">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img class="srilanka_logo" src="{{asset('assets\images\logos\Emblem_of_Sri_Lanka.svg.png')}}">

                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img class="slida_logo" src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}">

                    </div>
                </div>
                <div class="row">
                    <center><div class="col-md-12">
                            <h2 style="font-size: 20px">Master of Public Management</h2>


                        </div>
                        <div class="col-md-12">
                            <h3>School of Postgraduate Studies</h3>

                        </div></center>

                </div>

            </div>
            <div class="col-md-4" style="margin-top: 100px">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-9">
                        <h5>New Students</h5>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{'join-us/student'}}"><button class="btn btn-info btn-block mb-3">Apply for New Intake</button></a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-9">
                        <button class="btn btn-info btn-block mb-3">Course Details</button>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-9">
                        <button class="btn btn-info btn-block mb-3">Other Programmes</button>
                    </div>

                </div>

            </div>
            <div class="col-md-4" style="margin-top: 100px">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-9">
                        <h5>Current Students</h5>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{'student/dashboard'}}"> <button class="btn btn-info btn-block mb-3">Student Profile</button></a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{'onlineforms'}}"> <button class="btn btn-info btn-block mb-3">Official Requests</button></a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-9">
                        <button class="btn btn-info btn-block mb-3">Convocation</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="box3">
        <div class="row" >
            <div class="col-md-6 offset-md-3" id="newstd">
                <p style="color: #0a568c">Student Life</p>
            </div>
            <div class="col-md-12" id="newstd_para">
                <p style="color: #00131b">We are committed to providing a range of support services to guide students from the point of admission, throughout their enrollment, and after graduation.Life at SLIDA promises a vibrant future for our students. Student interactive communities, clubs & societies, sports and competitions have provided our students with a dynamic and integrated student life.</p>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="gallery">
                    <a target="_blank" href="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}">
                        <img src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}" alt="Cinque Terre" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}">
                        <img src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}" alt="Forest" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}">
                        <img src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}" alt="Northern Lights" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}">
                        <img src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}" alt="Mountains" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
                <div class="gallery">
                    <a target="_blank" href="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}">
                        <img src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}" alt="Cinque Terre" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}">
                        <img src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}" alt="Forest" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
                <div class="gallery">
                    <a target="_blank" href="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}">
                        <img src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}" alt="Forest" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
                <div class="gallery">
                    <a target="_blank" href="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}">
                        <img src="{{asset('assets\images\logos\SLIDA_logo-_2018.png')}}" alt="Forest" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

            </div>
        </div>
    </div>
</body>

@endsection