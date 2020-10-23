<?php
$server="localhost";
$usename1="root";
$password12="";
$dbname="GetJob";



function display1(){
      $con = mysqli_connect("localhost","root","","GetJob");
      $sql="SELECT * FROM `project` WHERE id='1'";
      $response= @mysqli_query($con,$sql);

      if ($response) {
  echo '<table align="left" cellspacing="5" cellpadding="8">';

  while ($row = mysqli_fetch_array($response)) {

    echo '<tr><td align="left">'.
    $row['project_name'] . '</td></tr><tr><td align="left">' .
    $row['client_name'] . '</td></tr><tr><td align="left">'.
    $row['client_mail'] . '</td></tr><tr><td align="left">'.
    $row['description'] . '</td></tr><tr><td align="left">'.
    $row['deadline'] . '</td></tr>'
     ;
    
    echo '</tr>';
  }

  echo '</table>';

}else{
  echo "Coudn't issue database query ";
  @mysqli_error($con);
}

}

function display2(){
      $con = mysqli_connect("localhost","root","","GetJob");
      $sql="SELECT * FROM `project` WHERE id='2'";
      $response= @mysqli_query($con,$sql);

      if ($response) {
  echo '<table align="left" cellspacing="5" cellpadding="8">';

  while ($row = mysqli_fetch_array($response)) {

    echo '<tr><td align="left">'.
    $row['project_name'] . '</td></tr><tr><td align="left">' .
    $row['client_name'] . '</td></tr><tr><td align="left">'.
    $row['client_mail'] . '</td></tr><tr><td align="left">'.
    $row['description'] . '</td></tr><tr><td align="left">'.
    $row['deadline'] . '</td></tr>'
     ;
    
    echo '</tr>';
  }

  echo '</table>';

}else{
  echo "Coudn't issue database query ";
  @mysqli_error($con);
}

}

function display3(){
      $con = mysqli_connect("localhost","root","","GetJob");
      $sql="SELECT * FROM `project` WHERE id='3'";
      $response= @mysqli_query($con,$sql);

      if ($response) {
  echo '<table align="left" cellspacing="5" cellpadding="8">';

  while ($row = mysqli_fetch_array($response)) {

    echo '<tr><td align="left">'.
    $row['project_name'] . '</td></tr><tr><td align="left">' .
    $row['client_name'] . '</td></tr><tr><td align="left">'.
    $row['client_mail'] . '</td></tr><tr><td align="left">'.
    $row['description'] . '</td></tr><tr><td align="left">'.
    $row['deadline'] . '</td></tr>'
     ;
    
    echo '</tr>';
  }

  echo '</table>';

}else{
  echo "Coudn't issue database query ";
  @mysqli_error($con);
}

}

function display4(){
      $con = mysqli_connect("localhost","root","","GetJob");
      $sql="SELECT * FROM `project` WHERE id='4'";
      $response= @mysqli_query($con,$sql);

      if ($response) {
  echo '<table align="left" cellspacing="5" cellpadding="8">';

  while ($row = mysqli_fetch_array($response)) {

    echo '<tr><td align="left">'.
    $row['project_name'] . '</td></tr><tr><td align="left">' .
    $row['client_name'] . '</td></tr><tr><td align="left">'.
    $row['client_mail'] . '</td></tr><tr><td align="left">'.
    $row['description'] . '</td></tr><tr><td align="left">'.
    $row['deadline'] . '</td></tr>'
     ;
    
    echo '</tr>';
  }

  echo '</table>';

}else{
  echo "Coudn't issue database query ";
  @mysqli_error($con);
}

}

