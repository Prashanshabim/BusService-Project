<!--Header--> 
<?php 
include('dashboardheader.php'); 
include('../database/db_connect.php');
error_reporting(0);
?>
<!--To prevent from form resubmission-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!--Header End--> 
<!--Form-->
<?php
    $sessionemail=trim($_SESSION['email']);
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
    <h3 class="text-center">Change Password</h3>
    <form action="#" method="POST">
        
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" readonly value="<?php echo $sessionemail; ?>">
    </div>
    <br>
    <div class="form-group">
        <label for="password">Old Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="newpassword">New Password</label>
        <input type="password" class="form-control" id="newpasswords" name="newpassword" required>
    </div>
    <div class="form-group">
        <label for="confirmpassword">Confirm Password</label>
        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
    </div>
    <br>

    <div class="text-center">
    <button type="submit" class="btn btn-danger" id="submit" name="submit">Update</button>
        <a href="dashboard.php" class="btn btn-secondary">Close</a>
    </div>
    </form>
</div>

</div>  <!--div row close from header-->
</div>  <!--div container-fluid close from header-->
<!--End of form-->

<?php
if(isset($_POST['submit']))
{
        // $email=$_POST['email'];
        $password=$_POST['password'];
        $password=md5($password);
        $newpassword=$_POST['newpassword'];
        $newpassword=md5($newpassword);
        $confirmpassword=$_POST['confirmpassword'];
        $confirmpassword=md5($confirmpassword);
    
       //email checking
       $checkEmailExistance = "SELECT * FROM user WHERE email='$sessionemail' AND password='$password' AND usertype=4";
       $email_query_run = mysqli_query($con,$checkEmailExistance);
       // var_dump(mysqli_num_rows($email_query_run));die();
       if(mysqli_num_rows($email_query_run) <=0 )
       {
           ?><script>alert("Email or password doesn't exist")</script><?php
       }
       else {
       //password Checking
       if($newpassword === $confirmpassword){
       $query="UPDATE USER SET password='$newpassword' WHERE email='$sessionemail' AND usertype=4";
       }else{
           ?><script>alert('Password and Confirm doesnot match please try again!')</script><?php
       }
       $result=mysqli_query($con,$query)or die(mysqli_error($con));
       if($query)
       {
           ?>
           <script>alert('Password changed succesfullyl!')</script>

           <meta http-equiv='refresh' content='0'>
           <?php
            unset($_SESSION["usertype"]);
            unset($_SESSION["username"]);
            unset($_SESSION["email"]);
        ?>
        <script type="text/javascript">
            location.href = '../index.php';
        </script>
        <?php
       }
       else
       {
           ?>
           <script>alert('Please! Try Again!')</script>
           <meta http-equiv='refresh' content='0'>;
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