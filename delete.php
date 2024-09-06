<?php include("connection.php");
$id=$_GET['id'];
$query="DELETE FROM product where id='$id'";
$data=mysqli_query($con,$query);
if($data)
{
	echo"data deleted";
}
else
{
	echo"data not deleted";
}
header("location:form.php");



?>
