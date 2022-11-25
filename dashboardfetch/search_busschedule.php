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
    <form action="search_busschedule.php" method="POST">
        <input type="text" placeholder="Search here" name="searchText">
        <button class="btn btn-dark btn-sm" name="search">Search</search>
    </form>
</div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Bus ID</th>
        <th scope="col">Bus Number</th>
        <th scope="col">Bus Driver</th>
        <th scope="col">Driver Helper</th>
        <th scope="col">Route</th>
        <th scope="col">Shift</th>
        <th scope="col">Highway</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
           $search = $_POST['searchText'];
 
          $query = "select * from `bus_schedule` where `bus_schedule`.`b_id` like '%$search%' or `bus_schedule`.`bus_number` like '%{$search}%' or `bus_schedule`.`bus_driver` like '%{$search}%' or `bus_schedule`.`driver_helper` like '%{$search}%' or `bus_schedule`.`route` like '%$search%' or `bus_schedule`.`shift` like '%$search%' or `bus_schedule`.`highway` like '%$search%' or `bus_schedule`.`date` like '%$search%'";
        
          $data = mysqli_query($con,$query);
          $total = mysqli_num_rows($data);

          if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
            echo "
              <tr>
              <th>".$result['b_id']."</th>
              <td>".$result['bus_number']."</td>
              <td>".$result['bus_driver']."</td>
              <td>".$result['driver_helper']."</td>
              <td>".$result['route']."</td>
              <td>".$result['shift']."</td>
              <td>".$result['highway']."</td>
              <td>".$result['date']."</td>";
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