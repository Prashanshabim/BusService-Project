<?php 
include('dashboardheader.php'); 
include('../database/db_connect.php');
error_reporting(0);
$vid=$_GET['vid'];//vehicleid
$bn=$_GET['bn'];//busname
$busnum=$_GET['busnum'];//busnumber
$com=$_GET['com'];//company
$btype=$_GET['btype'];//bustype
$bimg=$_GET['bimg'];//bus_image
$dt=$_GET['dt'];//date
$desc=$_GET['desc'];//description
?>

<!--Form-->
<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
    <h3 class="text-center">Edit Vehicle</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="bus_name">Bus Name</label>
            <input type="text" class="form-control" id="bus_name" name="bus_name" value="<?php echo "$bn"?>">
        </div>

        <div class="form-group">
            <label for="bus_num">Bus Number</label>
            <input type="text" class="form-control" id="bus_num" name="bus_num" value="<?php echo "$busnum"?>">
        </div>

        <div class="form-group">
            <label for="bus_comp">Bus Company</label>
            <input type="text" class="form-control" id="bus_comp" name="bus_comp" value="<?php echo "$com"?>">
        </div>
        
        
        <div class="form-group">
            <label for="bus_type">Bus Type</label>
            <input type="text" class="form-control" id="bus_type" name="bus_type" value="<?php echo "$btype"?>">
        </div>
        <div class="form-group">
            <label class="form-group">
                <label for="bus_img">Bus Image</label>
                <br>
               <!--  <img src="../uploads/vehicles/<?php echo "$bimg"?>" style="width:80px;height:60px;"> -->
                <input type="file" class="form-control-file" id="file" name="bus_image">
                <!--<input type="hidden" name="file_oldimage" value="<?php echo "$bus_img"?>">-->
            </label>
        </div>
        
        <div class="form-group">
            <label for="bus_date">Date</label>
            <input type="text" class="form-control" id="bus_date" name="bus_date" value="<?php echo "$dt"?>">
        </div>
        
        <div class="form-group">
            <label for="desc">Bus Description</label>
            <input type="text" class="form-control" name="message" row=2 id="message" value="<?php echo "$desc"?>">
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submit" name="submit">Update</button>
            <a href="vehicles.php" class="btn btn-secondary">Close</a>
        </div>
        
    </form>
</div>

</div>  <!--div row close from header-->
</div>  <!--div container-fluid close from header-->
<!--End of form-->
<?php
if(isset($_POST['submit']))
{
    // var_dump($_FILES['bus_image']);die();
    $busname= $_POST['bus_name']; 
    $busnumber= $_POST['bus_num'];
    $company=$_POST['bus_comp'];
    $bustype=$_POST['bus_type'];
    $date=$_POST['bus_date'];
    $description=$_POST['message'];
 
     //for image
    $files=$_FILES['bus_image'];
     $filename =$files['name'];
     $fileerror =$files['error'];
     $filetmp =$files['tmp_name'];

 
     //divide string into small components
     $fileext = explode('.',$filename); 
     //fileext-->file extension
     $filecheck = strtolower(end($fileext));
 
     //format in which the picture should be
     $fileextstored = array('png','jpg','jpeg');
     
     //if the picture is in correct format 
     if(in_array($filecheck,$fileextstored)){
         $destinationfile = '../uploads/'.$filename;
         move_uploaded_file($filetmp,$destinationfile);
     }

     if($filename){
        $query = "UPDATE VEHICLE SET busname='$busname',busnumber='$busnumber',company='$company',bustype='$bustype',bus_img='$destinationfile', date='$date',description='$description' WHERE v_id='$vid'";
     }else{
        $query = "UPDATE VEHICLE SET busname='$busname',busnumber='$busnumber',company='$company',bustype='$bustype', date='$date',description='$description' WHERE v_id='$vid'";
     }

     
     //var_dump($query); die();
     $data = mysqli_query($con, $query);
 
     if($data)
     {
        echo "<script>alert('Record Updated succesfully')</script>";
         ?>
         <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/vehicles.php">
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