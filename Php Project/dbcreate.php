<?php
$server ="127.0.0.1";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
$sql = 'CREATE Database cruddb';  
$db = mysqli_query($con,$sql);
if($db){
    
    ?> 
      <script>
       alert("Database Created Is successfully PlZ Press the ok Button");
       </script>

        <?Php
             }
    
   else{
        ?>
             <script>
             alert("Database Not Created Plz Try Again");
            </script>
<?php 
 }
 ?>
