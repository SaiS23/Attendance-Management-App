<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Attendance Management System </title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../styles.css">
<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
</head>
<body>

<header>

  <h1 id="titl">Attendance Management System </h1>
  <div class="navbar">
  <a href="index.php">Home</a>
  <a href="students.php">Students</a>
  <a href="teachers.php">Faculties</a>
  <a href="attendance.php">Attendance</a>
  <a href="report.php">Report</a>
  <a href="../logout.php">Logout</a>

</div>

</header>

<p style="text-align:center;">

<div class="row">
    <div class="content">
      <p>One step solution for your class room :)</p>
    <img src="../img/tcr.png" height="200px" width="300px" />

  </div>

</div>

</p>

</body>
</html>
