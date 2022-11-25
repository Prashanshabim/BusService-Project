<!--Header--> 
<?php 
include('dashboardheader.php'); 
include('../database/db_connect.php');
error_reporting(0);

$r_id = $_GET['sn'];//id
$un = $_GET['un'];//username
$em = $_GET['em'];//email
$pn = $_GET['pn'];//phonenumber
$name = $_GET['name'];//usertype
$role_id = $_GET['role_id'];


?>
<!--Header End--> 
<!--Form-->
<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
    <h3 class="text-center">Edit User</h3>
    <form action="#" method="POST">
        
    <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" id="username" name="username" value ="<?php echo "$un" ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value ="<?php echo "$em" ?>" required>
        </div>
        
        <div class="form-group">
            <label for="phonenum">Phone Number</label>
            <input type="tel" class="form-control" id="phonenum" name="phonenum" value ="<?php echo "$pn" ?>" required>
        </div>
        
        <div>
        <label for="Usertype">Usertype</label>

        <select class="form-select" name="usertype" id="usertype" aria-label="multiple select" value ="<?php echo "$name" ?>">
            
            <option selected value=<?php echo $role_id ?>><?php echo $name ?></option>
            <?php
            $sql = "select * from role where r_id!=$role_id";
            $result = mysqli_query($con,$sql);
            echo mysqli_num_rows($result);
            if(mysqli_num_rows($result)!=0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
            ?>
            <option value="<?php echo $row['r_id']; ?>"><?php echo $row['name'];?></option>
            <?php
                }
            }
            ?>
        </select>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submit" name="submit">Update</button>
            <a href="users.php" class="btn btn-secondary">Close</a>
        </div>
        <text name="id" style="display: none;" value="<?php $r_id;?>" name="rid"/>
    </form>
</div>

</div>  <!--div row close from header-->
</div>  <!--div container-fluid close from header-->
<!--End of form-->
<?php
if(isset($_POST['submit']))
{
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $phonenum = $_POST['phonenum'];
    $usertype = $_POST['usertype'];

    $query = "UPDATE USER SET username='$uname', email='$email', phonenum ='$phonenum', usertype='$usertype' WHERE r_id='$r_id'";
    $data = mysqli_query($con, $query);
    
    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
        
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/users.php">
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