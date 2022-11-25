<?php
 include('../database/db_connect.php');
   error_reporting(0);

   $id = $_GET['sn'];
   $query = "DELETE FROM User WHERE r_id = '$id'";

   $data = mysqli_query($con,$query);

   if($data){
       echo "<script>alert('Record Deleted from Database succesfully')</script>";
       ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/users.php">
       <?php
    }else{
       echo"<font color='red'>Failed to delete record from database";

   }
   ?>
