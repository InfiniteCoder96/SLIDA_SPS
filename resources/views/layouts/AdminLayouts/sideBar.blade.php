
    <aside class="left-sidebar" data-sidebarbg="skin5" id="sideBar">
        <!-- Sidebar scroll-->

        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav" >
                <ul id="sidebarnav" class="p-t-30 " >
                    <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('admin/dashboard')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('new-admissions')}}" aria-expanded="false"><i class="mdi mdi-account-alert"></i><span class="hide-menu">New Admissions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @if(count(\App\TemporaryStudent::where('admission_status','=','Pending')->get()) > 0)
                                    <span class="badge badge-orange text-white">{{count(\App\TemporaryStudent::where('admission_status','=','Pending')->get())}}</span>
                                    @endif</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-clipboard-account"></i><span class="hide-menu">New Intake</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{url('/students/create')}}" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Enroll New Student </span></a></li>
                            <li class="sidebar-item"><a href="{{url('/interviewlist')}}" class="sidebar-link"><i class="mdi mdi-human-child"></i><span class="hide-menu"> Interview Students&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        @if(count(\App\TemporaryStudent::where('admission_status','=','Interview')->get()) > 0)
                                            <span class="badge badge-orange text-white">{{count(\App\TemporaryStudent::where('admission_status','=','Interview')->get())}}</span>
                                        @endif</span></a></li>
                            <li class="sidebar-item"><a href="{{url('/aabptslist')}}" class="sidebar-link"><i class="mdi mdi-details"></i><span class="hide-menu"> AAB / PTS Students&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        @if(count(\App\TemporaryStudent::where('admission_status','=','AAB/PTS')->get()) > 0)
                                            <span class="badge badge-orange text-white">{{count(\App\TemporaryStudent::where('admission_status','=','AAB/PTS')->get())}}</span>
                                        @endif</span></a></li>
                            <li class="sidebar-item"><a href="{{url('/rejectlist')}}" class="sidebar-link"><i class="mdi mdi-account-remove"></i><span class="hide-menu"> Rejected Students&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        @if(count(\App\TemporaryStudent::where('admission_status','=','Rejected')->get()) > 0)
                                            <span class="badge badge-orange text-white">{{count(\App\TemporaryStudent::where('admission_status','=','Rejected')->get())}}</span>
                                        @endif</span></a></li>
                            <li class="sidebar-item"><a href="{{url('/selectlist')}}" class="sidebar-link"><i class="mdi mdi-account-check"></i><span class="hide-menu"> Selected Students&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        @if(count(\App\TemporaryStudent::where('admission_status','=','Selected')->get()) > 0)
                                            <span class="badge badge-orange text-white">{{count(\App\TemporaryStudent::where('admission_status','=','Selected')->get())}}</span>
                                        @endif</span></a></li>

                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-settings-variant"></i><span class="hide-menu">Students</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            @foreach(\App\Batch::all() as $item)
                                <li class="sidebar-item"><a href="{{url('/students')}}" class="sidebar-link"><i class="mdi mdi-human-child"></i><span class="hide-menu">{{$item->batch_name}} Batch <span class="badge badge-success text-white">{{$item->students_count}}</span></span></a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-microsoft"></i><span class="hide-menu">Batches</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{url('')}}" class="sidebar-link"><i class="mdi mdi-account-network"></i><span class="hide-menu"> All Batches </span></a></li>
                            <li class="sidebar-item"><a href="{{url('batches/create')}}" class="sidebar-link"><i class="mdi mdi-account-network"></i><span class="hide-menu"> Add New Batch </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-histogram"></i><span class="hide-menu">Results</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{url('/addresult')}}" class="sidebar-link"><i class="mdi mdi-plus-circle"></i><span class="hide-menu"> Enter New result </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Curriculum</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{url('/addsubject')}}" class="sidebar-link"><i class="mdi mdi-plus-circle"></i><span class="hide-menu"> Enter New Subject </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-sort-numeric"></i><span class="hide-menu">Payments</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{url('/student_payments')}}" class="sidebar-link"><i class="mdi mdi-plus-circle"></i><span class="hide-menu"> Student Payments </span></a></li>
                            <li class="sidebar-item"><a href="{{url('/addsubject')}}" class="sidebar-link"><i class="mdi mdi-plus-circle"></i><span class="hide-menu"> Lecturer Payments </span></a></li>
                            <li class="sidebar-item"><a href="{{url('/addsubject')}}" class="sidebar-link"><i class="mdi mdi-plus-circle"></i><span class="hide-menu"> Other Payments </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-comment-account-outline"></i><span class="hide-menu">Official Requests</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{url('/admin/officialRequests/postponementRequests')}}" class="sidebar-link"><i class="mdi mdi-comment"></i><span class="hide-menu"> Postponement Requests
                                        @if(count(\App\OfficialRequests::where('request_type','=','postponement-application-form')->get()) > 0)
                                            <span class="badge badge-orange text-white">{{count(\App\OfficialRequests::where('request_type','=','postponement-application-form')->get())}}</span>
                                        @endif</span></a></li>
                            <li class="sidebar-item"><a href="{{url('/admin/officialRequests/transcriptRequests')}}" class="sidebar-link"><i class="mdi mdi-comment"></i><span class="hide-menu"> Transcript Requests
                                        @if(count(\App\OfficialRequests::where('request_type','=','Selected')->get()) > 0)
                                            <span class="badge badge-orange text-white">{{count(\App\OfficialRequests::where('request_type','=','Selected')->get())}}</span>
                                        @endif</span></a></li>
                            <li class="sidebar-item"><a href="{{url('/admin/officialRequests/certificateRequests')}}" class="sidebar-link"><i class="mdi mdi-comment"></i><span class="hide-menu"> Certificate Requests
                                        @if(count(\App\OfficialRequests::where('request_type','=','certificate-request-form')->get()) > 0)
                                            <span class="badge badge-orange text-white">{{count(\App\OfficialRequests::where('request_type','=','certificate-request-form')->get())}}</span>
                                        @endif</span></a></li>
                        </ul>
                    </li>
                    {{--<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">Manage Staff</span></a>--}}
                        {{--<ul aria-expanded="false" class="collapse  first-level">--}}
                            {{--<li class="sidebar-item"><a href="{{url('/admin/manage-students')}}" class="sidebar-link"><i class="mdi mdi-account-settings"></i><span class="hide-menu"> All Staff </span></a></li>--}}
                            {{--<li class="sidebar-item"><a href="{{url('/admin/manage-teacher')}}" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> Staff Details </span></a></li>--}}
                            {{--<li class="sidebar-item"><a href="{{url('/admin/manage-teacher')}}" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Add New Staff Member </span></a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">Leaving Requests</span></a>--}}
                        {{--<ul aria-expanded="false" class="collapse  first-level">--}}
                            {{--<li class="sidebar-item"><a href="{{url('/admin/manage-students')}}" class="sidebar-link"><i class="mdi mdi-account-card-details"></i><span class="hide-menu"> Student Requests </span></a></li>--}}
                            {{--<li class="sidebar-item"><a href="{{url('/admin/manage-teacher')}}" class="sidebar-link"><i class="mdi mdi-account-card-details"></i><span class="hide-menu"> Teacher Requests </span></a></li>--}}
                            {{--<li class="sidebar-item"><a href="{{url('/admin/manage-teacher')}}" class="sidebar-link"><i class="mdi mdi-account-card-details"></i><span class="hide-menu"> Staff Requests </span></a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('')}}" aria-expanded="false"><i class="mdi mdi-contacts"></i><span class="hide-menu">Contact</span></a></li>--}}
                    {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('')}}" aria-expanded="false"><i class="mdi mdi-message-reply"></i><span class="hide-menu">Messages</span></a></li>--}}
                    {{--<hr style="background-color: crimson">--}}
                    {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('')}}" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Academic Summary</span></a></li>--}}
                    {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('')}}" aria-expanded="false"><i class="mdi mdi-raspberrypi"></i><span class="hide-menu">Non-Academic Summary</span></a></li>--}}
                    {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('')}}" aria-expanded="false"><i class="mdi mdi-note"></i><span class="hide-menu">Finance Summary</span></a></li>--}}
                    {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('')}}" aria-expanded="false"><i class="mdi mdi-human"></i><span class="hide-menu">HR Summary</span></a></li>--}}


                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>

        <!-- End Sidebar scroll-->
    </aside>


