<?php
session_start();
include "database/db_connect.php";
if(isset($_GET['token']) && isset($_GET['u_id'])){
    // Check the details in table
    // Assuming user_id=1 and key= 3456 exists in db
    $token = $_GET['token'];
    $u_id = $_GET['u_id'];
	$query1 = "select * from validate where token='$token' AND u_id='$u_id'";
    $result1 = mysqli_query($con, $query1);
	$number_of_rows = mysqli_num_rows($result1);
    $row = mysqli_fetch_assoc($result1);
    
    if($row != 0){
        // token is valid

        echo "login validated";
        $_SESSION['validated'] = TRUE;
        $url = "/project/".$_SESSION['usertype'].".php";
        header("Location: $url");

    }else{
        echo "NOT FOUND";
    }

}else{
   header("Location: /Project/");
}


?>