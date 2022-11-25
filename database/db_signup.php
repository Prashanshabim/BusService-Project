<?php
include('database/db_connect.php');
?>

<!--signupdatabase -->

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
if(isset($_POST['signupbtn']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password=md5($password);
        $repassword=$_POST['repassword'];
        $repassword=md5($repassword);
        $phonenum=trim($_POST['phonenum']);
        $usertype=$_POST['usertype'];

        //mobile number checking
        if(!(preg_match("/^[9][78][0-9]{8}$/",$phonenum))){
            echo"<script>alert('Please Enter Mobile Number correctly!'</script>";
        
        }
        //email checking
        $checkEmailExistance = "SELECT * FROM user WHERE email='$email'";
        $email_query_run = mysqli_query($con,$checkEmailExistance);
        if(mysqli_num_rows($email_query_run) > 0)
        {
            echo"<script>alert('Email Already Taken Please Try Another One!')</script>";

        }else {
        //password Checking
        if($password === $repassword){
        $query="insert into user(username,email,password,phonenum,usertype) values('$username','$email','$password',$phonenum,'$usertype')";
        }else{
            echo"<script>alert('Password doesnot match please register again!')</script>";
        }
        $result=mysqli_query($con,$query)or die(mysqli_error($con));
        if($query)
        {   
            echo"<script>alert('Registration Successful!')</script>";
            echo"<meta http-equiv='refresh' content='0'>";
        }
        else
        {
            echo "<script>alert('Please! Register Again!')</script>";
            echo "<meta http-equiv='refresh' content='0'>";
        }
        }
    
    }
    
         ?>
<!--signupdatabase end-->
