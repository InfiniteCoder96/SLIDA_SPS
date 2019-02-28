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
<body style="background-image: url({{asset('assets/images/frontend_images/joinbackground.jpg')}});background-size: cover;">
@include('layouts.FrontendLayouts.header')
@include('layouts.FrontendLayouts.navbar')

    <div class="container" style="margin-bottom: 70px">
        <div class="row">
            <div class="col-md-8 mb-3" >
                <div class="row">
                    <h1 style="float: left;color: white;margin-bottom: 0px">Join Us</h1>
                </div>

                <div class="row">
                    <h3 style="float: left;color: goldenrod">Join St.John College As A Student</h3>

                </div>


                <div class="row">
                    <h4><a href="{{url('/join-us/student')}}">Click to submit your online application</a> </h4>

                </div>
            </div>
            <div class="col-md-4 mb-3" >
                <img class="card-hover" src="{{asset('assets/images/frontend_images/cna-certrified-students.png')}}" id="img" style="height:200px;width: 200px;background-color: #ccc;border: 2px solid darkblue;margin-top: 10px">
            </div>

        </div>
        <hr style="background-color: white">
        <div class="row">
            <div class="col-md-8 mb-3" >

                <div class="row">
                    <h3 style="float: left;color: goldenrod">Career Opportunities</h3>

                </div>


                <div class="row" style="color: white">
                    <p>As a progressive school that is continuously growing and expanding, we are always on the lookout for confident and talented individuals to join our team.</p>

                    <p>You will have the opportunity to work in a vibrant environment and be a part of a dynamic team who are passionate about education.</p>

                    <p>Send in your CV to <a href="mailto:pasinduvimansa96@gmail.com">hrm@stjohnworldwide.com</a></p>

                </div>
            </div>
            <div class="col-md-4 mb-3" >
                <img class="card-hover" src="{{asset('assets/images/frontend_images/smiling-teacher-welcoming-students_3446-315.jpg')}}" id="img" style="height:200px;width: 200px;background-color: #ccc;border: 2px solid darkblue;margin-top: 10px">
            </div>

        </div>
    </div>






</body>
</html>
