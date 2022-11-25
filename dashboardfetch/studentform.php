<!--Header--> 
<?php 
include('dashboardheader.php'); 
?>
<!--Header End--> 
<div class="col-sm-7 col-md-6 mt-5">
 <!--Table 1-->
    <p class="bg-dark text-white p-2" style="text-align:center; width: 169%;">Student Request Form 
    <br>
        Details
    </p>
    <div class="container my-2" style="float:right;">
    <form action="search_studentform.php" method="POST"  enctype="multipart/form-data">
        <input type="text" placeholder="Search here" name="searchText">
        <button class="btn btn-dark btn-sm" name="search">Search</search>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Student ID</th>
        <th scope="col">Name</th>
        <th scope="col">Mobile No.</th>
        <th scope="col">Guardain Name</th>
        <th scope="col">Guardain No.</th>
        <th scope="col">Recent Address</th>
        <th scope="col">Batch</th>
        <th scope="col">Faculty</th>
        <th scope="col">Semester</th>
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
        $query = "select * from student_registration";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
            ?>
            <tr>
            <th> <?php echo $result['s_id']; ?></th>
            <td> <?php echo $result['fullname']; ?></td>
            <td> <?php echo $result['mobilenum']; ?></td>
            <td> <?php echo $result['familymembername']; ?></td>
            <td> <?php echo $result['parentnum']; ?></td>
            <td> <?php echo $result['recentadd']; ?></td>
            <td> <?php echo $result['batch']; ?></td>
            <td> <?php echo $result['faculty']; ?></td>
            <td> <?php echo $result['semester']; ?></td>
            <td> <?php echo $result['route']; ?></td>
            <td> <?php echo $result['shift']; ?></td>
            <td> <?php echo $result['highway']; ?></td>
            <td> <img src="<?php echo $result['image']; ?>" height="100px" width="100px"></td>

            <?php 
            echo "
            <td><a href = 'update_studentreg.php?sid=$result[s_id]&sn=$result[fullname]&dob=$result[dob]&email=$result[email]&mobilenum=$result[mobilenum]&gender=$result[gender]&occupation=$result[occupation]&fathername$result[fathername]&mothername$result[mothername]&
            &familymembername=$result[familymembername]&fatheroccupation=$result[fatheroccupation]&motheroccupation=$result[motheroccupation]&parentnum= $result[parentnum]&addtype=$result[addtype]&nationality$result[nationality]&district=$result[district]&municipality=$result[municipality]&ward=$result[ward]&recentadd= $result[recentadd]
            &batch=$result[batch]&faculty= $result[faculty]&semester=$result[semester]&route=$result[route]& shift=$result[shift]&highway=$result[highway]
            &image=$result[image]'><button>Update</button></td>
            <td><a href = 'delete_studentreg.php?sid=$result[s_id]' onclick = 'return checkdelete()'><button>Delete</button></td>
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
    <a class="btn btn-danger box" href="addstudentform.php">ADD</a>
</div>
<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->