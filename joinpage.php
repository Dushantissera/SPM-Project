

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 30px;
}
.modal-content {
  background-color: #fefefe;
  margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

.cancelbtn:hover,
.cancelbtn:focus {
  color: red;
  cursor: pointer;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #0066ff ;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
  cursor: pointer;  
}

.cancelbtn1 {
  position: absolute;
  top: 5%;
  right: 2%;
  width: auto;
  padding: 10px 18px;
  background-color: transparent;
  border: 3px solid white;
  cursor: pointer;
  font-size: 28px;
}

.cancelbtn1:hover,
.cancelbtn1:focus {
  color: red;
  cursor: pointer;
}

.avatar{
  width: 150px;
  border-radius: 50%;
}

.btn3 {
  background-color:#0066ff ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  }
  
</style>
</head>
<body>

<br><br><br><br><br><br><br><br><br>

<button onclick="location.href='http://localhost/Assignment/fristpage.php';" class="cancelbtn1">X</button>

<div class="columns">
  <ul class="price">
    <li class="header">Programming</li>
    <li class="grey">LKR 1999.99 / year</li>
    <li>Web Design & Devolopment</li>
    <li>Database</li>
    <li>QA</li>
    <li>Java Devolopment</li>
    <li class="grey"><button onclick="document.getElementById('id01').style.display='block'" class="button">Join Now</button></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Graphics & Design</li>
    <li class="grey">LKR 999.99 / Year</li>
    <li>Logo Design</li>
    <li>Flyers & Bouchers</li>
    <li>Banner Ads</li>
    <li>Packaging Design</li>
    <li class="grey"><button onclick="document.getElementById('id01').style.display='block'" class="button">Join Now</button></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Data Entry</li>
    <li class="grey">LKR 499.99 / year</li>
    <li>Web Site Content</li>
    <li>Translations</li>
    <li>Email Copy</li>
    <li>Press Releases</li>
    <li class="grey"><button onclick="document.getElementById('id01').style.display='block'" class="button">Join Now</button></li>
  </ul>
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" name="joinform" action="joinserver.php" method="POST">
    <div class="imgcontainer">
      <img src="freelancer-bird.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="what"><b>Join As</b></label>
      <input type="text" placeholder="Enter your service 'EX: Web Devoloper'" name="what" required>

       <label for="uname"><b>User Name</b></label>
      <input type="text" placeholder="Enter User name" name="uname" required>


      <label for="email"><b>E mail</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="cpsw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="cpsw" required>
        
      <button class="btn3" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
    <center><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">X</button></center>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>