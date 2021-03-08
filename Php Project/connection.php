<?php 
$username = "u174277683_Codingworld";
$password = "Codingworld@#7080";
$server ="127.0.0.1";
$dbname ="u174277683_Codingworld";

$con = mysqli_connect($server,$username,$password,$dbname);

 if($con){
    
    ?> 
      <script>
       alert("Connection Is Successful PlZ Press the ok Button");
       </script>

        <?Php
             }
    
   else{
        ?>
             <script>
             alert("Connection Not Successful");
            </script>
<?php 
 }
 ?>
