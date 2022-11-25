<!--Header--> 
<?php 
  include('dashboardheader.php'); 
  include('../database/db_connect.php');
?>
<!--Header End--> 
<!--Header End--> 
<div class="col-sm-20 col-md-9 mt-5">
 <!--Table 1-->
    <p class="bg-dark text-white p-2" style="text-align:center;">Searched Data</p>
    <div class="container my-2" style="float:right;">
    <form action="search_driverform.php" method="POST">
        <input type="text" placeholder="Search here" name="searchText">
        <button class="btn btn-dark btn-sm" name="search">Search</search>
    </form>
</div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Driver ID</th>
        <th scope="col">Driver Name</th>
        <th scope="col">Bus No.</th>
        <th scope="col">Date</th>
        <th scope="col">Route</th>
        <th scope="col">KM Travelled</th>
        <th scope="col">Fuel Consumed</th>
        <th scope="col">Shift</th>
      </tr>
    </thead>
    <tbody>
      <?php
        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
           $search = $_POST['searchText'];
 
          $query = "select * from `driver_update` where `driver_update`.`d_id` like '%$search%' or `driver_update`.`drivername` like '%{$search}%' or `driver_update`.`busno` like '%{$search}%' or `driver_update`.`udate` like '%{$search}%' or `driver_update`.`route` like '%$search%' or `driver_update`.`kmupdate` like '%$search%' or `driver_update`.`fuelupdate` like '%$search%' or `driver_update`.`shift` like '%$search%'";
        
          $data = mysqli_query($con,$query);
          $total = mysqli_num_rows($data);

          if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
            echo "
              <tr>
              <th>".$result['d_id']."</th>
              <td>".$result['drivername']."</td>
              <td>".$result['busno']."</td>
              <td>".$result['udate']."</td>
              <td>".$result['route']."</td>
              <td>".$result['kmupdate']."</td>
              <td>".$result['fuelupdate']."</td>
              <td>".$result['shift']."</td>";
              echo "</tr>";

        }
    }else{
        echo "<b>No records found</b>";
    }
  }
?>

      </tbody>
      </table>
    </div>

      <div>
      </div>

<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->