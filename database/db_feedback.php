<?php
include('db_connect.php');
?>
<!--To prevent from re-submission of data-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $comments=$_POST['message'];
        

         //insert into database 
         $query = "INSERT INTO feedback VALUES('','$name','$email','$comments')";
         $result=mysqli_query($con,$query)or die(mysqli_error($con));
         if($query)
         {
             echo"<script>alert('Thank you for providing feedback!')</script>";
             echo"<meta http-equiv='refresh' content='0'>";
         }
         else
         {
             echo "<script>alert('Unable to receive feedback please try again!')</script>";
             echo "<meta http-equiv='refresh' content='0'>";
         }
         }

    ?>
