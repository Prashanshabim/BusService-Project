<!--start including header-->

<?php
// if(!$_SESSION["r_id"]){
//     header("location:index.php");
//  } 
// if($_SESSION['usertype'] != "driver")
//     echo "<script>window.top.location='http://localhost/project/index.php';</script>";

include('mainInclude/driver_header.php');


//End including header
?>
<marquee direction="right" scrollamount="15">
    <?php
        echo "<h2 style='text-align:center; color:#225470;'>Welcome " . $_SESSION['username'] . "</h2>"; 
    ?>
</marquee>
<?php
include('driver_update.php');


//start including footer

include('mainInclude/driver_footer.php');
?>
</html>
<!--End including footer-->