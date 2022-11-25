<!--Header--> 
<?php 
include('dashboardheader.php'); 
?>
<div class="col-sm-9 mt-5">
  <!--Table-->
  <p class="bg-dark text-white p-2" style="text-align:center;">User's Feedback</p>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Feedback ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Comments</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../database/db_connect.php');
        $query = "select * from feedback";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
          echo "
            <tr>
            <th>".$result['f_id']."</th>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td>
            <td>".$result['comments']."</td>
            <td><a href = 'delete_feedback.php?fid=$result[f_id]' onclick = 'return checkdelete()'><button>Delete</button></td>
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

   

<!--Footer--> 
<?php
include('dashboardfooter.php');
?>
<!--Footer End-->