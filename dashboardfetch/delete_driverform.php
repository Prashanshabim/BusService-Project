<?php
 include('../database/db_connect.php');
   error_reporting(0);

   $id = $_GET['did'];
   $query = "DELETE FROM driver_update WHERE d_id = '$id'";

   $data = mysqli_query($con,$query);

   if($data){
       echo "<script>alert('Record Deleted succesfully')</script>";
       ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/driverupdateform.php">
       <?php
    }else{
       echo"<script>alert('Failed to delete record')</script>";

   }
   ?>
