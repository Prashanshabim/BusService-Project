<?php 
include('dashboardheader.php'); 
include('../database/db_connect.php');

error_reporting(0);
$bid=$_GET['bid'];
$bus_number=$_GET['bus_number']; //fullname
$bus_driver=$_GET['bus_driver'];
$driver_helper=$_GET['driver_helper'];
$route=$_GET['route'];
$shift=$_GET['shift'];
$highway=$_GET['highway'];
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
<h3 class="text-center">Edit Bus Schedule</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="bus_number">Bus Number</label>
            <input type="text" class="form-control" id="bus_number" name="bus_number" value="<?php echo "$bid"?>">
        </div>

        <div class="form-group">
            <label for="bus_driver">Bus Driver</label>
            <input type="text" class="form-control" id="bus_driver" name="bus_driver" value="<?php echo "$bus_driver"?>">
        </div>

        <div class="form-group">
            <label for="driver_helper">Driver Helper</label>
            <input type="text" class="form-control" id="driver_helper" name="driver_helper" value="<?php echo "$driver_helper"?>">
        </div>

        <div class="form-group">
            <label for="route">Route</label>
            <br>
            <?php $route=trim($route); ?>
            <select class="form-select" name="route" id="route" aria-label="multiple select" >
                <option disabled >Select Route</option>
                <option value="inside biratnagar(puspalal chowk to college area)" <?php echo $route=="Inside Biratnagar(Puspalal chowk to college area)" ? 'selected' : '' ?>>Inside Biratnagar(puspalal chowk to college area)</option>
                <option value="biratnagar to rangeli" <?php echo $route=="Biratnagar To Rangeli" ? 'selected' : '' ?>>Biratnagar To Rangeli</option>
                <option value="biratnagar to rani" <?php echo $route=="Biratnagar To Rani" ? 'selected' : '' ?>>Biratnagar To Rani</option>
                <option value="biratnagar to biratchowk" <?php echo $route=="Biratnagar To Biratchowk" ? 'selected' : '' ?>>Biratnagar To Biratchowk</option>
                <option value="biratnagar to ithari" <?php echo $route=="Biratnagar To Ithari" ? 'selected' : '' ?>>Biratnagar To Ithari</option>
                <option value="biartnagar to inurwa" <?php echo $route=="Biartnagar To Inurwa" ? 'selected' : '' ?>>Biratnagar To Inurwa</option>
            </select>
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
   
        <div class="form-group">
            <label for="highway">Highway</label>
            <br>
            <?php $highway= trim($highway); ?>
            <select class="form-select" name="highway" id="highway" >
                <option disabled>Select Highway</option>
                <option value="Inside Highway" <?php echo $highway=="Inside Highway" ? 'selected' : '' ?>>Inside Highway</option>
                <option value="Outside Highway" <?php echo $highway=="Outside Highway" ? 'selected' : '' ?>>Outside Highway</option>
            </select>
        </div>
        
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submit" name="submit">Update</button>
            <a href="busschedule_dashboard.php" class="btn btn-secondary">Close</a>
        </div>
    </form>
</div>

<?php
if(isset($_POST['submit']))
{
    $bus_number = $_POST['bus_number'];
    $bus_driver = $_POST['bus_driver'];
    $driver_helper = $_POST['driver_helper'];
    $route = $_POST['route'];
    $shift = $_POST['shift'];
    $highway = $_POST['highway'];

   $query = "UPDATE bus_schedule SET bus_number='$bus_number',bus_driver='$bus_driver',driver_helper='$driver_helper',route='$route',shift='$shift',highway='$highway' WHERE b_id='$bid'";
    $data = mysqli_query($con, $query);
    
    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
        
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/busschedule_dashboard.php">
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
