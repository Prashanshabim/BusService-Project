<?php 
include('dashboardheader.php'); 
include('../database/db_connect.php');

error_reporting(0);
$did=$_GET['did'];
$dn=$_GET['dn']; //drivername
$busno=$_GET['busno'];
$date=$_GET['date'];
$route=$_GET['route'];
$km=$_GET['km'];
$fuel=$_GET['fuel'];
$shift=$_GET['shift'];
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
<h3 class="text-center">Edit Driver Form</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="drivername">Driver Name</label>
            <input type="text" class="form-control" id="drivername" name="drivername" value="<?php echo "$dn"?>">
        </div>

        <div class="form-group">
            <label for="busno">Bus Number</label>
            <input type="text" class="form-control" id="busno" name="busno" value="<?php echo "$busno"?>">
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control" id="date" name="date" value="<?php echo "$date"?>">
        </div>

        <div class="form-group">
            <label for="route">Route</label>
            <input type="text" class="form-control" id="route" name="route" value="<?php echo "$route"?>">
        </div>

        <div class="form-group">
            <label for="km">KM Travelled</label>
            <input type="text" class="form-control" id="km" name="km" value="<?php echo "$km"?>">
        </div>

        <div class="form-group">
            <label for="fuel">Fuel Consumed</label>
            <?php $route=trim($fuel); ?>
            <input type="text" class="form-control" id="fuel" name="fuel" value="<?php echo "$fuel"?>">
        </div>

        <div class="form-group">
            <label for="shift">Shift</label>
            <br>
            <select class="form-select" name="shift" id="shift" id="shift" aria-label="multiple select" >
                <option disabled >Select Shift</option>
                <option value="morning" <?php echo $shift=="Morning" ? 'selected' : '' ?>>Morning</option>
                <option value="day" <?php echo $shift=="Day" ? 'selected' : '' ?>>Day</option>
            </select>
        </div>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submit" name="submit">Update</button>
            <a href="driverupdateform.php" class="btn btn-secondary">Close</a>
        </div>
    </form>
</div>

<?php
if(isset($_POST['submit']))
{
    $drivername = $_POST['drivername'];
    $busno = $_POST['busno'];
    $date = $_POST['date'];
    $route = $_POST['route'];
    $km = $_POST['km'];
    $fuel = $_POST['fuel'];
    $shift = $_POST['shift'];
   

   $query = "UPDATE driver_update SET drivername='$drivername',busno='$busno',udate='$date',route='$route',kmupdate='$km',fuelupdate='$fuel',shift='$shift' WHERE d_id='$did'";
    $data = mysqli_query($con, $query);
    
    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
        
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/driverupdateform.php">
        <?php
    }
    else
    {
        echo "<script>alert('Update Failed!')</script>";
    }
}
?>


<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->
