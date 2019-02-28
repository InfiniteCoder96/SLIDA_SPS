@extends('layouts.app')

@section('content')
    <style>
        a:hover {
            cursor:pointer;
        }
    </style>
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
                    <h4 class="page-title">Results Management Portal <i class="mdi mdi-face"></i></h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Results Management</li>
                                <li class="breadcrumb-item active" aria-current="page">New Result</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
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
            @if (\Session::has('error'))
                <div id="alertBox" class="alert alert-danger">
                    <p>{{ \Session::get('error') }}</p>
                </div><br />
            @endif

            <div class="row">
                <div class="col-md-12">
                    @if($postponement_requests)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Result Information<span class="label label-info" style="font-size: 20px">{{count($postponement_requests)}}</span></h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-dark text-white">
                                    <tr>

                                        <th scope="col" style="font-size: 12px">SID</th>
                                        <th scope="col" style="font-size: 12px">Full Name</th>
                                        <th scope="col" style="font-size: 12px">NIC</th>
                                        <th scope="col" style="font-size: 12px">Email</th>
                                        <th scope="col" style="font-size: 12px">Duration</th>
                                        <th scope="col" style="font-size: 12px">Reason</th>
                                        <th scope="col" style="font-size: 12px">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody class="customtable bg-secondary text-white">

                                    @foreach($postponement_requests as $postponement_request)

                                        <tr>

                                            <td style="font-size: 12px">{{$postponement_request->sid}}</td>
                                            <td style="font-size: 12px">{{$postponement_request->data['full_name']}}</td>
                                            <td style="font-size: 12px">{{$postponement_request->data['NIC']}}</td>
                                            <td style="font-size: 12px">{{$postponement_request->data['email']}}</td>
                                            <td style="font-size: 12px">{{$postponement_request->data['duration']}}</td>
                                            <td style="font-size: 12px">{{$postponement_request->data['reason']}}</td>

                                            <td style="font-size: 12px" >

                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <input name="url" type="hidden" value="/interviewlist">
                                                        <input name="id" type="hidden" value="">
                                                        <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="modal" data-target="#updateResultModal"><span class="fas fa-eye"></span></button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <form action="{{url('/admin/officialRequests/showPostponementLetter')}}" method="post" >
                                                            {{csrf_field()}}
                                                            <input name="id" type="hidden" value="{{$postponement_request->id}}">
                                                            <button class="btn btn-dark btn-md text-orange" type="submit"><span class="fas fa-file-alt"></span></button>
                                                        </form>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <input name="url" type="hidden" value="/interviewlist">
                                                        <input name="id" type="hidden" value="">
                                                        <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="modal" data-target="#acceptConfirmationModal"><span class="fas fa-trash-alt"></span></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->


    @include('layouts.adminLayouts.footer')
    @include('layouts.adminLayouts.updateResultModal')
    @include('layouts.adminLayouts.deleteConfirmationModal')
    @include('layouts.adminLayouts.acceptConfirmationModal')

    <script>

        function SubjectCheck(that) {
            if (that.value == "sub_id") {
                document.getElementById("sub_details").style.display = "block";

            } else if(that.value == "sub_name"){
                document.getElementById("sub_details").style.display = "block";
            } else{
                document.getElementById("sub_details").style.display = "none";
            }

        }

        setTimeout(function() {
            $('#alertBox').hide('fade');
        }, 4000);
    </script>
@endsection