<!--Header--> 
<?php 
//session_start();
include('dashboardheader.php'); 
if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password=md5($password);
        $repassword=$_POST['repassword'];
        $repassword=md5($repassword);
        $phonenum=$_POST['phonenum'];
        $usertype=$_POST['usertype'];
         
       include('../database/db_connect.php');
        //email checking
        $checkEmailExistance = "SELECT * FROM user WHERE email='$email'";
        $email_query_run = mysqli_query($con,$checkEmailExistance);
        if(mysqli_num_rows($email_query_run) > 0)
        {
            echo"<script>alert('Email Already Taken Please Try Another One!')</script>";

        }else{
        //password Checking
        if($password === $repassword){
        $query="insert into user(username,email,password,phonenum,usertype) values('$username','$email','$password',$phonenum,'$usertype')";
        }else{
            echo"<script>alert('Password doesnot match please register again!')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/adduser.php">
            <?php

        }
        $result=mysqli_query($con,$query)or die(mysqli_error($con));
        if($query)
        {   
            echo"<script>alert('Registration Successful!')</script>";
            ?>
             <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/users.php">
             <?php
        }
        else
        {
            echo "<script>alert('Please! Register Again!')</script>";
            ?>
             <META HTTP-EQUIV="Refresh" CONTENT="0;">
             <?php
        }
        }
    
    }
    
?>
<!--Header End--> 
<!--Form-->
<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
    <h3 class="text-center">Add New User</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="repassword"> Confirm Password</label>
            <input type="password" class="form-control" id="repassword" name="repassword" required>
        </div>
        
        <div class="form-group">
            <label for="phonenum">Phone Number</label>
            <input type="text" class="form-control" id="phonenum" name="phonenum" required>
        </div>
        
        <div>
        <label for="Usertype">Usertype</label>
        <select class="form-select" name="usertype" id="usertype"  aria-label="multiple select" required>
            <option disabled selected>Select usertype</option>
            <option value="1">Student</option>
            <option value="2">Employee</option>
            <option value="3">Driver</option>
        </select>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submit" name="submit">Submit</button>
            <a href="users.php" class="btn btn-secondary">Close</a>
        </div>
    </form>
</div>

</div>  <!--div row close from header-->
</div>  <!--div container-fluid close from header-->
<!--End of form-->


<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->