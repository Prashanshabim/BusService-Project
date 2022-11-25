<!--Header--> 
<?php 
  include('dashboardheader.php'); 
?>
<!--Header End--> 
 
<div class="col-sm-20 col-md-9 mt-5">
    <p class="bg-dark text-white p-2" style="text-align:center;">Users Registration</p>
    <div class="container my-2" style="float:right;">
    <form action="search_user.php" method="POST">
        <input type="text" placeholder="Search here" name="searchText">
        <button class="btn btn-dark btn-sm" name="search">Search</search>
    </form>
</div>
<!--Table 1-->
  <table class="table">
    <thead>
      <tr>
        <th scope="col">User ID</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Usertype</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../database/db_connect.php');
        $query = "select user.r_id as roll, username, email, phonenum, name, role.r_id as role_id from user INNER JOIN role on user.usertype=role.r_id ";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
          echo "
            <tr>
            <th>".$result['roll']."</th>
            <td>".$result['username']."</td>
            <td>".$result['email']."</td>
            <td>".$result['phonenum']."</td>
            <td>".$result['name']."</td>";
            $link = "update_user.php?sn=" . $result['roll'] . "&un=" . $result['username'] . "&em=" . $result['email'] . "&pn=" . $result['phonenum'] . "&name=" . $result['name'] . "&role_id=" . $result['role_id'];
            echo "<td><a href = '$link'/>". "<button>Update</button></td>";
            echo "<td><a href = 'delete_user.php?sn=$result[roll]' onclick = 'return checkdelete()'><button>Delete</button></td>";
            echo "</tr>";
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
    </div>

      <div>
        <a class="btn btn-danger box" href="adduser.php">ADD</a>
      </div>

<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->