<!--including header-->
<?php
// if(!$_SESSION["r_id"]){
//     header("location:index.php");
//  }
include('mainInclude/employee_header.php');

//End of the header
?>
<marquee direction="right" scrollamount="15">
    <?php
        echo "<h2 style='text-align:center; color:#225470;'>Welcome " . $_SESSION['username'] . "</h2>"; 
    ?>
</marquee>

<?php
include('employee_registration.php');

//Including footer

include('mainInclude/employee_footer.php');
//End of the footer
?>