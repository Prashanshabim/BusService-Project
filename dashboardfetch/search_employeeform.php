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
    <form action="search_employeeform.php" method="POST">
        <input type="text" placeholder="Search here" name="searchText">
        <button class="btn btn-dark btn-sm" name="search">Search</search>
    </form>
</div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Employee ID</th>
        <th scope="col">Name</th>
        <th scope="col">Mobile No.</th>
        <th scope="col">Guardain Name</th>
        <th scope="col">Guardain No.</th>
        <th scope="col">Recent Address</th>
        <th scope="col">Route</th>
        <th scope="col">Shift</th>
        <th scope="col">Highway</th>
      </tr>
    </thead>
    <tbody>
      <?php
        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
           $search = $_POST['searchText'];

         $query = "select * from `employee_registration` where `employee_registration`.`e_id` like '%$search%' or `employee_registration`.`fullname` like '%{$search}%' or `employee_registration`.`mobilenum` like '%{$search}%' or `employee_registration`.`otherfamilymembername` like '%{$search}%' or `employee_registration`.`parentnum` like '%$search%' or `employee_registration`.`recentadd` like '%$search%' or `employee_registration`.`route` like '%$search%' or `employee_registration`.`shift` like '%$search%' or `employee_registration`.`highway` like '%$search%'";
        
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
            echo "
              <tr>
              <th>".$result['e_id']."</th>
              <td>".$result['fullname']."</td>
              <td>".$result['mobilenum']."</td>
              <td>".$result['otherfamilymembername']."</td>
              <td>".$result['parentnum']."</td>
              <td>".$result['recentadd']."</td>
              <td>".$result['route']."</td>
              <td>".$result['shift']."</td>
              <td>".$result['highway']."</td>";
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