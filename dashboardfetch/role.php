<!--Header--> 
<?php 
include('dashboardheader.php'); 
?>
<!--Header End--> 
<div class="col-sm-7 col-md-7 mt-5">
 <!--Table 1-->
    <p class="bg-dark text-white p-2" style="text-align:center;">Role's
    </p>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Role ID</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../database/db_connect.php');
        $query = "select * from role";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
            ?>
            <tr>
            <th> <?php echo $result['r_id']; ?></th>
            <td> <?php echo $result['name']; ?></td>
            <?php 
             echo "
            <td><a href = 'update_role.php?rid=$result[r_id]&n=$result[name]'><button>Update</button></a>
            <a href = 'delete_empreg.php?rid=$result[r_id]' onclick = 'return checkdelete()'><button>Delete</button></a></td>
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
<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->