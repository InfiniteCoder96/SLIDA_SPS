<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SCALAR Management Systems</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
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

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.flot/0.8.3/jquery.flot.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <![endif]-->

    <style>
        .dropdown-item:hover{
            background-color: lightslategrey;
        }

    </style>
</head>
<body >
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
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->


@yield('content')


<!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('js/backend_js/waves.js')}}"></script>
<script src="{{asset('js/backend_js/main.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('js/backend_js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('js/backend_js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<script src="{{asset('js/backend_js/pages/dashboards/dashboard1.js')}}"></script>
<!-- Charts js Files -->
<script src="{{asset('assets/libs/flot/excanvas.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('js/backend_js/pages/chart/chart-page-init.js')}}"></script>


<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>

<!-- this page js -->
<script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>

{{--view-insert_student--}}
<script src="{{asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>

<script src="{{asset('js/backend_js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/backend_js/tests.js')}}"></script>


<script src="{{asset('assets/libs/chart/matrix.interface.js')}}"></script>
<script src="{{asset('assets/libs/chart/excanvas.min.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('assets/libs/chart/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/libs/chart/matrix.charts.js')}}"></script>
<script src="{{asset('assets/libs/chart/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/libs/chart/turning-series.js')}}"></script>
<script src="{{asset('js/backend_js/pages/chart/chart-page-init.js')}}"></script>
<script src="{{asset('js/backend_js/fabochart.js')}}"></script>

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

    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();


    // Basic Example with form
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });



    $('.timer').countTo();



</script>
<script>
    (function() {
        var curImgId = 0;

        var numberOfImages = 6; // Change this to the number of background images
        window.setInterval(function() {

            $('#ass').css('background-image','url('+'{{asset('assets/images/big/img')}}'+ curImgId + '.jpg');
            curImgId = (curImgId + 1) % numberOfImages;

        }, 3 * 1000);
    })();
</script>
<script>

    $('#studentInfoCategoryDisplayModal').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);


        var id = button.data('id');

        var modal = $(this);


        modal.find('.modal-body #sid').val(id);

    });


    $('#viewPaymentDetailsModal').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);


        var sub_id = button.data('id');
        var sub_name = button.data('name');
        var sub_sem = button.data('sem');
        var sub_credits = button.data('credits');

        var modal = $(this);


        modal.find('.modal-body #sub_id').val(sub_id);
        modal.find('.modal-body #sub_name').val(sub_name);
        modal.find('.modal-body #sub_sem').val(sub_sem);
        modal.find('.modal-body #sub_credits').val(sub_credits);

    });


    $('#updateSubjectModal').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);


        var sub_id = button.data('id');
        var sub_name = button.data('name');
        var sub_sem = button.data('sem');
        var sub_credits = button.data('credits');

        var modal = $(this);


        modal.find('.modal-body #sub_id').val(sub_id);
        modal.find('.modal-body #sub_name').val(sub_name);
        modal.find('.modal-body #sub_sem').val(sub_sem);
        modal.find('.modal-body #sub_credits').val(sub_credits);

    });

    $('#updateResultModal').on('show.bs.modal', function(event){

        var button = $(event.relatedTarget);


        var sid = button.data('sid');
        var sub_id = button.data('subid');
        var attd_marks = button.data('att');
        var ass1_marks = button.data('ass1');
        var ass2_marks = button.data('ass2');
        var final_marks = button.data('final');

        var modal = $(this);


//        if(button.data('sid')){
//            modal.find('.modal-body #sid').attr('readonly', true);
            modal.find('.modal-body #sid').val(button.data('sid'));
//        }
//        if(button.data('subid')){
//            modal.find('.modal-body #sub_id').attr('readonly', true);

            modal.find('.modal-body #sub_id').val(button.data('subid'));
//        }
//
//        if(button.data('att')){
//            modal.find('.modal-body #attd_marks').attr('readonly', true);

            modal.find('.modal-body #attd_marks').val(button.data('att'));
//        }
//
//        if(button.data('final')){
//            modal.find('.modal-body #final_marks').attr('readonly', true);

            modal.find('.modal-body #final_marks').val(button.data('final'));
//        }
//
//        if(button.data('ass1')){
//            modal.find('.modal-body #ass1_marks').attr('readonly', true);

            modal.find('.modal-body #ass1_marks').val(button.data('ass1'));
//        }
//
//        if(button.data('ass2') && button.data('ass2') !== ""){


            modal.find('.modal-body #ass2_marks').val(button.data('ass2'));
//            modal.find('.modal-body #ass2_marks').attr('readonly', true);
//        }



    });

    $('#deleteConfirmationModal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);

        var sid = button.data('id');

        var modal = $(this);

        modal.find('.modal-footer #temp_sid').val(sid);

    });

    $('#acceptConfirmationModal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);

        var sid = button.data('id');

        var modal = $(this);

        modal.find('.modal-footer #temp_sid').val(sid);

    });

    $(document).ready(function(){
        var sid = $("#sid input").val();
        var link = "/student/"+sid+"'>Edit";

        document.getElementById("link").setAttribute("href",link);
    })

</script>

</body>
</html>
