@include('layouts.FrontendLayouts.head')
<style>
    .container_1 {
        width: 600px;
        margin: 100px auto;
    }
    .progressbar {
        counter-reset: step;
    }
    .progressbar li {
        list-style-type: none;
        width: 25%;
        float: left;
        font-size: 12px;
        position: relative;
        text-align: center;
        text-transform: uppercase;
        color: #7d7d7d;
    }
    .progressbar li:before {
        width: 30px;
        height: 30px;
        content: counter(step);
        counter-increment: step;
        line-height: 30px;
        border: 2px solid #7d7d7d;
        display: block;
        text-align: center;
        margin: 0 auto 10px auto;
        border-radius: 50%;
        background-color: white;
    }
    .progressbar li:after {
        width: 100%;
        height: 2px;
        content: '';
        position: absolute;
        background-color: #7d7d7d;
        top: 15px;
        left: -50%;
        z-index: -1;
    }
    .progressbar li:first-child:after {
        content: none;
    }
    .progressbar li.active {
        color: green;
    }
    .progressbar li.active:before {
        border-color: #55b776;
    }
    .progressbar li.active + li:after {
        background-color: #55b776;
    }
</style>
<body style="background-image: url({{asset('assets/images/frontend_images/progress_wall.jpg')}});background-size: cover;">



<!-- / header -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br/>
@endif


<div class="container" style="opacity: 0.9">
    {{--<div class="col-md-12" style="margin-top: 30px">--}}

        {{--@if ($success)--}}
            {{--<div id="alertBox" class="alert alert-success">--}}
                {{--<a class="close" data-dismiss="alert">&times;</a>--}}
                {{--<ul>--}}

                    {{--<li>{{ $success }}</li>--}}

                {{--</ul>--}}
            {{--</div><br />--}}
        {{--@endif--}}

    {{--</div>--}}

        <div class="card bg-dark text-white" style="margin-top: 200px">
            <div class="card-body">
                <h2 class="card-title">Check your admission progress here.....</h2>
                <p class="card-text"></p>

                <form action="{{url('/admission_progress')}}" method="post">
                    {{csrf_field()}}
                    <center>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Reference Number" name="ref_num" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-lg btn-outline-orange" type="submit">Check Progress</button>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </div>


    @if($progress == -1)
    <div class="card bg-warning text-white" style="margin-top: 20px">
        <div class="card-body">
                <h2 class="card-title">Please be patient, We're working on your admission</h2>
            <center><h4>Keep in touch</h4></center>
            <center><button type="submit" class="btn btn-lg btn-outline-success">Inquiry</button></center>
        </div>
    </div>
    @endif
    @if($progress == 1)
        <div class="card bg-success text-white" style="margin-top: 20px">
            <div class="card-body">
                <h2 class="card-title">Congratulations, Your application has been Accepted</h2>
                <center><h4>You will be receive an email with interview details</h4></center>
                <center><button type="submit" class="btn btn-lg btn-outline-danger">Inquiry</button></center>
            </div>
        </div>
    @endif
    @if($progress == 3)
        <div class="card bg-success text-white" style="margin-top: 20px">
            <div class="card-body">
                <h2 class="card-title">Congratulations, Your application has been Accepted</h2>
                <center><h4>You will be receive an email with class details</h4></center>
                <center><button type="submit" class="btn btn-lg btn-outline-danger">Inquiry</button></center>
            </div>
        </div>
    @endif
    @if($progress == 2)
        <div class="card bg-success text-white" style="margin-top: 20px">
            <div class="card-body">
                <h2 class="card-title">Please be patient, We're having some issues in your admission</h2>
                <center><h4>Your admission has been forwarded to Academic Affairs Board(AAB) for a final decision</h4></center>
                <center><button type="submit" class="btn btn-lg btn-outline-danger">Inquiry</button></center>
            </div>
        </div>
    @endif
    @if($progress == 0)
        <div class="card bg-primary text-white" style="margin-top: 20px">
            <div class="card-body">
                <h2 class="card-title">Sorry, Your admission has been Rejected</h2>
                <center><button type="submit" class="btn btn-lg btn-outline-warning">Inquiry</button></center>
            </div>
        </div>
    @endif
    @if($progress == -99)
        <div class="card bg-danger text-white" style="margin-top: 20px">
            <div class="card-body">
                <h2 class="card-title">Entered reference number is invalid</h2>
                <center><h4>Please try again</h4></center>
                <center><button type="submit" class="btn btn-lg btn-outline-info">Inquiry</button></center>
            </div>
        </div>
    @endif



<script>
    setTimeout(function() {
        $('#alertBox').hide('fade');
    }, 6000);
</script>


</body>
</html>
