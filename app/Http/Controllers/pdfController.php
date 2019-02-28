<?php

namespace App\Http\Controllers;

use App\OfficialRequests;
use App\Student;
use App\TemporaryStudent;
use PDF;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function stdApplication(Request $request){
        $student = TemporaryStudent::with('StudentQualifications','StudentCareerDetails')->find($request->get('stdID'));

        $pdf = PDF::loadView('Frontend.stdApplicationDownload', compact('student'));
        return $pdf->stream('SLIDA MPM Admission Form.pdf');

    }

    public function stdIDCard($sid){

        $student = Student::with('Parent_Guardian')->find($sid);

        $pdf = PDF::loadView('Admin.User_Management.Student.studentID', compact('student'))->setPaper([0, 0, 185.906, 240.945], 'landscape');
        return $pdf->stream('St.John College Student Identity Card.pdf');

    }

    public function generatePostponementRequestLetter(Request $request){

        $id = $request->get('id');

        $postponementRequest = OfficialRequests::find($id);

        $pdf = PDF::loadView('Admin.Official_Request_Management.postponement_requests_letter', compact('postponementRequest'));
        return $pdf->stream('SLIDA MPM Postponement Request - '.$postponementRequest->sid.'.pdf');

    }

    public function generateTranscriptRequestLetter(Request $request){

        $id = $request->get('id');

        $postponementRequest = OfficialRequests::find($id);

        $pdf = PDF::loadView('Admin.Official_Request_Management.transcript_request_letter', compact('postponementRequest'));
        return $pdf->stream('SLIDA MPM Transcript Request - '.$postponementRequest->sid.'.pdf');

    }

    public function generateCertificateRequestLetter(Request $request){

        $id = $request->get('id');

        $postponementRequest = OfficialRequests::find($id);

        $pdf = PDF::loadView('Admin.Official_Request_Management.certificate_request_letter', compact('postponementRequest'));
        return $pdf->stream('SLIDA MPM Certificate Request - '.$postponementRequest->sid.'.pdf');

    }
}
