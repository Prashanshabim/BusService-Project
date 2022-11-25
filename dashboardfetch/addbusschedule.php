<!--Header--> 
<?php 
//session_start();
include('dashboardheader.php'); 
?>
<!--Header End--> 
<!--Form-->
<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
    <h3 class="text-center">Add New Schedule</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="bus_number">Bus Number</label>
            <input type="text" class="form-control" id="bus_number" name="bus_number" require="">
        </div>

        <div class="form-group">
            <label for="bus_driver">Bus Driver</label>
            <input type="text" class="form-control" id="bus_driver" name="bus_driver" require="">
        </div>
        
        <div class="form-group">
            <label for="driver_helper">Driver Helper</label>
            <input type="text" class="form-control" id="driver_helper" name="driver_helper" require="">
        </div>

        <div class="form-group">
        <label for="route">Route</label>
            <br>
            <select name="route" required>
                <option disabled selected>Select Route</option>
                <br>
                <option value="inside biratnagar(puspalal chowk to college area)">Inside Biratnagar(puspalal chowk to college area)</option>
                <option value="biratnagar to rangeli">Biratnagar To Rangeli</option>
                <option value="biratnagar to rani">Biratnagar To Rani</option>
                <option value="biratnagar to biratchowk">Biratnagar To Biratchowk</option>
                <option value="biratnagar to ithari">Biratnagar To Ithari</option>
                <option value="biartnagar to inurwa">Biratnagar To Inurwa</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="shift">Shift</label>
            <br>
            <select name="shift" required>
                <option disabled selected>Select Shift</option>
                <option value="morning">Morning</option>
                <option value="day">Day</option>
            </select>
        </div>

        <div class="form-group">
            <label for="highway">Highway</label>
            <br>
            <select name="highway" required>
                <option disabled selected>Select Option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" require="">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submit" name="submit">Submit</button>
            <a href="busschedule_dashboard.php" class="btn btn-secondary">Close</a>
        </div>
    </form>
</div>

</div>  <!--div row close from header-->
</div>  <!--div container-fluid close from header-->
<!--End of form-->
<?php
if(isset($_POST['submit']))
    {
        $busnum=$_POST['bus_number'];
        $busdriver=$_POST['bus_driver'];
        $driverhelper=$_POST['driver_helper'];
        $route=$_POST['route'];
        $shift=$_POST['shift'];
        $highway=$_POST['highway'];
        $date=$_POST['date'];
         
       include('../database/db_connect.php');
        
        $query="INSERT INTO `bus_schedule`(`b_id`, `bus_number`, `bus_driver`, `driver_helper`, `route`, `shift`,`highway`,`date`) VALUES ('','$busnum','$busdriver','$driverhelper','$route','$shift','$highway','$date')";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));
        if($query)
        {   
            echo"<script>alert('Updated Successfully!')</script>";
            ?>
             <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/busschedule_dashboard.php">
        <?php
        }
        else
        {
            echo "<script>alert('Please! Update Again!')</script>";
            echo "<meta http-equiv='refresh' content='0'>";
        }
        
        }
    
         ?>






<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->