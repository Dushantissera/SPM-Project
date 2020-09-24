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

.flip-card {
  position: absolute;
  left: 100px;
  background-color: transparent;
  width: 250px;
  height: 250px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
}
.flip-card2 {
  position: absolute;
  left: 450px;
  background-color: transparent;
  width: 250px;
  height: 250px;
  perspective: 1000px;
}

.flip-card2-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card2:hover .flip-card2-inner {
  transform: rotateY(180deg);
}

.flip-card2-front, .flip-card2-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card2-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}

.flip-card2-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
}
.flip-card3 {
  position: absolute;
  left: 800px;
  background-color: transparent;
  width: 250px;
  height: 250px;
  perspective: 1000px;
}

.flip-card3-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card3:hover .flip-card3-inner {
  transform: rotateY(180deg);
}

.flip-card3-front, .flip-card3-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card3-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}

.flip-card3-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
}
.flip-card4 {
  position: absolute;
  left: 1150px;
  background-color: transparent;
  width: 250px;
  height: 250px;
  perspective: 1000px;
}

.flip-card4-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card4:hover .flip-card4-inner {
  transform: rotateY(180deg);
}

.flip-card4-front, .flip-card4-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card4-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}

.flip-card4-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
}
.project_titile{
  position: relative;
  top:300px;

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
  top: 700px;
  left: 200px;
}
.pro2{
  position: absolute;
  top: 700px;
  left: 600px;
}
.pro3{
  position: absolute;
  top: 700px;
  left: 1000px;
}
.progimg{
  position: absolute;
  top: 1250px;
  left: 200px;
}
.graimg{
  position: absolute;
  top: 1250px;
  left: 650px;
}
.dataimg{
  position: absolute;
  top: 1288px;
  left: 1100px;
}
.project_start{
  position: relative;
  top: 800px;
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
    <a href="joinpage.php">Join</a>
  </div>
</div>
<center>
  <br><br>
<p>
  <h1>Crowd favorites</h1>
  <h1>Here are some of our most popular clients:</h1>
</p>
</center>
<br><br>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images1.jpg" alt="Avatar1" style="width:250px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h1>Rob</h1> 
      <p>Web Devoloper</p> 
      <p>Rob@gmail.com</p>
    </div>
  </div>
</div>
<div class="flip-card2">
  <div class="flip-card2-inner">
    <div class="flip-card2-front">
      <img src="images2.jpg" alt="Avatar2" style="width:250px;height:250px;">
    </div>
    <div class="flip-card2-back">
      <h1>Sam</h1> 
      <p>SE Architect</p> 
      <p>Sam@gmail.com</p>
    </div>
  </div>
</div>
<div class="flip-card3">
  <div class="flip-card3-inner">
    <div class="flip-card3-front">
      <img src="images3.jpg" alt="Avatar3" style="width:250px;height:250px;">
    </div>
    <div class="flip-card3-back">
      <h1>John</h1> 
      <p>Java Programmer</p> 
      <p>John@gmail.com</p>
    </div>
  </div>
</div>
<div class="flip-card4">
  <div class="flip-card4-inner">
    <div class="flip-card4-front">
      <img src="images4.jpg" alt="Avatar4" style="width:250px;height:250px;">
    </div>
    <div class="flip-card4-back">
      <h1>Peter</h1> 
      <p>Graphic Designer</p> 
      <p>Peter@gmail.com</p>
    </div>
  </div>
</div>
<div class="project_titile">
  <p>
    <center><h1>Some of Our Clients Projects:</h1></center>
  </p>
</div>

<div class="project_start">
  <p>
    <center><h1>Get your project started now...</h1></center>
  </p>
</div>
<div class="progimg">
  <a href="postproject.php"><img src="proimg.png" style="width: 200px;height: 200px;"></a>
  <p><b>Programming</b></p>
</div>
<div class="graimg">
  <a href="postproject.php"><img src="graimg.png" style="width: 200px;height: 200px;"></a>
  <p><b>Graphic Design</b></p>
</div>
<div class="dataimg">
  <a href="postproject.php"><img src="dataimg.png" style="width: 160px;height: 160px;"></a>
  <p><b>Data Entry</b></p>
</div>

<div class="footer">
  <h5>GetJob.LK ® is a registered Trademark of GetJob Technology Pty Limited

Copyright © 2019 GetJob Technology Pty Limited</h5>
</div>

</body>
</html>
