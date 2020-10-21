<?php
$server="localhost";
$usename1="root";
$password12="";
$dbname="GetJob";

$con=mysqli_connect($server,$usename1,$password12,$dbname);
  
$proname=$_POST['pname'];
$pserv=$_POST['pserv'];
$cname=$_POST['cname'];
$email=$_POST['email'];
$des=$_POST['des'];
$dead=$_POST['dead'];
$bud=$_POST['bud'];

  
    $sql="INSERT INTO project (project_name,project_service,client_name,client_mail,description,deadline,budget) VALUES ('$proname','$pserv' ,'$cname', '$email','$des','$dead','$bud')";

    if(mysqli_query($con,$sql)){
    header("location: success_project.php");
    }
    else{
    header("location: error.php");
    }
  mysqli_close($con);
?>