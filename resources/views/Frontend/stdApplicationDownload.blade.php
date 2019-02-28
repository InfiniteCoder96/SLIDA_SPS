<?php use Carbon\Carbon; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{asset('css/backend_css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-md-12 mb-3">

            <img src="{{public_path('assets\images\logos\SLIDA_logo-_2018.png')}}" style="width: 90px;height: 90px;margin-left: 300px">

        <div class="col-md-6">
            <center><h3>Sri Lanka Institute of Development Administration</h3></center>
            <center><h3>School of Postgraduate Studies (SPS)</h3></center>
            <center><h5>Master of Public Management (MPM) 2018/2020</h5></center>
            <center><h5>Admission Application</h5></center>

        </div>

    </div>

</div>
<div class="row" style="margin-top: 30px">

    <table class="table table-dark">
        <tbody>
        <tr>
            <td colspan="2" scope="col"></td>

            <td colspan="2" scope="col" style="text-align: right">Date : {{Carbon::now()->toDateString()}}</td>
        </tr>

        <tr>

            <td scope="col" colspan="4" class="bg-warning text-dark">Student Information</td>

        </tr>

        <tr>

            <td colspan="2" scope="col">Full Name :</td>
            <td colspan="2" scope="col">{{$student['salutation']}}.{{$student['first_Name']}} {{$student['middle_Name']}} {{$student['last_Name']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Date of Birth :</td>
            <td colspan="2" scope="col">{{$student['DoB']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">NIC / Postal ID :</td>
            <td colspan="2" scope="col">{{$student['NIC']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Gender :</td>
            <td colspan="2" scope="col">{{$student['Gender']}}</td>
        </tr>
        <tr>

            <td scope="col" class="bg-warning text-dark" colspan="4">Student Contact Information</td>

        </tr>
        <tr>

            <td colspan="2" scope="col">Residence Address :</td>
            <td colspan="2" scope="col">{{$student['Address_Res']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Telephone(Res) :</td>
            <td colspan="2" scope="col">{{$student['Telephone_No_Res']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Telephone(Mob) :</td>
            <td colspan="2" scope="col">{{$student['Telephone_No_Mob']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Email :</td>
            <td colspan="2" scope="col">{{$student['Email_Address']}}</td>
        </tr>

        <tr>

            <td scope="col" class="bg-warning text-dark" colspan="4">Office Information</td>

        </tr>
        <tr>

            <td colspan="2" scope="col">Working Sector :</td>
            <td colspan="2" scope="col">{{$student['sector']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Current Designation :</td>
            <td colspan="2" scope="col">{{$student['curr_designation']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Office Address :</td>
            <td colspan="2" scope="col">{{$student['Address_Office']}}</td>
        </tr>
        <tr>

            <td colspan="2" scope="col">Service  :</td>
            <td colspan="2" scope="col">{{$student['service_type']}}</td>
        </tr>
        <tr>

            <td scope="col" class="bg-warning text-dark" colspan="4">Qualifications</td>

        </tr>
        <tr>

            <td  scope="col" class="bg-danger text-white" style="border:1px solid black">Qualification Type</td>
            <td  scope="col" class="bg-danger text-white" style="border:1px solid black">Qualification Name</td>
            <td  scope="col" class="bg-danger text-white" style="border:1px solid black">Institute</td>
            <td  scope="col" class="bg-danger text-white" style="border:1px solid black">Grade/Class</td>


        </tr>

        @foreach($student->StudentQualifications as $qualification)
            <tr>

                <td  scope="col">{{$qualification->qualification_type}}</td>
                <td  scope="col">{{$qualification->qualification_name}}</td>
                <td  scope="col">{{$qualification->institute}}</td>
                <td  scope="col">{{$qualification->grade}}</td>


            </tr>
        @endforeach




        <tr>

            <td scope="col" class="bg-warning text-dark" colspan="4">Career Information</td>

        </tr>
        <tr>

            <td  scope="col" class="bg-danger text-white" style="border:1px solid black">Organization</td>
            <td  scope="col" class="bg-danger text-white" style="border:1px solid black">Address</td>
            <td  scope="col" class="bg-danger text-white" style="border:1px solid black">Designation</td>
            <td  scope="col" class="bg-danger text-white" style="border:1px solid black">Period</td>


        </tr>

        @foreach($student->StudentCareerDetails as $careerDetail)
            <tr>

                <td  scope="col">{{$careerDetail->organization_name}}</td>
                <td  scope="col">{{$careerDetail->organization_address}}</td>
                <td  scope="col">{{$careerDetail->designation}}</td>
                <td  scope="col">{{$careerDetail->period}}</td>


            </tr>
        @endforeach

        <tr>

            <td scope="col" class="bg-warning text-dark" colspan="4">Sponsorship Information</td>

        </tr>
        <tr>

            <td colspan="2" scope="col">Sponsorship :</td>
            <td colspan="2" scope="col">{{$student['sponsored']}}</td>
        </tr>

        @if(!($student['sponsored'] == "Not_Sponsored"))
            <tr>

                <td colspan="2" scope="col">Employer Name :</td>
                <td colspan="2" scope="col">{{$student['employer_name']}}</td>
            </tr>
            <tr>

                <td colspan="2" scope="col">Employer Designation :</td>
                <td colspan="2" scope="col">{{$student['employer_designation']}}</td>
            </tr>
            <tr>

                <td colspan="2" scope="col">Employer Address :</td>
                <td colspan="2" scope="col">{{$student['employer_address']}}</td>
            </tr>
        @endif
        <tr>

            <td scope="col" class="bg-warning text-dark" colspan="4">Other Information</td>

        </tr>
        <tr>

            <td colspan="2" scope="col">Class :</td>
            <td colspan="2" scope="col">{{$student['class_type']}}</td>
        </tr>

        </tbody>
    </table>

</div>
<div class="page-break"></div>
<div class="row">
    <p>I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief and I undertake to inform you of any changes therein, immediately.</p>
</div>
<div class="row">
    <div class="col-md-6">
        <p style="margin-top: 50px">..........................................<br>
            Applicant Signature</p>
    </div>
    <div class="col-md-6" >
        <p style="margin-top: 50px;float: right">.................................<br>
            Date</p>
    </div>

</div>

<div class="page-break"></div>
<table class="table">
    <tbody >

    <tr >

        <td scope="col" colspan="4">
            <p style="margin-top: 10px">Comments from employer
                <br>......................................................................................................................................................<br>
                <br>......................................................................................................................................................<br>
                <br>......................................................................................................................................................<br>
                <br>......................................................................................................................................................<br>
                <br>......................................................................................................................................................<br></p>
        </td>

    </tr>

        <tr>
            <td colspan="2" scope="col"><p style="margin-top: 10px">[ ] Strongly recommend</p></td>

            <td colspan="2" scope="col"><p style="margin-top: 10px">[ ] Recommended with conditions</p></td>
        </tr>

        <tr>
            <td colspan="2" scope="col"><p style="margin-top: 10px">[ ] Recommend</p></td>

            <td colspan="2" scope="col"><p style="margin-top: 10px">[ ] Do not recommend</p></td>
        </tr>

    <tr>
        <td colspan="2" scope="col"><p style="margin-top: 10px">Employer's Signature : ..................................</p></td>

        <td colspan="2" scope="col"><p style="margin-top: 10px">Date : ..................................</p></td>
    </tr>

    <tr>
        <td colspan="2" scope="col"><p style="margin-top: 10px">Name : ..................................</p></td>


    </tr>
    <tr>
        <td colspan="2" scope="col"><p style="margin-top: 10px">Designation : ..................................</p></td>


    </tr>
    <tr>
        <td colspan="2" scope="col"><p style="margin-top: 10px">Office Address : ..................................</p></td>


    </tr>
    </tbody>
</table>


</body>
</html>