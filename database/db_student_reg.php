<?php
include('db_connect.php');
?>
<!--To prevent from form resubmission-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


<?php
    if(isset($_POST['submitbtn']))
    {
        $fullname=$_POST['fullname'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $mobilenum=$_POST['mobilenum'];
        $gender=$_POST['gender'];
        $occupation=$_POST['occupation'];
        $fathername=$_POST['fathername'];
        $mothername=$_POST['mothername'];
        $familymembername=$_POST['familymembername'];
        $fatheroccupation=$_POST['fatheroccupation'];
        $motheroccupation=$_POST['motheroccupation'];
        $parentnum=$_POST['parentnum'];
        $addtype=$_POST['addtype'];
        $nationality=$_POST['nationality'];
        $district=$_POST['district'];
        $municipality=$_POST['municipality'];
        $ward=$_POST['ward'];
        $recentadd=$_POST['recentadd'];
        $batch=$_POST['batch'];
        $faculty=$_POST['faculty'];
        $semester=$_POST['semester'];
        $route=$_POST['route'];
        $shift=$_POST['shift'];
        $highway=$_POST['highway'];
        $files=$_FILES['file'];//forimage
 
 
        //for photo
        $filename =$files['name'];
        $fileerror =$files['error'];
        $filetmp =$files['tmp_name'];

        //divide string into small components
        $fileext = explode('.',$filename); //fileext-->file extension
        $filecheck = strtolower(end($fileext));

        //format in which the picture should be
        $fileextstored = array('png','jpg','jpeg');
        
        //if the picture is in correct format 
        if(in_array($filecheck,$fileextstored)){
            $destinationfile = '../stuupload/'.$filename;
            move_uploaded_file($filetmp,$destinationfile);
        }    
        
         //checking
        $checkExistance = "SELECT * FROM student_registration WHERE email='$email'";
        $email_query_run = mysqli_query($con,$checkExistance);
        if(mysqli_num_rows($email_query_run) > 0)
        {
            echo"<script>alert('Your Email is already registered!')</script>";
        }else{    
        //insert into database 
        $query="insert into student_registration values('','$fullname','$dob','$email','$mobilenum','$gender','$occupation','$fathername','$mothername','$familymembername','$fatheroccupation','$motheroccupation','$parentnum','$addtype','$nationality','$district','$municipality','$ward','$recentadd','$batch','$faculty','$semester','$route','$shift','$highway','$destinationfile')";
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

