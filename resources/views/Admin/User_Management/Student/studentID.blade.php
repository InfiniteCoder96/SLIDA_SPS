
        <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{asset('css/backend_css/bootstrap.min.css')}}" rel="stylesheet">
</head>

<body>
<div>
    <table class="table table-success" border="0" style="border: 2px solid gold;">

        <tbody>


        <tr>
            <td style="width: 30px;height: 30px;"><img src="{{asset('storage/StudentImages/Small/'.$student['image'])}}" id="img" style="height:60px;width: 50px;border: 1px solid #117a8b/* Opera 11-12.1 */"></td>
            <td   style="font-size: 5px;margin-left: 5px">
                <p><h3 style="font-family: Garamond,sans-serif">STUDENT ID</h3>Full Name:&nbsp;&nbsp;&nbsp;<Text style="color: #117a8b">{{substr($student['first_Name'],0,1)}}.{{substr($student['middle_Name'],0,1)}}.{{$student['last_Name']}}</Text><br>
                    Student ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Text style="color: #117a8b">{{$student['sid']}}</Text><br>
                    Date of issue:&nbsp;&nbsp;&nbsp;<Text style="color: #117a8b">{{date("d/m/Y", strtotime($student['created_at']))}}</Text><br><br><br>

                    .................................<br>
                    <Text style="color: #117a8b">Director/Administrator</Text>

                </p>

            </td>
            <td style="width: 10px;height: 30px;margin-left: ">
                <img src="{{asset('assets/images/frontend_images/logo_school2.png')}}" style="width: 40px;height: 40px;">
                <div style="margin-left: 10px;margin-top: 10px">{!! \Milon\Barcode\DNS2D::getBarcodeHTML($student['sid'], "QRCODE",1,1,'black')!!}</div>
            </td>

        </tr>

        </tbody>
    </table>
</div>




</body>
</html>


