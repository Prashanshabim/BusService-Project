<!--Header--> 
<?php 
include('dashboardheader.php'); 
?>
<!--Header End--> 
  <!--Table-->
<div class="col-sm-9 mt-5">
  <p class="bg-dark text-white p-2" style="text-align:center;">Driver Update</p>
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
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../database/db_connect.php');
        $query = "select * from driver_update";
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
            <td>".$result['shift']."</td>
            <td><a href ='update_driverform.php?did=$result[d_id]&dn=$result[drivername]&busno=$result[busno]&date= $result[udate]&route=$result[route]&km=$result[kmupdate]&fuel= $result[fuelupdate]&shift=$result[shift]'><button>Update</button></td>
            <td><a href ='delete_driverform.php?did=$result[d_id]' onclick = 'return checkdelete()'><button>Delete</button></td>
            </tr>
            ";
        }
    }else{
        echo "No records found";
    }
?>
        <script>
          function checkdelete(e){
          e.preventDefault();
          return Confirm("Are you sure you want to Delete this Record?");
       }
       </script>

    </tbody>
  </table>
</div>

      <div>
        <a class="btn btn-danger box" href="adddriverupdateform.php">ADD</a>
      </div>

<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->