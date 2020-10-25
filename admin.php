<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	img{

		width:600px;
		height: 600px;
	}

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
  padding-top: 60px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
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

.free {
  position: absolute;
  top: 25%;
  right: 6%;
}

p{
  position: absolute;
  top: 36%;
  left: 5%;
  color: white;
  font-size: 46px;
  font-family: cursive, sans-serif;
}


.btn1 {
  position: absolute;
  top: 75%;
  left:15%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:#ff751a;
  color: white;
  font-size: 26px;
  font-family: cursive, sans-serif;
  padding: 22px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.btn2 {
  position: absolute;
  top: 75%;
  right:50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  border: 3px solid white;
  color: white;
  font-size: 26px;
  font-family: cursive, sans-serif;
  padding: 22px 24px;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.btn1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.btn2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.avatar{
  width: 100px;
  height: 100px;
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

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: transparent;
  border: 3px solid white;
  cursor: pointer;
}

	</style>
</head>
<body>
<center><img src="adminonly.png"  onclick="document.getElementById('id01').style.display='block'"></center>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" name="frm" action="adminserver.php">
    <div class="imgcontainer">
      <img src="freelancer-bird.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>ID</b></label>
      <input type="text" placeholder="Enter Admin ID" name="ID" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pw" required>
        
      <button class="btn3" name="login" type="submit" onclick="location.href='http://localhost/Assignment/admin2.php';">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
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
