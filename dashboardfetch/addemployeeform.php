<!--Header--> 
<?php 
//session_start();
include('dashboardheader.php'); 
?>
<!--Header End--> 
 <!--Form-->
<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
    <h3 class="text-center">Add New Employee</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <span class="title" style="text-decoration: underline; font-weight:bold;">Personal Details</span>
        <br>
            <label for="username">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your name" require="">
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter birth date"  require="">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"  require="">
        </div>
        
        <div class="form-group">
            <label for="mobilenum">Mobile Number</label>
            <input type="text" class="form-control" id="mobilenum" name="mobilenum" placeholder="Enter mobile number" require="">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <br>
            <select name="gender" required>
                <option disabled selected>Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
  
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter your occupation" require="">
        </div>

        <div class="form-group">
        <span class="title" style="text-decoration: underline; font-weight:bold;">Guardain Details</span>
        <br>
            <label for="fathername">Father Name</label>
            <input type="text" class="form-control" id="fathername" name="fathername" placeholder="Enter father name" require="">
        </div>

        <div class="form-group">
            <label for="mothername">Mother Name</label>
            <input type="text" class="form-control" id="mothername" name="mothername" placeholder="Enter mother name" require="">
        </div>
        
        <div class="form-group">
            <label for="otherfamilymembername">Family Member Name</label>
            <input type="text" class="form-control" id="otherfamilymembername" name="otherfamilymembername" placeholder="Enter brother/sister/other name" require="">
        </div>

        <div class="form-group">
            <label for="parentnum">Guardain Number</label>
            <input type="text" class="form-control" id="parentnum" name="parentnum" placeholder="Enter parents mobile number" require="">
        </div>

        <div class="form-group">
        <span class="title"  style="text-decoration: underline; font-weight:bold;">Address</span>
        <br>
            <label for="addtype">Address Type</label>
            <input type="text" class="form-control" id="addtype" name="addtype"  placeholder="Enter address type permanent or temporary" require="">
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter Nationality" require="">
        </div>

        <div class="form-group">
            <label for="district">District</label>
            <input type="text" class="form-control" id="district" name="district" placeholder="Enter district" require="">
        </div>

        <div class="form-group">
            <label for="municipality">Municipality</label>
            <input type="text" class="form-control" id="municipality" name="municipality" placeholder="Enter municipality" require="">
        </div>

        <div class="form-group">
            <label for="ward">Ward</label>
            <input type="text" class="form-control" id="ward" name="ward" placeholder="Enter ward" require="">
        </div>

        <div class="form-group">
            <label for="recentadd">Recent Address</label>
            <input type="text" class="form-control" id="recentadd" name="recentadd" placeholder="Enter full recent address" require="">
        </div>

        <div class="form-group">
        <span class="title" style="text-decoration: underline; font-weight:bold;">BusService</span>
        <br>
            <label for="route">Route</label>
            <br>
            <select name="route" required>
                <option disabled selected>Select Route</option>
                <option value="inside biratnagar(puspalal chowk to college area)">Inside Biratnagar(puspalal chowk to college area)</option>
                <option value="biratnagar to rangeli">Biratnagar To Rangeli</option>
                <option value="biratnagar to rani">Biratnagar To Rani</option>
                <option value="biratnagar to biratchowk">Biratnagar To Biratchowk</option>
                <option value="biratnagar to ithari">Biratnagar To Ithari</option>
                <option value="biartnagar to inurwa">Biratnagar To Inurwa</option>
            </select>
        </div>
         
        <div class="form-group">
            <label for="shift">Shift</label>
            <br>
            <select name="shift" required>
                <option disabled selected>Select Shift</option>
                <option value="morning">Morning</option>
                <option value="day">Day</option>
            </select>
        </div>

        <div class="form-group">
            <label for="highway">Highway</label>
            <br>
            <select name="highway" required>
                <option disabled selected>Select Option</option>
                <option value="inside highway">Inside Highway</option>
                <option value="outside highway">Outside Highway</option>
            </select>
        </div>

        <div class="form-group">
        <span class="title" style="text-decoration: underline; font-weight:bold;">Attachment</span>
        <br>
            <label for="photo">Attach Your Photo Here</label>
            <br>
            <input type="file" name="file" id="file" required>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submitok" name="submitok">Submit</button>
            <a href="employeeform.php" class="btn btn-secondary">Close</a>
        </div>
    </form>
</div>

</div>  <!--div row close from header-->
</div>  <!--div container-fluid close from header-->
<!--End of form-->
<?php
    if(isset($_POST['submitok']))
    {
        $fullname=$_POST['fullname'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $mobilenum=$_POST['mobilenum'];
        $gender=$_POST['gender'];
        $occupation=$_POST['occupation'];
        $fathername=$_POST['fathername'];
        $mothername=$_POST['mothername'];
        $familymembername=$_POST['otherfamilymembername'];
        $parentnum=$_POST['parentnum'];
        $addtype=$_POST['addtype'];
        $nationality=$_POST['nationality'];
        $district=$_POST['district'];
        $municipality=$_POST['municipality'];
        $ward=$_POST['ward'];
        $recentadd=$_POST['recentadd'];
        $route=$_POST['route'];
        $shift=$_POST['shift'];
        $highway=$_POST['highway'];
        $files=$_FILES['file'];//for image

        include('../database/db_connect.php');

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
            $destinationfile ='employeeupload/'.$filename;
            $destinationfile1 ='../employeeupload/'.$filename;
            move_uploaded_file($filetmp,$destinationfile1);
        }
         //checking
        $checkExistance = "SELECT * FROM employee_registration WHERE email='$email' AND mobilenum = '$mobilenum'";
        $email_query_run = mysqli_query($con,$checkExistance);
        if(mysqli_num_rows($email_query_run) > 0)
        {
            echo"<script>alert('Your Email is already registered!')</script>";
 
        }else{
        //insert into database 
        $query="insert into employee_registration values('','$fullname','$dob','$email','$mobilenum','$gender',
        '$occupation','$fathername','$mothername','$familymembername','$parentnum','$addtype','$nationality','$district','$municipality','$ward','$recentadd','$route','$shift','$highway','$destinationfile')";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));
        if($query)
        {
            echo"<script>alert('Registration Successful!')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/employeeform.php">
            <?php
        }
        else
        {
            echo "<script>alert('Please! Register Again!')</script>";
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