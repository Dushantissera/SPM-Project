<?php

	$id=$_POST['ID'];
	$pw=$_POST['pw'];

	if($id==admin && $pw==admin123){

		header("location: admin2.php");
	}
	else
	{
		header("location: error.php");
	}


 ?>