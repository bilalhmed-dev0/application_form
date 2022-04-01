<?php

include 'connection.php';

if (isset($_POST['adminName']) && isset($_POST['password'])) {
  
    $id = $_POST['adminName'];
    $password = $_POST['password'];
}else {
    die();
}


$q = mysqli_query($connection , "SELECT name FROM admin_details WHERE name = '$id'
      and password = '$password' ");

if (mysqli_num_rows($q) == 1) {
    
    header('location: details_of_registers.php');
}else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

   /*  header('location: index.php'); */
}  