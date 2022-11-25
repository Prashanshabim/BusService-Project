<?php
//session_start();
session_start();
include "database/db_connect.php";

if (isset($_POST['loginbtn']))
{

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$email = test_input($_POST['email']);
	$password = md5(test_input($_POST['password']));
	// $usertype = test_input($_POST['usertype']);


	$query1 = "select * from user where email='$email' AND password = '$password'";
	echo "<br/>" . $query1 . "<br/>";

	//if($usertype == "student")
		//echo "test";

	$result1 = mysqli_query($con, $query1);
	$number_of_rows = mysqli_num_rows($result1);

	$row = mysqli_fetch_assoc($result1);

	if($email == ''){
		echo "<script>alert('please enter email and password')</script>";
		
	}
	if($password == ''){
		echo "<script>alert('password is required')</script>";
	}
	if($email == '' && $password == ''){
		echo "<script>alert('Email and password is required')</script>";
	}
	if($row != 0)	
	{
		if($row['usertype'] == 1)
		{	
			$_SESSION['usertype'] = "student";
			$_SESSION['username'] = $row['username'];
			
			echo "<script>window.top.location='http://localhost/project/student.php';</script>";
		}
		elseif($row['usertype'] == 2)
		{	
			$_SESSION['usertype'] = "employee";
			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];
			echo "<script>window.top.location='http://localhost/project/employee.php';</script>";
		}
		elseif($row['usertype'] == 3)
		{	
			$_SESSION['usertype'] = "driver";
			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];
			echo "<script>window.top.location='http://localhost/project/driver.php';</script>";
		}
		elseif($row['usertype'] == 4)
		{	
			$_SESSION['usertype'] = "admin";
			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];
			echo "<script>window.top.location='http://localhost/project/dashboardfetch/dashboard.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('Login Unsuccessful!Please enter valid data!');
		 window.top.location='http://localhost/project/index.php';</script>";
	}		
}
?>
