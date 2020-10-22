<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 1000px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
    
    h1 {
  font-size: 330%;
}
    
    p {
  font-size: 125%;
}
    
    div.print {
    position: absolute;
    top: 10%;
    left: 5%;
   width: 550px;
   height: 350px;
    border-radius: 10%;
    }

.about {
    position: absolute;
    top: 28%;
    right: 10%;
   width: 550px;
   height: 350px;
    border-radius: 10%;
}

ul {
  list-style: none;
  font-size: 125%;
}

ul li:before {
  content: '✓';
  color: greenyellow;
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
<body bgcolor="#eaeae1">

<div class="topnav">
  <a href="fristpage.php"><img src="freelancer-bird.png" style="width: 40px;height: 18px;"></a>
  <a href="homepage.php">Home</a>
  <div class="topnav-right">
    <a class="active" href="about.php">About</a>
    <a href="contactus.php">Contact</a>
    <a href="homejoin.php">Join</a>
  </div>
</div>
<div class="row">
  <div class="column" >
      <div class="print">
    <h1>Need work done?</h1>
    <p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes.,</p>
      <p>
      Whatever your needs, there will be a freelancer to get it done: from web design, mobile app development, virtual assistants, product manufacturing, and graphic design (and a whole lot more).</p>

<p>With secure payments and thousands of reviewed professionals to choose from, Freelancer.com is the simplest and safest way to get work done online</p>
    
<h1>What's great about it?</h1>
    
<ul>
  <li>You only have to pay for work when it has been completed and you're 100% satisfied.</li><br>
  <li>You'll receive free bids from our talented freelancers within seconds.
</li><br>
  <li>We're always here to help. Our support consists of real people who are available 24/7.</li><br>
  <li>You can live chat with your freelancers to get constant updates on the progress of your work.</li><br>
  <li>Keep up-to-date and on-the-go with our time tracker, and mobile app.
</li><br>
    <li>
    Find professionals you can trust by browsing their samples of previous work and reading their profile reviews.
    </li><br>
</ul>
          </div>
    
  </div>
  <div class="column">
      <br><br><br><br><br><br><br><br>

    <img class="about" src="about.jpeg" alt="Girl in a jacket">

  </div>
</div>

</body>
</html>
