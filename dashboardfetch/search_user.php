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
    <form action="search_user.php" method="POST">
        <input type="text" placeholder="Search here" name="searchText">
        <!-- <a href="search_nab.php"><button class="btn btn-dark btn-sm" name="submit">Search</search></a> -->
        <button class="btn btn-dark btn-sm" name="search">Search</search>
    </form>
</div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">User ID</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Usertype</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../database/db_connect.php');
        if($_SERVER['REQUEST_METHOD'] == "POST"){
    $search = $_POST['searchText'];

        // $query = "select user.r_id as roll, username, email, phonenum, name, role.r_id as role_id from user INNER JOIN role on user.usertype=role.r_id ";
    $query = "select * from `user` where `user`.`r_id` like '%$search%' or `user`.`username` like '%{$search}%' or `user`.`email` like '%{$search}%' or `user`.`phonenum` like '%{$search}%' or `user`.`usertype` like '%$search%'";
        
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
            $usertype = $result['usertype'];
            if($usertype = "1")
            {
                $type="student";
            }
            if($usertype = "2")
            {
                $type="employee";
            }
            if($usertype = "3")
            {
                $type="driver";
            }
            if($usertype = "4")
            {
                $type="admin";
            }
            echo "
              <tr>
              <th>".$result['r_id']."</th>
              <td>".$result['username']."</td>
              <td>".$result['email']."</td>
              <td>".$result['phonenum']."</td>
              <td>".$type."</td>";
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