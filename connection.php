<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vimal";

$con=mysqli_connect($servername,$username,$password,$dbname);
if($con)
{
  echo " connection Successfully..";	
}
else
{
	echo "connection faild";
}
?>