<?php 

include 'connection.php';
$id=$_GET['id'];

$deleteaquery ="delete from crudtb where id='$id'";
$firequery = mysqli_query($con,$deleteaquery);

if($firequery){
    
    ?> 
      <script>
       alert("Data Successfully deleted in table PlZ Press the ok Button");
       </script>
        <?Php
             }
    
   else{
        ?>
             <script>
             alert("data not deleted in table");
            </script>
<?php 
 }
 
  header('location:display.php');

 ?>

