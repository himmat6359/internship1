<?php include("connection.php");
$id=$_GET['id'];
$query="DELETE FROM userregister where id='$id'";
$data=mysqli_query($con,$query);
if($data)
{
	echo '<script>alert("Your Data Deleted Successfully")</script>'; 
	header("location:viewuser.php");
}
else
{
	echo '<script>alert("Your Data Not Deleted")</script>'; 
}




?>
