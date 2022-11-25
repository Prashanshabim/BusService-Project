<?php
 include('../database/db_connect.php');
   error_reporting(0);

   $id = $_GET['bid'];
   $query = "DELETE FROM bus_schedule WHERE b_id = '$id'";

   $data = mysqli_query($con,$query);

   if($data){
       echo "<script>alert('Record Deleted succesfully')</script>";
       ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/busschedule_dashboard.php">
       <?php
    }else{
       echo"<script>alert('Failed to delete record')</script>";

   }
   ?>
