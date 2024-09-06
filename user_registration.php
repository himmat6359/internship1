<?php include("connection.php");?>
<html>
<head>
<title>User Registration:</title>
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
   background-image: url("g.jpg");
   background-repeat:no-repeat;
   
   background-size: 100% 100%;
   height:440px;
   
 }
</style>
</head>





<body id="back">
<form method="post" onsubmit="return validateForm()" name="myForm">
<br><br><br><br>
<table border="5" align="center" bgcolor="darkseagreen">
<tr><td><h2><center>User Registration</center></h2></td></tr>
<th> ID:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="id" placeholder="Enter Unique ID"></th></tr>
<tr>
<th>
Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name"    placeholder="Enter Name"></th></tr>

<tr>

<tr>
<th> Username: &nbsp;&nbsp;&nbsp;<input type="text" name="username" placeholder="Username" /></th></tr>

<tr>
<th> Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" placeholder="Password"   title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></th></tr>

<tr>
<td align="center"><a href="login.php">Click Here To Login</a></td></tr>

<tr><th><center><input type="submit" name="submit">
          &nbsp;<input type="reset" name="reset" value="Reset"></center></th></tr>

</table>
<?php
if(isset($_POST['submit'])){
	 $id=$_POST['id'];
	 $name=$_POST['name'];
     $username=$_POST['username'];
	 $password=$_POST['password'];
	 $sql="insert into userregister values('$id','$name','$username','$password')";
    $qq=mysqli_query($con,$sql);
    if($qq)
	{
		//echo("Your Data Insrted Successfully");
	echo '<script>alert("Your Data Insrted Successfully")</script>'; 
  
	}
   else
   {
	  echo '<script>alert("Your Data Not Insrted")</script>'; 
   }
}
?>

</form>
</body>
</html>