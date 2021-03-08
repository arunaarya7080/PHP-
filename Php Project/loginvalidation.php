<?php
session_start();
include 'connection.php';

$fname = $_POST['fname'];
$password = $_POST['password'];

$selectquery="select * from crudtb where first_name='$fname' && password='$password' ";

$firequery=mysqli_query($con,$selectquery);

$checkallrow=mysqli_num_rows($firequery);

if($checkallrow == 1){
                     

$_SESSION['fname'] = $fname;  

                      header('location:display.php');

                       }
                   else{


                   	    header('location:login.php');


                       }

 ?>
