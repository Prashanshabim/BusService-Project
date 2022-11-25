<!--Header--> 
<?php 
  include('dashboardheader.php'); 
?>
<!--Header End--> 
<!--Header End--> 
<div class="col-sm-20 col-md-9 mt-5">
 <!--Table 1-->
    <p class="bg-dark text-white p-2" style="text-align:center;">Searched Data</p>
    <div class="container my-2" style="float:right;">
    <form action="search_vehicle.php" method="POST">
        <input type="text" placeholder="Search here" name="searchText">
        <button class="btn btn-dark btn-sm" name="search">Search</search>
    </form>
</div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Vehicle ID</th>
        <th scope="col"> Bus Name</th>
        <th scope="col">Bus Number</th>
        <th scope="col">Company</th>
        <th scope="col">Bus Type</th>
        <th scope="col">Date</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../database/db_connect.php');
        if($_SERVER['REQUEST_METHOD'] == "POST"){
           $search = $_POST['searchText'];

    $query = "select * from `vehicle` where `vehicle`.`v_id` like '%$search%' or `vehicle`.`busname` like '%{$search}%' or `vehicle`.`busnumber` like '%{$search}%' or `vehicle`.`company` like '%{$search}%' or `vehicle`.`bustype` like '%$search%' or `vehicle`.`date` like '%$search%' or `vehicle`.`description` like '%$search%'";
        
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
            echo "
              <tr>
              <th>".$result['v_id']."</th>
              <td>".$result['busname']."</td>
              <td>".$result['busnumber']."</td>
              <td>".$result['company']."</td>
              <td>".$result['bustype']."</td>
              <td>".$result['date']."</td>
              <td>".$result['description']."</td>";
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