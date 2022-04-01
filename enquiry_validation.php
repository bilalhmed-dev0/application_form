<?php



include 'connection.php';



  
  $name = $_POST['Name'];
  $department = $_POST['department'];
  $primary_phone = $_POST['phone'];
  $primary_email = $_POST['email'];
  $request = $_POST['info'];
  $learning_abt_zetech = $_POST['how_u_leant_abt_it'];
  $subject = $_POST['subject'];
  $description = $_POST['description'];




    


$q = "INSERT INTO enquiry_db (name,department,primary_phone,primary_email,request,learning_abt_zetech,subject,description) VALUES 
       ( '$name' , '$department' , '$primary_phone' , '$primary_email' , '$request' , '$learning_abt_zetech' , '$subject' , '$description')";

mysqli_query($connection,$q);

header("location: index.php");