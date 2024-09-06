<?php  include("connection.php"); ?>

<html>
<head>
 <title>User Login</title>
<style> 
body{
        background-color: #F0F8FF;
      }
      
      #back input[type=text], input[type=password]{
        width: 200px;
        margin-bottom: 15px;
        padding: 8px;
      }
      #back input[type=submit]{
        width: 100px;
        background-color: #FFF8DC;
        padding: 8px;
      }
 #back
{
   background-image: url("z.jpg");
   background-repeat:no-repeat;
   
   background-size: 100% 100%;
   height:440px;
   
 }
</style>
</head>

<body id="back">

<marquee direction="left" scrollamount="20" textcolor="blue" /><b><h2>Devloped By Harshad,Hardik and Mittal....</h2><//b></marquee> 


<center>
<form method="post" action="">
<table border="2" >
<tr>
<td>
<h3><center><font color="black">User Login</font></center></h3>
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
<td align="center"><a href="user_registration.php">Click Here New User</a>



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

$res = mysqli_query($con,"select * from userregister where username='$username' and password='$password'");
$numRows = mysqli_num_rows($res);
if($numRows  == 1){
 echo '<script>alert("You are login Successfully")</script>';
 header("location:userside.php");   // create my-account.php page for redirection 	
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