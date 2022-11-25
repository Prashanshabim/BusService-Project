<?php
include('dashboardheader.php');
include "../database/db_connect.php";
$students_query = "select * from user where usertype=1";
$students_data = mysqli_query($con,$students_query);
$students_total = mysqli_num_rows($students_data);

$emp_query = "select * from user where usertype=2";
$emp_data = mysqli_query($con,$emp_query);
$emp_total = mysqli_num_rows($emp_data);

$driver_query = "select * from user where usertype=3";
$driver_data = mysqli_query($con,$emp_query);
$driver_total = mysqli_num_rows($driver_data);


if(isset($_POST['add']))
    {
        $name=$_POST['name'];

        //usertype checking
       
        $checkExistance = "SELECT * FROM role WHERE name='$name'";
        $check_query_run = mysqli_query($con,$checkExistance);
        if(mysqli_num_rows($check_query_run))
        {
            echo"<script>alert('Usertype Already Exist!')</script>";
            echo"<meta http-equiv='refresh' content='0'>";
        }else{
         //insert into database 
         $query = "INSERT INTO `role`(`r_id`, `name`) VALUES ('','$name')";
         $result=mysqli_query($con,$query)or die(mysqli_error($con));
         if($query)
         {
             echo"<script>alert('New Usertype Added Successfullyl!')</script>";
             echo"<meta http-equiv='refresh' content='0'>";
         }
         else
         {
             echo "<script>alert('Cannot Add!Please Try again')</script>";
             echo "<meta http-equiv='refresh' content='0'>";
         }
         }
     }

?>

<div class="col-sm-9 mt-5">
  <div class="row mx-5 text-center">
      <div class="col-sm-4 mt-5">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-header">Total Students</div>
            <div class="card-body">
              <h4 class="card-title">
                <?php echo $students_total; ?>  
              </h4>
              <a class="btn text-white" href="users.php">View</a>
            </div>
          </div>
        </div> 
          <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
              <div class="card-header">Total Employees</div>
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo $emp_total; ?>
                  </h4>
                  <a class="btn text-white" href="users.php">View</a>
                </div>
              </div>
            </div> 
              <div class="col-sm-4 mt-5">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                  <div class="card-header">Total Driver</div>
                    <div class="card-body">
                      <h4 class="card-title">
                       <?php echo $driver_total; ?>
                      </h4>
                        <a class="btn text-white" href="users.php">View</a>
                    </div>
                  </div>
                </div> 
              </div>
                <div class="mx-5 mt-5 text-center">
                <!--Table-->
                  <p class="bg-dark text-white p-2">Add New User Type</p>
                    <table class="table">
                           <!--Form-->
                      <div class="col-sm-5 mt-5 mx-5 jumbotron" style="background-color:#F0F8FF;">
                        <form action="" method="POST">
                          <fieldset>
                          <div class="form-group">
                              <label for="name"><b>User Type</b></label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="e.g teacher..." required>
                              <br>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-danger" id="add" name="add">ADD</button>
                            <button type="reset" class="btn btn-secondary">Reset</a>
                          </div>
                          </fieldset>
                        </form>
                      </div>
                  <!--End of form-->
                  </table>
        </div> <!-- div Row close from header -->
        </div> <!-- div container-fluid close from header -->
      
<?php
  include('./dashboardfooter.php');
?>  