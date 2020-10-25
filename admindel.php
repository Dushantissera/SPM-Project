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

  
    $sql1="DELETE FROM project WHERE project_name='$proname'";

    if(mysqli_query($con,$sql1)){
    header("location: success_del.php");
    }
    else{
    header("location: error.php");
    }

    
  mysqli_close($con);
?>
