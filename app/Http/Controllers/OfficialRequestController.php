<?php

namespace App\Http\Controllers;

use App\OfficialRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficialRequestController extends Controller
{

    public function requestFilter(Request $request){

        if(Auth::guard('student')->user()){
            $request_type = $request->get('request');

            switch ($request_type){
                case 'postponement-application-form':return view('Student.postponementofRegistration');
                case 'transcript-request-form':return view('Student.transcriptRequestForm');
                case 'certificate-request-form':return view('Student.certificateRequestForm');
                //case 'postponement-application-form':return view('Student.postponementofRegistration');
            }
        }
        else{
            return redirect('/student_login');
        }


    }

    public function submitForm(Request $request){

        $request_type = $request->get('request');

        if($request_type == 'postponement-application-form'){

            $this->validate(request(), [

                'full_name'=> 'required',
                'NIC'=> 'required',
                'email'=> 'required',
                'sid' => 'required',
                'duration'=> 'required',
                'reason'=> 'required',

            ]);

            $postpnement_request = new OfficialRequests();

            $postpnement_request->data = [
                'full_name' => $request->get('full_name'),
                'NIC' => $request->get('NIC'),
                'email' => $request->get('email'),
                'duration' => $request->get('duration'),
                'reason' => $request->get('reason')
            ];

            $postpnement_request->sid = $request->get('sid');
            $postpnement_request->request_type = $request_type;

            $postpnement_request->save();

            return redirect('/onlineforms/submit?request=postponement-application-form')->with('success','Your application sent successfully');

        }
        else if($request_type == 'transcript-request-form'){

            $this->validate(request(), [

                'full_name'=> 'required',
                'sid' => 'required',
                'NIC'=> 'required',
                'email'=> 'required',

            ]);

            $transcript_request = new OfficialRequests();

            $transcript_request->data = [
                'full_name' => $request->get('full_name'),
                'NIC' => $request->get('NIC'),
                'email' => $request->get('email'),
            ];

            $transcript_request->sid = $request->get('sid');
            $transcript_request->request_type = $request_type;

            $transcript_request->save();

            return redirect('/onlineforms/submit?request=transcript-request-form')->with('success','Your request sent successfully');

        }
        else if($request_type == 'certificate-request-form'){
            $this->validate(request(), [

                'full_name'=> 'required',
                'sid' => 'required',
                'NIC'=> 'required',
                'email'=> 'required',
                'reason'=> 'required',

            ]);

            $certificate_request = new OfficialRequests();

            $certificate_request->data = [
                'full_name' => $request->get('full_name'),
                'NIC' => $request->get('NIC'),
                'email' => $request->get('email'),
                'reason' => $request->get('reason')
            ];

            $certificate_request->sid = $request->get('sid');
            $certificate_request->request_type = $request_type;

            $certificate_request->save();

            return redirect('/onlineforms/submit?request=certificate-request-form')->with('success','Your request sent successfully');

        }


    }

    public function showPostponementRequests(){

        $postponement_requests = OfficialRequests::where('request_type','=','postponement-application-form')->get();

        return view('Admin.Official_Request_Management.postponement_requests')->with(compact('postponement_requests'));
    }

    public function showTranscriptRequests(){

        $transcript_requests = OfficialRequests::where('request_type','=','transcript-request-form')->get();

        return view('Admin.Official_Request_Management.transcript_requests')->with(compact('transcript_requests'));
    }

    public function showCertificateRequests(){

        $certificate_requests = OfficialRequests::where('request_type','=','certificate-request-form')->get();

        return view('Admin.Official_Request_Management.certificate_requests')->with(compact('certificate_requests'));
    }


}
