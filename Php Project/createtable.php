<?php 
include 'connection.php';

$sql = "CREATE TABLE crudtb(
id INT(6) AUTO_INCREMENT PRIMARY KEY,first_name VARCHAR(30) NOT NULL,last_name VARCHAR(30),email VARCHAR(50),password VARCHAR(30),gender VARCHAR(30),hobby VARCHAR(30),address VARCHAR(30),city VARCHAR(30),state VARCHAR(30),zip VARCHAR(30),image VARCHAR(30))"; 

$ctable = mysqli_query($con,$sql);

if($ctable){
    
    ?> 
      <script>
       alert("Table Created Is successfully PlZ Press the ok Button");
       </script>

        <?Php
             }
    
   else{
        ?>
             <script>
             alert("Table Created Is Not successfully Plz Try Again");
            </script>
<?php 
 }
 ?>

