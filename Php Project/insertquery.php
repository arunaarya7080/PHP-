<?php 
session_start();
error_reporting(0);
include 'connection.php';

if(isset($_POST['submit'])){
   
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $rediobtn = $_POST['rediobtn'];
   $hobby =implode(',',$_POST['hobby']);
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip = $_POST['zip'];
   $filename = $_FILES["uploadefile"]["name"];
   $tempname = $_FILES["uploadefile"]["tmp_name"];
   $folder = "imagedata/".$filename;
   move_uploaded_file($tempname, $folder);

   $insertquery = " INSERT INTO crudtb(first_name,last_name, email, password,gender,hobby,address, city,state, zip,image ) VALUES('$fname','$lname','$email','$password','$rediobtn','$hobby','$address','$city','$state','$zip','$folder') ";
   
   $results = mysqli_query($con,$insertquery);

   if($results){
    
    
    // <script>
      // alert("data inserted in table Successfully PlZ Press the ok Button");
       //</script>
    
    header('location:login.php');


             }
    
   else{
        ?>
             <script>
             alert("data not inserted in table");
            </script>
<?php 
 }
}
 ?>
