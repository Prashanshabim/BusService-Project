<?php
session_start();
if(!isset($_SESSION['usertype'])  || $_SESSION['usertype'] != 'admin'){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!--Bootstrap CSS--> 
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!--Font Awesome CSS-->
  <link rel="stylesheet" href="../css/all.min.css">

  <!--Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!--Custom CSS-->
  <link rel="stylesheet" href="../css/adminstyle.css">

</head>
<body>
    <!--Top Navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php" style="margin:5px;">BusService  
      <small class="text-white" style="font-size:20px;opacity: 0.8; font-weight:light;">Admin Area</small></a>
    </nav>

    <!--Side Bar-->
    <div class="container-fluid mb-5" style="margin-top:40px;">
    <div class="row">
      <nav class="col-sm-3 col-md-2 bg-light slidebar py-5d-print-none">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <br>
                <br>
                <i class="fas fa-tachometer-alt"></i> Dashboard
              </a>
            </li>
            <!--User Registration-->
            <li class="nav-item">
              <a class="nav-link" href="users.php">
                <i class="fa-solid fa-circle-user"></i> Users
              </a>
            </li>
            <!--Role Form-->
            <li class="nav-item">
              <a class="nav-link" href="role.php">
                <i class="fa-solid fa-circle-user"></i> Role
              </a>
            </li>
            <!--Total Buses-->
            <li class="nav-item">
              <a class="nav-link" href="vehicles.php">
                <i class="fa-solid fa-bus"></i> Vehicles
              </a>
            </li>
            
            <!--Student Request Form-->
            <li class="nav-item">
              <a class="nav-link" href="studentform.php">
                <i class="fa-solid fa-pen-clip"></i> Student Bus Form
              </a>
            </li>

            <!--Employee Request Form-->
            <li class="nav-item">
              <a class="nav-link" href="employeeform.php">
                <i class="fa-solid fa-pen-clip"></i> Employee Bus Form
              </a>
            </li>

            <!--Driver Update Form-->
            <li class="nav-item">
              <a class="nav-link" href="driverupdateform.php">
                <i class="fa-solid fa-bus"></i> Driver Update Form
              </a>
            </li>

            <!--Bus Schedule Form-->
            <li class="nav-item">
              <a class="nav-link" href="busschedule_dashboard.php">
                <i class="fa-solid fa-bus"></i> Bus Schedule
              </a>
            </li>


            <!--Feedback-->
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">
                <i class="fab fa-accessible-icon"></i> Feedback 
              </a>
            </li>

             <!--Change Password-->
            <li class="nav-item">
              <a class="nav-link" href="changepassword.php">
                <i class="fas fa-key"></i> Change Password 
              </a>
            </li>

             <!--Logout-->
             <li class="nav-item">
              <a class="nav-link" href="../logout.php">
                <i class="fas fa-sign-out-alt"></i> Logout 
              </a>
            </li>
          </ul>
        </div>
      </nav>
