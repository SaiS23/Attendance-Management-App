


<?php 
  
  include('connect.php');


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System </title>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>

<header>

  <h1 id="titl">Attendance Management System </h1>
  <div class="navbar">
  <a href="index.php">Login</a>

</div>

</header>
<p style="text-align:center">

<div class="content container">
    <div class="row">

    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
    <h3>Recover your password</h3>

      <div class="form-group">

          <label for="input1" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email"  class="form-control" id="input1" placeholder="your email" />
          </div>
      </div>

      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Go" name="reset" />
    </form>

      <br>

      <?php

          if(isset($_POST['reset'])){

          $test = $_POST['email'];
          $row = 0;
          $query = mysqli_query($conn,"select password from admininfo where email = '$test'");
          $row = mysqli_num_rows($query);

          if($row == 0){
?>
      <div  class="content"><p>Email is not associated with any account. </p></div>

<?php
          }

          else{

            $query = mysqli_query($conn,"select password from admininfo where email = '$test'");
            $i =0;
            while($dat = mysqli_fetch_array($query)){
                $i++;
?>
  <strong>
  <p style="text-align: left;">Hi there!<br>You requested for a password recovery. You may <a href="index.php">Login here</a> and enter this key as your password to login. Recovery key: <mark><?php echo $dat['password']; ?></mark><br>Regards,<br>Online Attendance Management System 1.0</p></strong>
<?php
      }
          }
  }


       ?>

  </div>

</div>

</p>

</body>
</html>
