<?php
include('db_connect.php');
?>

<!--sdriverupdatedatabase -->
<!--To prevent from re-submission of data-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
if(isset($_POST['submitbtn']))
    {
        $drivername=$_POST['drivername'];
        $busno=$_POST['busno'];
        $udate=$_POST['udate'];
        $route=$_POST['route'];
        $kmupdate=$_POST['kmupdate'];
        $fuelupdate=$_POST['fuelupdate'];
        $shift=$_POST['shift'];
        

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
             echo"<meta http-equiv='refresh' content='0'>";
         }
         else
         {
             echo "<script>alert('Update Unsuccessfull! Update Again!')</script>";
             echo "<meta http-equiv='refresh' content='0'>";
         }
         }
     }

    ?>
