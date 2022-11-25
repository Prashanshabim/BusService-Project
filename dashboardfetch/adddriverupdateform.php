<!--Header--> 
<?php 
//session_start();
include('dashboardheader.php'); 
?>
<!--Header End--> 
<!--Form-->
<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
    <h3 class="text-center">Add Driver Update</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="drivername">Driver Name</label>
            <input type="text" class="form-control" id="drivername" name="drivername" required>
        </div>

        <div class="form-group">
            <label for="busno">Bus Number</label>
            <input type="text" class="form-control" id="busno" name="busno" required>
        </div>
        
        <div class="form-group">
            <label for="udate">Date</label>
            <input type="date" class="form-control" id="udate" name="udate" required>
        </div>

        <div class="form-group">
            <label for="route">Route</label>
            <input type="text" class="form-control" id="route" name="route" required>
        </div>
        
        
        <div class="form-group">
            <label for="kmupdate">Kilometer Update</label>
            <input type="text" class="form-control" id="kmupdate" name="kmupdate" required>
        </div>
        
        <div class="form-group">
            <label for="fuelupdate">Fuel Update</label>
            <input type="text" class="form-control" id="fuelupdate" name="fuelupdate" required>
        </div>
        
        <div class="form-group">
            <label for="shift">shift</label>
            <br>
            <select name="shift" required>
                <option disabled selected>Select shift</option>
                <option value="morning">Morning</option>
                <option value="day">Day</option>
                <option value="wholeday">Whole Day</option>
            </select>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submit" name="submit">Submit</button>
            <a href="driverupdateform.php" class="btn btn-secondary">Close</a>
        </div>
    </form>
</div>

</div>  <!--div row close from header-->
</div>  <!--div container-fluid close from header-->
<!--End of form-->

<?php
if(isset($_POST['submit']))
    {
        $drivername=$_POST['drivername'];
        $busno=$_POST['busno'];
        $udate=$_POST['udate'];
        $route=$_POST['route'];
        $kmupdate=$_POST['kmupdate'];
        $fuelupdate=$_POST['fuelupdate'];
        $shift=$_POST['shift'];
        
        include('../database/db_connect.php');

        $checkExistance = "SELECT * FROM driver_update WHERE  busno='$busno' AND udate='$udate' AND shift = '$shift'";
        $check_query_run = mysqli_query($con,$checkExistance);
        if(mysqli_num_rows($check_query_run))
        {
            echo"<script>alert(' You have Already Updated Today Data!')</script>";
            echo"<meta http-equiv='refresh' content='0'>";
        }else{
         //insert into database 
         $query = "INSERT INTO `driver_update`(`d_id`, `drivername`,`busno`, `udate`,`route`, 
         `kmupdate`, `fuelupdate`,`shift`) VALUES 
         ('','$drivername','$busno','$udate','$route','$kmupdate','$fuelupdate','$shift')";
         $result=mysqli_query($con,$query)or die(mysqli_error($con));
         if($query)
         {
             echo"<script>alert('Updated Successfullyl!')</script>";
             ?>
             <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/driverupdateform.php">
             <?php
         }
         else
         {
             echo "<script>alert('Update Unsuccessfull! Update Again!')</script>";
             ?>
             <META HTTP-EQUIV="Refresh" CONTENT="0">;
             <?php
         }
         }
     }

    ?>

<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->