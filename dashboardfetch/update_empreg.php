<?php 
include('dashboardheader.php'); 
include('../database/db_connect.php');

error_reporting(0);
$eid=$_GET['eid'];
$en=$_GET['en']; //fullname
$mobilenum=$_GET['mobilenum'];
$otherfamilymembername=$_GET['otherfamilymembername'];
$parentnum=$_GET['parentnum'];
$recentadd=$_GET['recentadd'];
$route=$_GET['route'];
$shift=$_GET['shift'];
$highway=$_GET['highway'];
$image=$_GET['image'];
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
<h3 class="text-center">Edit Employee Form</h3>
    <form action="" method="POST"  enctype="multipart/form-data">
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo "$en"?>">
        </div>

        <div class="form-group">
            <label for="mobilenum">Mobile Number</label>
            <input type="text" class="form-control" id="mobilenum" name="mobilenum" value="<?php echo "$mobilenum"?>">
        </div>

        <div class="form-group">
            <label for="otherfamilymemebername">Guardain Name</label>
            <input type="text" class="form-control" id="otherfamilymembername" name="otherfamilymembername" value="<?php echo "$otherfamilymembername"?>">
        </div>

        <div class="form-group">
            <label for="parentnum">Guardain Number</label>
            <input type="text" class="form-control" id="parentnum" name="parentnum" value="<?php echo "$parentnum"?>">
        </div>

        <div class="form-group">
            <label for="recentadd">Recent Address</label>
            <input type="text" class="form-control" id="recentadd" name="recentadd" value="<?php echo "$recentadd"?>">
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
                <!-- <img src="stuupload/<?php echo "$image"?>" style="width:80px;height:60px;">-->
                <input type="file" class="form-control-file" id="file" name="file">
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
    $otherfamilymembername = $_POST['otherfamilymembername'];
    $parentnum = $_POST['parentnum'];
    $recentadd = $_POST['recentadd'];
    $route = $_POST['route'];
    $shift = $_POST['shift'];
    $highway = $_POST['highway'];
    $files = $_FILES['file'];

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

    if ($filename) {
        $query = "UPDATE employee_registration SET fullname='$fullname',mobilenum='$mobilenum',otherfamilymembername='$otherfamilymembername',recentadd='$recentadd',route='$route',shift='$shift',highway='$highway',image='$destinationfile' WHERE e_id='$eid'";

    } else {
        $query = "UPDATE employee_registration SET fullname='$fullname',mobilenum='$mobilenum',otherfamilymembername='$otherfamilymembername',recentadd='$recentadd',route='$route',shift='$shift',highway='$highway' WHERE e_id='$eid'";

    }
    

    $data = mysqli_query($con, $query);
    
    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
        
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/employeeform.php">
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
