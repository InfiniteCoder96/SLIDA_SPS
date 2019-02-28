@include('layouts.FrontendLayouts.head')

<style>
    .blinking{
        animation:blinkingText 0.8s infinite;
    }
    @keyframes blinkingText{
        0%{     color: red;    }
        49%{    color: transparent; }
        50%{    color: black; }
        99%{    color:transparent;  }
        100%{   color: red;    }
    }
</style>
<body style="background-image: url({{asset('assets/images/frontend_images/graduation.jpg')}});background-size: cover;">



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


<div class="container">
        <div class="col-md-12" style="margin-top: 300px">
            <div class="card bg-success text-white" style="margin-top: 20px">
                <div class="card-body">
                    <center><h3>Your application submitted successfully...</h3></center>
                    <h2 class="card-title">Your reference number is <strong><Text style="color: black;font-size: 30px">{{$reference_num}}</Text></strong></h2>
                    <center><h4>We'll contact you soon...</h4></center>
                    <center><p style="color: whitesmoke">You can review your admission progress by visiting this <a class="blinking" style="font-size: 15px" href="{{url('admission_progress')}}">link</a> and enter above reference number </p></center>
                    <center><a href="{{url('/download-application?stdID='.$id)}}"><button class="btn btn-md btn-outline-danger">Download Your Application Here.....</button></a></center>

                </div>
            </div>

        </div>
</div>
<script>
    setTimeout(function() {
        $('#alertBox').hide('fade');
    }, 6000);
</script>


</body>
</html>
