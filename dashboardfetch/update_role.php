<!--Header--> 
<?php 
include('dashboardheader.php'); 
include('../database/db_connect.php');
error_reporting(0);

$rid = $_GET['rid'];//id
$n = $_GET['n'];//username
?>
<!--Header End--> 
<!--Form-->
<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
    <h3 class="text-center">Edit Role</h3>
    <form action="#" method="POST">
        
    <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value ="<?php echo "$n" ?>" required>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submit" name="submit">Update</button>
            <a href="role.php" class="btn btn-secondary">Close</a>
        </div>
    </form>
</div>

</div>  <!--div row close from header-->
</div>  <!--div container-fluid close from header-->
<!--End of form-->
<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];

    $query = "UPDATE ROLE SET name='$name'";
    $data = mysqli_query($con, $query);
    
    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
        
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/role.php">
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