function display5(){
      $con = mysqli_connect("localhost","root","","GetJob");
      $sql="SELECT * FROM `project` WHERE id='5'";
      $response= @mysqli_query($con,$sql);

      if ($response) {
  echo '<table align="left" cellspacing="5" cellpadding="8">';

  while ($row = mysqli_fetch_array($response)) {

    echo '<tr><td align="left">'.
    $row['project_name'] . '</td></tr><tr><td align="left">' .
    $row['client_name'] . '</td></tr><tr><td align="left">'.
    $row['client_mail'] . '</td></tr><tr><td align="left">'.
    $row['description'] . '</td></tr><tr><td align="left">'.
    $row['deadline'] . '</td></tr>'
     ;
    
    echo '</tr>';
  }

  echo '</table>';

}else{
  echo "Coudn't issue database query ";
  @mysqli_error($con);
}

}

function display6(){
      $con = mysqli_connect("localhost","root","","GetJob");
      $sql="SELECT * FROM `project` WHERE id='6'";
      $response= @mysqli_query($con,$sql);

      if ($response) {
  echo '<table align="left" cellspacing="5" cellpadding="8">';

  while ($row = mysqli_fetch_array($response)) {

    echo '<tr><td align="left">'.
    $row['project_name'] . '</td></tr><tr><td align="left">' .
    $row['client_name'] . '</td></tr><tr><td align="left">'.
    $row['client_mail'] . '</td></tr><tr><td align="left">'.
    $row['description'] . '</td></tr><tr><td align="left">'.
    $row['deadline'] . '</td></tr>'
     ;
    
    echo '</tr>';
  }

  echo '</table>';

}else{
  echo "Coudn't issue database query ";
  @mysqli_error($con);
}

}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav-right {
  float: right;
}

.container {
  padding: 2px 16px;
}

.card {
  width: 300px;
  height: 300px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

.pro1{
  position: absolute;
  top: 200px;
  left: 200px;
}
.pro2{
  position: absolute;
  top: 200px;
  left: 600px;
}
.pro3{
  position: absolute;
  top: 200px;
  left: 1000px;
}
.pro4{
  position: absolute;
  top: 600px;
  left: 200px;
}
.pro5{
  position: absolute;
  top: 600px;
  left: 600px;
}
.pro6{
  position: absolute;
  top: 600px;
  left: 1000px;
}

.footer {
  position: relative;
  top: 1295px;
  padding: 20px;
  text-align: center;
  background: white;
}

</style>
</head>
<body bgcolor="#eaeae1">

<div class="topnav">
  <a href="fristpage.php"><img src="freelancer-bird.png" style="width: 40px;height: 18px;"></a>
  <a class="active" href="#home">Home</a>
  <div class="topnav-right">
    <a href="postproject.php" style="color: #0066ff">Post Project</a>
    <a href="about.php">About</a>
    <a href="contactus.php">Contact</a>
    <a href="homejoin.php">Join</a>
  </div>
</div>

<br><br>

<center><h1>Projects For You..</h1></center><br>

<div class="pro1">
<div class="card">
  <div class="container">
    <h4><b><?php display1(); ?></b></h4> 
    <p></p> 
  </div>
</div>
</div>

<div class="pro2">
<div class="card">
  <div class="container">
    <h4><b><?php display2(); ?></b></h4> 
    <p></p> 
  </div>
</div>
</div>

<div class="pro3">
<div class="card">
  <div class="container">
    <h4><b><?php display3(); ?></b></h4> 
    <p></p> 
  </div>
</div>
</div>

<div class="pro4">
<div class="card">
  <div class="container">
    <h4><b><?php display4(); ?></b></h4> 
    <p></p> 
  </div>
</div>
</div>

<div class="pro5">
<div class="card">
  <div class="container">
    <h4><b><?php display5(); ?></b></h4> 
    <p></p> 
  </div>
</div>
</div>

<div class="pro6">
<div class="card">
  <div class="container">
    <h4><b><?php display6(); ?></b></h4> 
    <p></p> 
  </div>
</div>
</div>

<div class="footer">
  <h5>GetJob.LK ® is a registered Trademark of GetJob Technology Pty Limited

Copyright © 2019 GetJob Technology Pty Limited</h5>
</div>

</body>
</html>
