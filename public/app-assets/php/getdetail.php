<?php

$c = $_GET['c'];

//Database Connection gahanna
$con = mysqli_connect('localhost','root','','sms');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//Query
$sql = "select * from students where sid = '".$c."' ";

$adNo = "";
$name = "";
$gender = "";
$DOB = "";


$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    //rowswala nam
    $adNo = $row['sid'];
    $name = $row['first_Name'];
    $gender = $row['Gender'];
    $DOB = $row['DoB'];

}

echo $adNo . "^" . $name ."^".$gender."^". $DOB ."^" ;

mysqli_close($con);

?>


