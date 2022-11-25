<div class="col-sm-8 col-md-9 mt-5">
 <!--Table 1-->
    <p style="text-align:center; font-family:Ubunty sans-serif; font-size: 2em; font-weight: bold;">Today's Bus Schedule
    </p>
   
  <table class="table" style="margin: 50px; font-size:16px; border: 1px solid black;">
    <thead>
      <tr >
      <th scope="col">Bus ID</th>
        <th scope="col">Bus Number</th>
        <th scope="col">Bus Driver</th>
        <th scope="col">Driver Helper</th>
        <th scope="col">Route</th>
        <th scope="col">Shift</th>
        <th scope="col">Highway</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('./database/db_connect.php');
        $query = "select * from bus_schedule";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data)){
            ?>
            <tr>
            <th> <?php echo $result['b_id']; ?></th>
            <th> <?php echo $result['bus_number']; ?></th>
            <td> <?php echo $result['bus_driver']; ?></td>
            <td> <?php echo $result['driver_helper']; ?></td>
            <td> <?php echo $result['route']; ?></td>
            <td> <?php echo $result['shift']; ?></td>
            <td> <?php echo $result['highway']; ?></td>
            <td> <?php echo $result['date']; ?></td>
            <?php
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