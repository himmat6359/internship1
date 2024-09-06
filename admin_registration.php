<?php include("connection.php");?>
<html>
<head>
<title>Admin Registration:</title>

<script>
function validateForm() {
   let x = document.forms["myForm"]["id"].value;
   let y = document.forms["myForm"]["name"].value;
   let z = document.forms["myForm"]["username"].value;
   let ba = document.forms["myForm"]["password"].value;
 
  
  
  
  if(x == "") {
    alert("ID must be filled out");
    return false;
  }
    else if (y == "") {
    alert("Name must be filled out");
    return false;
    }
	
	  else if (z == "") {
    alert("Username must be filled out");
    return false;
    }
	  
	    else if (ba == "") {
    alert("Password must be filled out");
    return false;
    }
   
}
</script>
<style>
#back
{
   background-image: url("b.jpg");
   background-repeat:no-repeat;
   
   background-size: 100% 100%;
   height:440px;
   
 }
</style>
</head>

<body id="back">
<form method="post" onsubmit="return validateForm()" name="myForm">
<br><br><br><br>
<table border="2 " align="center" bgcolor="" textcolor="blue">
<tr bgcolor="darkturquoise"><td><h2><center>Admin Registration</center></h2></td></tr>
<th> ID:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="id" placeholder="Enter Unique ID"></th></tr>
<tr textcolor="blue">
<th>
Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name"    placeholder="Enter Name"></th></tr>

<tr>

<tr>
<th> Username: &nbsp;&nbsp;&nbsp;<input type="text" name="username"  placeholder="Username" /></th></tr>

<tr>
<th> Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" placeholder="Password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></th></tr>

<tr>
<td align="center" bgcolor="azure"><a href="adminlogin.php">Click Here To Login</a></td></tr>

<tr><th bgcolor="azure"><center><input type="submit" name="submit">
                <input type="reset" name="reset" value="Reset">
</center></th></tr>

</table>
<?php
if(isset($_POST['submit'])){
	 $id=$_POST['id'];
	 $name=$_POST['name'];
   $username=$_POST['username'];
	 $password=$_POST['password'];
	 $sql="insert into adminregister values('$id','$name','$username','$password')";
    $qq=mysqli_query($con,$sql);
    if($qq)
	{
		//echo("Your Data Insrted Successfully");
	echo '<script>alert("Your Data Insrted Successfully")</script>'; 
  
	}		
}
?>

</form>
</body>
</html>