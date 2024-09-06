<?php  include("connection.php"); ?>

<html>
<head>
 <title>Login</title>
<style> 
 #back
{
   background-image: url("e.jpg");
   background-repeat:no-repeat;
   
   background-size: 100% 100%;
   height:440px;
   
 }
</style>
</head>

<body id="back">

<marquee direction="left" scrollamount="20"  /><b><h2>Devloped By Harshad , Hardik and Mittal....</h2><//b></marquee> 


<center>
<form method="post" action="">
<table border="2" bgcolor="yellow">
<tr>
<td>
<h3><center><font color="black">Admin Login</font></center></h3>
</td>
</tr>

<tr>
<th>
<font color="">Username: </font><input type="text" name="username" placeholder="Username" required></input>
</th>
</tr>

<tr>
<th>
<font color="">Password:</font>&nbsp;<input type="password" name="password" placeholder="********" required></input>
</th>
</tr>

<tr>
<th>

</th>
</tr>

<tr>
<td align="center"><a href="admin_registration.php">Click Here New Admin</a>



<tr>
<td>
<center>
<input type="submit" name="submit" value="Login"></input>
</center>
</td>
</tr>

	 
</table>
</form>	 
</center>
	
<?php 
include("connection.php");

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$res = mysqli_query($con,"select * from adminregister where username='$username' and password='$password'");
$numRows = mysqli_num_rows($res);
if($numRows  == 1){
 echo '<script>alert("You are login Successfully")</script>';
 header("location:adminhome.php");   // create my-account.php page for redirection 	
}
else
{
	echo '<script>alert("Username and Password is Invalid")</script>';
    //header("location:login.php");	
}
}
?>
</body>
</html>