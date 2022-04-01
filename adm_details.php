<?php


include 'connection.php';



$names = $_POST['names'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$kins_name = $_POST['kins_name'];
$kins_phonenumber = $_POST['nextOf_kin_s_number'];
$intake = $_POST['intake'];
$study_time = $_POST['study_time'];
$course = $_POST['course'];
$campus = $_POST['campus'];
$id =    $_POST['ID'];
$cert =    $_POST['cert'];
$passport_photo =    $_POST['passport_photo'];
$application_form =    $_POST['application_form'];



$q = "INSERT INTO applicants_details (names , phone_number, email, kins_name, nextOf_kin_s_number, intake,study_time,course,campus,ID,cert,passport_photo,application_form ) VALUES 
('$names', '$phone_number','$email','$kins_name', '$kins_phonenumber', '$intake','$study_time','$course','$campus','$id' ,'$cert','$passport_photo','$application_form')";




mysqli_query($connection,$q);

header("location: index.php");

























