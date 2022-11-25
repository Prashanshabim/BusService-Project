<!--Header--> 
<?php 
include('dashboardheader.php'); 
?>
<!--Header End--> 
<div class="col-sm-15 col-md-9 mt-5">
 <!--Table 1-->
    <p class="bg-dark text-white p-2" style="text-align:center;">Employee Request Form 
    <br>
        Details
    </p>
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
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../database/db_connect.php');
        $query = "select * from employee_registration";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
            ?>
            <tr>
            <th> <?php echo $result['e_id']; ?></th>
            <td> <?php echo $result['fullname']; ?></td>
            <td> <?php echo $result['mobilenum']; ?></td>
            <td> <?php echo $result['otherfamilymembername']; ?></td>
            <td> <?php echo $result['parentnum']; ?></td>
            <td> <?php echo $result['recentadd']; ?></td>
            <td> <?php echo $result['route']; ?></td>
            <td> <?php echo $result['shift']; ?></td>
            <td> <?php echo $result['highway']; ?></td>
            <td> <img src="/project/<?php echo $result['image']; ?>" height="100px" width="100px"></td>
            <?php 
             echo "
            <td><a href = 'update_empreg.php?eid=$result[e_id]&en=$result[fullname]&mobilenum=$result[mobilenum]&otherfamilymembername=$result[otherfamilymembername]&parentnum=$result[parentnum]&recentadd=$result[recentadd]
            &route=$result[route]&shift=$result[shift]&highway= $result[highway]&image= $result[image]'><button>Update</button></td>
            <td><a href = 'delete_empreg.php?eid=$result[e_id]' onclick = 'return checkdelete()'><button>Delete</button></td>
            </tr>
            ";
            

            //echo "<td><img src='http://localhost/Project/images/bus1.jpg'></td>";
            
            //echo "<td>".$result['signatureimage']."</td>
            //<td>".$result['idcardimage']."</td>
            
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
    <a class="btn btn-danger box" href="addemployeeform.php">ADD</a>
</div>
<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->