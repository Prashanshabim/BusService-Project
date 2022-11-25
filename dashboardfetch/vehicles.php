<!--Header--> 
<?php 
include('dashboardheader.php'); 
?>
<!--Header End--> 

<div class="col-sm-9 mt-5">
  <!--Table-->
  <p class="bg-dark text-white p-2" style="text-align:center;">Vehicle Details</p>
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
        <th scope="col">Bus Image</th>
        <th scope="col">Date</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../database/db_connect.php');
        $query = "select * from vehicle";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
          ?>
            <tr>
            <th> <?php echo $result['v_id']; ?> </th>
            <td> <?php echo $result['busname'];  ?></td>
            <td> <?php echo $result['busnumber']; ?></td>
            <td> <?php echo $result['company']; ?></td>
            <td> <?php echo $result['bustype']; ?></td>
            <td> <img src="/project/uploads/<?php echo $result['bus_img']; ?>" height="100px" width="100px"></td>
            <td> <?php echo $result['date']; ?></td>
            <td> <?php echo $result['description']; ?></td>
            <?php
            echo"
            <td><a href = 'update_vehicle.php?vid=$result[v_id]&bn=$result[busname]&busnum=$result[busnumber]&com=$result[company]&btype=$result[bustype]&bimg=$result[bus_img]&dt=$result[date]&desc=$result[description]'><button>Update</button></td>
            <td><a href = 'delete_vehicle.php?vid=$result[v_id]' onclick = 'return checkdelete()'><button>Delete</button></td>
            </tr>
            ";
        }
    }else{
        echo "No records found";
    }
?>
<script>
       function checkdel(e){
           e.preventDefault();
           return Confirm("Are you sure you want to Delete this Record?");
       }
       </script>

      </tbody>
      </table>

<div>
    <a class="btn btn-danger box" href="addvehicle.php">ADD</a>
</div>

<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->