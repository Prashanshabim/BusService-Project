<!--start including header-->
<?php 
include('mainInclude/student_header.php');
//End including header
?>
<marquee direction="right" scrollamount="15">
    <?php
        echo "<h2 style='text-align:center; color:#225470;'>Welcome " . $_SESSION['username'] . "</h2>"; 
    ?>
</marquee>

<?php
//including student_employee_registration_form 
include('stu_registration.php');    

?>

<!--start including footer-->
<?php
include('mainInclude/student_footer.php');
?>
<!--End including footer-->