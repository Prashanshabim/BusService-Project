<?php 
include('dashboardheader.php'); 
include('../database/db_connect.php');

error_reporting(0);
$sid=$_GET['sid'];
$sn=$_GET['sn']; //fullname
$mobilenum=$_GET['mobilenum'];
$familymembername=$_GET['familymembername'];
$parentnum=$_GET['parentnum'];
$recentadd=$_GET['recentadd'];
$batch=$_GET['batch'];
$faculty=$_GET['faculty'];
$semester=$_GET['semester'];
$route=$_GET['route'];
$shift=$_GET['shift'];
$highway=$_GET['highway'];
$image=$_GET['image'];
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
<h3 class="text-center">Edit Student Form</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo "$sn"?>">
        </div>

        <div class="form-group">
            <label for="mobilenum">Mobile Number</label>
            <input type="text" class="form-control" id="mobilenum" name="mobilenum" value="<?php echo "$mobilenum"?>">
        </div>

        <div class="form-group">
            <label for="familymemebername">Guardain Name</label>
            <input type="text" class="form-control" id="familymembername" name="familymembername" value="<?php echo "$familymembername"?>">
        </div>

        <div class="form-group">
            <label for="parentnum">Guardain Number</label>
            <input type="text" class="form-control" id="parentnum" name="parentnum" value="<?php echo "$parentnum"?>">
        </div>

        <div class="form-group">
            <label for="recentadd">Recent Address</label>
            <input type="text" class="form-control" id="recentadd" name="recentadd" value="<?php echo trim($recentadd) ?>">
        </div>

        <div class="form-group">
            <label for="batch">Batch</label>
            <input type="text" class="form-control" id="batch" name="batch" value="<?php echo "$batch"?>">
        </div>

        <div class="form-group">
            <label for="faculty">Faculty</label>
            <br>
            <?php $faculty=trim($faculty); ?>
            <select class="form-select" name="faculty" id="faculty" aria-label="multiple select" >
                <option disabled >Select Faculty</option>
                <option value="BIM" <?php echo $faculty=="BIM" ? 'selected' : '' ?>>BIM</option>
                <option value="BCA" <?php echo $faculty=="BCA" ? 'selected' : '' ?>>BCA</option>
                <option value="BSCCSIT" <?php echo $faculty=="BSCCSIT" ? 'selected' : '' ?>>BSCCSIT</option>
                <option value="BHM" <?php echo $faculty=="BHM" ? 'selected' : '' ?>>BHM</option>
                <option value="BBS" <?php echo $faculty=="BBS" ? 'selected' : '' ?>>BBS</option>
            </select>
        </div>

        <div class="form-group">
            <label for="semester">Semester</label>
            <br>
            <select class="form-select" name="semester" id="semester" aria-label="multiple select">
                <option disabled selected>Select Semester</option>
                <option value="1st" <?php echo $semester=="1st" ? 'selected' : '' ?>>1st</option>
                <option value="2nd" <?php echo $semester=="2nd" ? 'selected' : '' ?>>2nd</option>
                <option value="3rd" <?php echo $semester=="3rd" ? 'selected' : '' ?>>3rd</option>
                <option value="4th" <?php echo $semester=="4th" ? 'selected' : '' ?>>4th</option>
                <option value="5th" <?php echo $semester=="5th" ? 'selected' : '' ?>>5th</option>
                <option value="6th" <?php echo $semester=="6th" ? 'selected' : '' ?>>6th</option>
                <option value="7th" <?php echo $semester=="7th" ? 'selected' : '' ?>>7th</option>
                <option value="8th" <?php echo $semester=="8th" ? 'selected' : '' ?>>8th</option>
            </select>
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
        
        <div class="form-group">
            <label class="form-group">
                <label for="image">Image</label>
                <br>
                 <!--<img src="stuupload/<?php echo "$image"?>" style="width:80px;height:60px;">-->
                <input type="file" class="form-control-file" id="file" name="photo">
                <!--<input type="hidden" name="file_oldimage" value="<?php//echo "$image"?>">-->
            </label>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submit" name="submit">Update</button>
            <a href="studentform.php" class="btn btn-secondary">Close</a>
        </div>
    </form>
</div>

<?php
if(isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $mobilenum = $_POST['mobilenum'];
    $familymembername = $_POST['familymembername'];
    $parentnum = $_POST['parentnum'];
    $recentadd = $_POST['recentadd'];
    $batch = $_POST['batch'];
    $faculty = $_POST['faculty'];
    $semester = $_POST['semester'];
    $route = $_POST['route'];
    $shift = $_POST['shift'];
    $highway = $_POST['highway'];
    $files = $_FILES['photo'];

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

    if($filename){
        $query = "UPDATE student_registration SET fullname='$fullname',mobilenum='$mobilenum',familymembername='$familymembername',recentadd='$recentadd',batch='$batch',faculty='$faculty',semester='$semester',route='$route',shift='$shift',highway='$highway',image='$destinationfile' WHERE s_id='$sid'";

    }else{
         $query = "UPDATE student_registration SET fullname='$fullname',mobilenum='$mobilenum',familymembername='$familymembername',recentadd='$recentadd',batch='$batch',faculty='$faculty',semester='$semester',route='$route',shift='$shift',highway='$highway' WHERE s_id='$sid'";

    }

    $data = mysqli_query($con, $query);
    
    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
        
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/studentform.php">
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
