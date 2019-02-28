<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Admin;
use App\Notifications\DuePayments;
use App\Notifications\TaskCompleted;


Route::get('/', function () {




    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Authentication Routes
Route::get('/login_user','customAuthController@showLoginForm')->name('showLoginForm');
Route::post('/login_user','customAuthController@login')->name('login');

Route::get('/register_admin','customAuthController@showRegisterForm')->name('showRegisterForm');
Route::post('/register_admin','customAuthController@register')->name('register');

Route::post('/logout_user','customAuthController@logout')->name('logout');



//Administration routes
Route::get('/admin/dashboard','AdminController@showAdminDashboard')->name('showAdminDashboard');



// Temporary Student Management Routes
Route::resource('temporary_students','TemporaryStudentController');

Route::get('new-admissions','TemporaryStudentController@showNewAdmissions')->name('showNewAdmissions');

Route::get('/addDemoData','TemporaryStudentController@Demo_store');



// Student Management Routes
Route::resource('students','StudentController');

Route::get('/interviewlist','TemporaryStudentController@showInterviewStudentList');

Route::get('/aabptslist','TemporaryStudentController@showAAB_PTSStudentList');

Route::get('/rejectlist','TemporaryStudentController@showRejectedStudentList');

Route::get('/selectlist','TemporaryStudentController@showSelectedStudentList');

Route::post('/register_student','TemporaryStudentController@updateSelectedStudents')->name('updateSelectedStudents');


// Results Management Routes
Route::resource('student_results','StudentResultsController');

Route::get('/addresult','StudentResultsController@ShowAddResult');

Route::post('/addresult','StudentResultsController@ShowBatchResult');



// Subject Management Routes
Route::resource('subjects','SubjectsController');

Route::get('/addsubject','SubjectsController@ShowAddSubject');



// Batch Management
Route::resource('batches','BatchController');

Route::get('/addbatch','BatchController@ShowAddBatch');



// front end Routes
Route::get('/join-us/student',function(){
    return view('Frontend.JoinUsStudents');
});

Route::get('/download',function(){
    return view('Frontend.ApplicationFormDownload');
});

Route::get('/download-application','pdfController@stdApplication');

Route::get('/admission_progress',function (){
    $progress = -100;
    return view('Frontend.admission_progress_portal',compact('progress'));
});

Route::post('/admission_progress','TemporaryStudentController@checkProgress')->name('checkProgress');

Route::post('/update_status','TemporaryStudentController@UpdateAdmissionStatus')->name('UpdateAdmissionStatus');



// Student Portal
Route::get('/student_login','StudentAuthController@showLoginForm')->name('showLoginForm');

Route::post('/student_login','StudentAuthController@student_login')->name('student_login');

Route::post('/student_logout','StudentAuthController@student_logout')->name('student_logout');

Route::get('/study',function (){
    $subjects = \App\Subjects::all();

    return view('Student.student_home',compact('subjects'));
});

Route::get('/student/dashboard','StudentController@showProfile')->name('showProfile');

Route::get('/student/progress','StudentController@showProgress')->name('showProgress');


Route::get('/onlineforms',function (){
        return view('Student.onlineFormsSubmit');
});

Route::get('/onlineforms/submit','OfficialRequestController@requestFilter')->name('requestFilter');

Route::post('/submitForm','OfficialRequestController@submitForm')->name('submitForm');


// Student Payments
Route::resource('student_payments','StudentPaymentsController');

Route::post('searchPayment', [
    'uses' => 'StudentPaymentsController@searchPayment'
]);



// Notification Routes
Route::resource('notifications','NotificationController');

Route::get('/markAsRead','NotificationController@markAsRead')->name('markAsRead');


// Official requests management
Route::get('/admin/officialRequests/postponementRequests','OfficialRequestController@showPostponementRequests')->name('showPostponementRequests');

Route::post('/admin/officialRequests/showPostponementLetter','pdfController@generatePostponementRequestLetter')->name('generatePostponementRequestLetter');

Route::get('/admin/officialRequests/transcriptRequests','OfficialRequestController@showTranscriptRequests')->name('showPostponementRequests');

Route::post('/admin/officialRequests/showTranscriptLetter','pdfController@generateTranscriptRequestLetter')->name('generatePostponementRequestLetter');

Route::get('/admin/officialRequests/certificateRequests','OfficialRequestController@showCertificateRequests')->name('showCertificateRequests');

Route::post('/admin/officialRequests/showCertificateLetter','pdfController@generateCertificateRequestLetter')->name('generateCertificateRequestLetter');

// demo
Route::get('/dashboard',function (){
    return view('Admin.Dashboard.admin_dashboard');
});

Route::get('/view/{id}', [ 'as' => 'post-show', 'uses' => 'TemporaryStudentController@view', ]);