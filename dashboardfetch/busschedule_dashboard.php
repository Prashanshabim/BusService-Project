<!--Header--> 
<?php 
include('dashboardheader.php'); 
?>
<div class="col-sm-9 mt-5">
  <!--Table-->
  <p class="bg-dark text-white p-2" style="text-align:center;">Bus Schedule</p>
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
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../database/db_connect.php');
        $query = "select * from bus_schedule";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
          echo "
            <tr>
            <th>".$result['b_id']."</th>
            <th>".$result['bus_number']."</th>
            <td>".$result['bus_driver']."</td>
            <td>".$result['driver_helper']."</td>
            <td>".$result['route']."</td>
            <td>".$result['shift']."</td>
            <td>".$result['highway']."</td>
            <td>".$result['date']."</td>
            <td><a href = 'update_busschedule.php?bid= $result[b_id]&bus_number=$result[bus_number]&bus_driver=$result[bus_driver]&driver_helper=$result[driver_helper]&route=$result[route]&shift=$result[shift]&highway=$result[highway]'><button>Update</button></td>
            <td><a href = 'delete_busschedule.php?bid=$result[b_id]' onclick = 'return checkdelete()'><button>Delete</button></td>
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
    <a class="btn btn-danger box" href="addbusschedule.php">ADD</a>
</div>


   

<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->