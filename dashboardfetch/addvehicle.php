<!--Header--> 
<?php 
include('dashboardheader.php'); 
include('../database/db_connect.php');

if(isset($_POST['submitBtn'])){
    $busname = $_POST['bus_name'];
    $busnum = $_POST['bus_num'];
    $buscompany = $_POST['bus_comp'];
    $bustype = $_POST['bus_type'];
    $date = $_POST['bus_date'];
    $description = $_POST['message'];
    $files = $_FILES['bus_image'];//forimage
 
 
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
      $destinationfile = '../uploads/vehicles'.$filename;
      move_uploaded_file($filetmp,$destinationfile);
  }
  else{
    echo  "no image found";
  }


    
    //checking
    $checkbusnumExistance = "SELECT * FROM vehicle WHERE busnum='$busnum'& bustype='$bustype'";
    $email_query_run = mysqli_query($con,$checkbusnumExistance);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        echo"<script>alert('Data of this bus number have been already entered!')</script>";
        
    }else{
        //insert into database 
        $sql="insert into vehicle values('','$busname','$busnum','$buscompany','$bustype','$destinationfile','$date','$description')";
        $result=mysqli_query($con,$sql)or die(mysqli_error($con));
        if($sql)
        {
            echo"<script>alert('Recorded Succesfully!')</script>";
            ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/vehicles.php">
        <?php
        }
        else
        {
            echo "<script>alert('Please! Record Again!')</script>";
            ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/dashboardfetch/vehicles.php">
        <?php
        }
    }
    
}

?>
<!--Header End--> 
<!--Form-->
<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color:#F0F8FF;">
    <h3 class="text-center">Add New Vehicle</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="bus_name">Bus Name</label>
            <input type="text" class="form-control" id="bus_name" name="bus_name" required>
        </div>

        <div class="form-group">
            <label for="bus_num">Bus Number</label>
            <input type="text" class="form-control" id="bus_num" name="bus_num" required>
        </div>
        
        <div class="form-group">
            <label for="bus_comp">Bus Company</label>
            <input type="text" class="form-control" id="bus_comp" name="bus_comp" required>
        </div>
        
        <div class="form-group">
            <label for="bus_type">Bus Type</label>
            <input type="text" class="form-control" id="bus_type" name="bus_type" required>
        </div>
        
        <div class="form-group">
            <label class="form-group">
                <label for="file">Bus Image</label>
                <br>
                <input type="file" class="form-control-file" id="file" name="bus_image" required>
            </label>
        </div>
        
        <div class="form-group">
            <label for="bus_date">Date</label>
            <input type="date" class="form-control" id="bus_date" name="bus_date" required>
        </div>
        
        <div class="form-group">
            <label for="desc">Bus Description</label>
            <textarea class="form-control" name="message" row=2 id="message" required></textarea>
        </div>
        <br>

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="submitBtn" name="submitBtn">Submit</button>
            <a href="vehicles.php" class="btn btn-secondary">Close</a>
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