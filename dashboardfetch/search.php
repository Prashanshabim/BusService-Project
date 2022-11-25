<!--Header--> 
<?php 
// include('dashboardheader.php'); 
?>
<!--Header End--> 

<!--Footer--> 
<?php
// include('dashboardfooter.php');
?>
<!--Footer End-->


<!--Header--> 
<?php 
// include('dashboardheader.php');
include('../database/db_connect.php');

$total = 0;
if(isset($_POST['submit'])){
    print("DARA SUBMITTED USING FORM");
    $search = $_POST['search'];
    print(gettype($search));

    $sql = "select * from `user` where r_id like '%$search%' or username like '%{$search}%' or email like '%{$search}%' or phonenum like '%{$search}%' or usertype like '%$search%'";
    print($sql);

    $data = mysqli_query($con,$sql);
    $total = mysqli_num_rows($data);

    print_r($data);
}
?>
<!--Header End--> 
<div class="container my-2" style="float:right;">
    <form method="POST">
        <input type="text" placeholder="Search here" name="search">
        <a href="search.php"><button class="btn btn-dark btn-sm" name="submit">Search</search></a>
    </form>
</div>
<div class="container my-5">
    
        <?php
        
 
         if($total!=0){
            echo '<table class="table">
            <thead>
            <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>User Type</th>
            </tr>
            </thead>
            ';
           while($result=mysqli_fetch_assoc($data)){
           echo "
             <tr>
             <th>".$result['roll']."</th>
             <td>".$result['username']."</td>
             <td>".$result['email']."</td>
             <td>".$result['phonenum']."</td>
             <td>".$result['name']."</td>";
             echo "</tr>";
           }
        echo "</table>";
         


        //  $result = mysqli_query($con,$sql);
        //  if($result){
        //     if(mysqli_num_rows($result)>0){
        //         echo '<table class="table">
        //         <thead>
        //         <tr>
        //         <th>User ID</th>
        //         <th>User Name</th>
        //         <th>Email</th>
        //         <th>Phone Number</th>
        //         <th>User Type</th>
        //         </tr>
        //         </thead>
        //         ';

        //         echo '<tbody>';
        //         while($row=mysqli_fetch_assoc($result)){
        //         echo '<tr>
        //           <td>'.$row['r_id'].'</td>
        //           <td>'.$row['username'].'</td>
        //           <td>'.$row['email'].'</td>
        //           <td>'.$row['phonenum'].'</td>
        //           <td>'.$row['usertype'].'</td>
        //         </tr>';
        //         }
        //         echo '</tbody>';
        //         echo "</table>";
            }else{
                echo '<h2 class=text-danger>Data not found</h2>';
            }
    ?>
