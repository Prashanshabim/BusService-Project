<?php
// $con= new mysqli('localhost','root','','buce')or die("Could not connect to mysql".mysqli_error($con));
$con= mysqli_connect('localhost','root','','busservice');
if(!$con){
    die("Could not connect to mysql".mysqli_connect_error($con));
}
?>