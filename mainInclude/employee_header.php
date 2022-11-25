<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>BusService System </title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
		.navbar-inverse{
			background-color: #225470;
			opacity: 0.8;
			padding: 8px;
	        font-size: 17px;
	        
		}
		.navbar-nav{
			padding: 0 0 0 20px;
			color: #fff !important;
		}
		.navbar-right{
			margin-right:100px;
		}
		.navbar-item:hover {
	        background-color: #dc3545;
	        border: solid #dc3545 1px;
	        border-radius: 10px;
}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse" fixed-top>
		<div class="container-fluid">
			<div class="navbar-header ">
				<a class="navbar-brand" href="#" style="font-weight: bold; font-family: 'Ubuntu', sans-serif; font-size: 2em; color:#fff;">BusService</a>
				<span class="navbar-text"  style="color:#fff;">Easy and Quick </span>
            </div>
			<ul class="nav navbar-nav">
			    <li class="nav navbar-item"><a href="employee.php" style="color:#fff;">BusService Form</a></li>
				<li class="nav navbar-item"><a href="busschedule_emp.php" style="color:#fff;">Bus Schedule</a></li>
				
            </ul>
			<ul class="nav navbar-nav navbar-right">
			    <li class="navbar-item"><a href="logout.php"><span class="glyphicon glyphicon-log-out" style="color:#fff;"> LogOut</span></a></li>     
			</ul>
        </div>
    </nav>
</body>
</html>
