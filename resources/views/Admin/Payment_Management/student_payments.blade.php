@extends('layouts.app')

@section('content')

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
                    <h4 class="page-title">Welcome to Student Management Portal <i class="mdi mdi-face"></i></h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Management</li>
                                <li class="breadcrumb-item active" aria-current="page">Student</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif
            @if (\Session::has('error'))
                <div class="alert alert-danger">
                    <p>{{ \Session::get('error') }}</p>
                </div><br />
            @endif

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Add New Payment</h5>
                            </div>
                            <form  class="needs-validation" novalidate action="{{url('student_payments')}}" method="post">
                                <div class="card-body bg-warning">

                                    {{csrf_field()}}
                                    <input type="hidden" value="admin" name="source">

                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Student ID</span>
                                                </div>
                                                <input type="text" name="student_id" class="form-control" id="validationCustomUsername" placeholder="Enter Cheque No" aria-describedby="inputGroupPrepend" required/>

                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Payment Type</span>
                                                </div>
                                                <select name="payment_type" class="form-control" required>
                                                    <option selected disabled>- Select Payment Type -</option>
                                                    <option value="Application Fee">Application Fee</option>
                                                    <option value="Admission Fee">Admission Fee</option>
                                                    <option value="Course Fee">Course Fee</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Payment Amount</span>
                                                </div>
                                                <input type="text" name="payment_amount" class="form-control" id="validationCustomUsername" placeholder="Enter amount" aria-describedby="inputGroupPrepend" required/>

                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Receipt No</span>
                                                </div>
                                                <input type="text" name="receipt_no" class="form-control" id="validationCustomUsername" placeholder="Enter Receipt No" aria-describedby="inputGroupPrepend" required/>

                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3 cheque_no_field">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend">Cheque No</span>
                                                </div>
                                                <input type="text" name="cheque_no" class="form-control" id="validationCustomUsername" placeholder="Enter Cheque No" aria-describedby="inputGroupPrepend" required/>

                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer bg-dark">
                                    <button class="btn btn-success" type="submit">ADD</button>
                                    <button class="btn btn-warning" type="reset">RESET</button>
                                </div>
                            </form>
                        </div>


                </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Search Payments</h5>
                            </div>
                            <form  class="needs-validation" novalidate action="{{url('searchPayment')}}" method="post">
                                <div class="card-body bg-success">

                                    {{csrf_field()}}
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Search By</span>
                                                </div>
                                                <select name="category" class="form-control" required>
                                                    <option selected disabled>- Select Category -</option>
                                                    <option value="sid">Student ID</option>
                                                    <option value="batch_id">Batch ID</option>
                                                </select>
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
                                        <div class="col-md-12 mb-3">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Value</span>
                                                </div>
                                                <input class="form-control" type="text" name="value">
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-dark text-light" id="inputGroupPrepend" >Payment Type</span>
                                                </div>
                                                <select id="payment_type" name="payment_type" class="selectpicker form-control" required>
                                                    <option selected disabled>- Select Payment Type -</option>
                                                    <option value="Application Fee">Application Fee</option>
                                                    <option value="Admission Fee">Admission Fee</option>
                                                    <option value="Course Fee">Course Fee</option>
                                                    <option value="Repeat Fee">Repeat Fee</option>
                                                    <option value="All">All Payments</option>
                                                </select>
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
                                    <button class="btn btn-success" type="submit">SEARCH</button>
                                    <button class="btn btn-warning" type="reset">RESET</button>
                                </div>
                            </form>
                        </div>


                    </div>
            </div>
                @if(!is_null($student_payments))
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Student Payments Details</h5>
                </div>
                <div class="table-responsive">
                    <form action="{{url('update_status')}}" method="post" id="formfield">
                        {{csrf_field()}}
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>


                                <th scope="col" style="font-size: 12px">SID</th>
                                <th scope="col" style="font-size: 12px">Payment type</th>
                                <th scope="col" style="font-size: 12px">Paid Amount</th>
                                <th scope="col" style="font-size: 12px">Due Amount</th>
                                <th scope="col" style="font-size: 12px">Payment Status</th>
                                <th scope="col" style="font-size: 12px">Payment Date</th>
                                <th scope="col" style="font-size: 12px">Action</th>

                            </tr>
                            </thead>
                            <tbody class="customtable">



                                    @foreach($student_payments as $student_payment)
                                        <tr>

                                            <td style="font-size: 12px">{{$student_payment->sid}}</td>
                                            <td style="font-size: 12px">{{$student_payment->description}}</td>
                                            <td style="font-size: 12px">{{$student_payment->amount}}</td>

                                            @if($student_payment->description == 'Application Fee')
                                                @if(doubleval($batch_count['application_fee']) == $student_payment->amount)
                                                    <td style="font-size: 12px"><h4><span class="fas fa-check"></span></h4></td>
                                                    <td style="font-size: 12px"><h4><a data-toggle="modal" data-target="#deleteConfirmationModal" class="badge badge-pill badge-success text-dark font-weight-bold"><span class="fa fa-smile"> Paid</span></a></h4></td>
                                                @else
                                                    <td style="font-size: 12px">{{doubleval($batch_count['application_fee']) - $student_payment->amount}}</td>
                                                    <td style="font-size: 12px"><h4><a data-toggle="modal" data-target="#deleteConfirmationModal" class="badge badge-pill badge-warning text-dark font-weight-bold"><span class="fa fas fa-meh"> Due</span></a></h4></td>
                                                @endif
                                            @endif
                                            @if($student_payment->description == 'Admission Fee')
                                                @if(doubleval($batch_count['admission_fee']) == $student_payment->amount)
                                                    <td style="font-size: 12px"><h4><span class="fas fa-check"></span></h4></td>
                                                    <td style="font-size: 12px"><h4><a data-toggle="modal" data-target="#deleteConfirmationModal" class="badge badge-pill badge-success text-dark font-weight-bold"><span class="fa fa-smile"> Paid</span></a></h4></td>
                                                @else
                                                    <td style="font-size: 12px">{{doubleval($batch_count['admission_fee']) - $student_payment->amount}}</td>
                                                    <td style="font-size: 12px"><h4><a data-toggle="modal" data-target="#deleteConfirmationModal" class="badge badge-pill badge-warning text-dark font-weight-bold"><span class="fa fas fa-meh"> Due</span></a></h4></td>
                                                @endif
                                            @endif
                                            @if($student_payment->description == 'Course Fee')
                                                @if(doubleval($batch_count['course_fee']) == $student_payment->amount)
                                                    <td style="font-size: 12px"><h4><span class="fas fa-check"></span></h4></td>
                                                    <td style="font-size: 12px"><h4><a data-toggle="modal" data-target="#deleteConfirmationModal" class="badge badge-pill badge-success text-dark font-weight-bold"><span class="fa fa-smile"> Paid</span></a></h4></td>
                                                @else
                                                    <td style="font-size: 12px">{{doubleval($batch_count['course_fee'])- $student_payment->amount}}</td>
                                                    <td style="font-size: 12px"><h4><a data-toggle="modal" data-target="#deleteConfirmationModal" class="badge badge-pill badge-warning text-dark font-weight-bold"><span class="fa fas fa-meh"> Due</span></a></h4></td>
                                                @endif
                                            @endif
                                            <td style="font-size: 12px">{{$student_payment->created_at->format('m/d/Y')}}</td>

                                            <td style="font-size: 12px">
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <input name="url" type="hidden" value="/interviewlist">
                                                        <input name="id" type="hidden" value="{{$student_payment->id}}">
                                                        <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="modal" data-target="#viewPaymentDetailsModal"><span class="fas fa-eye"></span></button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input name="url" type="hidden" value="/interviewlist">
                                                        <input name="id" type="hidden" value="{{$student_payment->id}}">
                                                        <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="modal" data-target="#acceptConfirmationModal"><span class="fas fa-pencil-alt"></span></button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input name="url" type="hidden" value="/interviewlist">
                                                        <input name="id" type="hidden" value="{{$student_payment->id}}">
                                                        <button class="btn btn-dark btn-md text-orange" type="button" data-toggle="modal" data-target="#acceptConfirmationModal"><span class="fas fa-trash-alt"></span></button>
                                                    </div>
                                                </div>
                                            </td>



                                        </tr>

                                    @endforeach





                            </tbody>
                        </table>




                    </form>
                </div>
            </div>

        </div>
    @endif
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->


    @include('layouts.adminLayouts.footer')
    @include('layouts.adminLayouts.deleteConfirmationModal')
    @include('layouts.adminLayouts.acceptConfirmationModal')
    @include('layouts.adminLayouts.viewPaymentDetailsModal')
    <script>

        $('#submit').click(function(){
            /* when the submit button in the modal is clicked, submit the form */

            $('#formfield').submit();
        });
    </script>
@endsection