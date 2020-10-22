<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 600px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
    
.about {
    position: relative;
    
    width: 50px;
   height: 50px;
border-radius: 10%;
    }
    
    body{
        background-color: whitesmoke;
    }
   
    img {
  opacity: 0.5;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}
    
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


</style>
</head>
<body class="a">
   <div class="topnav">
  <a href="fristpage.php"><img src="freelancer-bird.png" style="width: 40px;height: 18px;"></a>
  <a  href="homepage.php">Home</a>
  <div class="topnav-right">
    <a href="about.php">About</a>
    <a class="active" href="">Contact</a>
    <a href="homejoin.php">Join</a>
  </div>
</div>
    
        <br><br><br>

<center><h1>Get In Touch</h1></center><br><br><br>

<div class="row">
  <div class="column" >
      <center><img class="about" src="img1.jpg" alt="Girl in a jacket"></center>
    <center><h2>Address</h2>
    <p><b>GetJob group</b></p>
      <p>HighLevel Junction</p>
      <p>colombo 07</p>
      </center>
      
  </div>
  <div class="column">
      <center><img class="about" src="img2.png" alt="Girl in a jacket">
      <h2>phone</h2>
    <p><b>Main Office</b></p>
      <p>011-2234567 phone</p>
      <p>011-2234568 Fax</p>
      </center>
    
  </div>
  <div class="column">
      <center><img class="about" src="img3.png" alt="Girl in a jacket"><h2>E-mail</h2>
    <p><b>Main Office</b></p>
      <p>GetJob@gmail.com</p>
          <p><b>Custom care</b></p>
      <p>John@gmail.com</p>
      <p>Rob@gmail.com</p></center>
    
  </div>
</div>

</body>
</html>
