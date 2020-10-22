<?php
$server="localhost";
$usename1="root";
$password12="";
$dbname="GetJob";

$con=mysqli_connect($server,$usename1,$password12,$dbname);
	
$serv=$_POST['what'];
$une=$_POST['uname'];
$pasw=$_POST['psw'];
$cpasw=$_POST['cpsw'];
$mail=$_POST['email'];

	if ($pasw==$cpasw) {
		$sql="INSERT INTO user (service,name,email,password) VALUES ('$serv','$une' ,'$mail', '$pasw')";

		if(mysqli_query($con,$sql)){
		header("location: success_join.php");
		}
		else{
		header("location: error.php");
		}
	}
	else{
		header("location: error.php");
	}
	mysqli_close($con);
	

?>