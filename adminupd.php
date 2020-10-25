<?php
$server="localhost";
$usename1="root";
$password12="";
$dbname="GetJob";

$con=mysqli_connect($server,$usename1,$password12,$dbname);
 
$id=$_POST['id'];  
$proname=$_POST['pname'];
$pserv=$_POST['pserv'];
$cname=$_POST['cname'];
$email=$_POST['email'];
$des=$_POST['des'];
$dead=$_POST['dead'];
$bud=$_POST['bud'];

  
   

     $sql2="UPDATE project SET project_name='$proname',description='$des',deadline='$dead' WHERE id='$id'";

    if(mysqli_query($con,$sql2)){
    header("location: success_upd.php");
    }
    else{
    header("location: error.php");
    }
  mysqli_close($con);
?>
