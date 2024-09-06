<html>
<head>
<link rel="stylesheet" href="style.css">
</head>


<body>

<?php
include("connection.php");

$query="select * from adminregister";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total !=0) {
	 ?>
	  <h2 align="center">Displaying All Admin Records:</h2>
	  <table align="center" border="1" cellspacing="1" bgcolor="">
	   <tr bgcolor="blue">
	    <th width="5%">ID</th>
        
        <th width="5%">Name</th>
		<th width="5%">Username</th>
        <th width="5%">Password</th>
        <th width="5%">Opration</th>
      </tr>
	  
	  <?php
  while($result=mysqli_fetch_assoc($data))
  {
	echo"<tr>
	    <td><center>".$result["id"]."</center></td>
	
		<td><center>".$result["name"] ."</center></td>
		<td><center>".$result["username"] ."</center></td>
		<td><center>".$result["password"] ."</center></td>
		<td><center><button style='background: red;border:0px:padding:10px;'>
		<a style='color:white;text-decoration:none;' href='admindelete.php?id=$result[id]'>Delete</a></button>
		
		<button style='background: green;border:0px;padding:10px;'>
		<a style='color:white;text-decoration:none;' href='adminedit.php?uid=$result[id]'>Edit</a></button>
		</center>
		</td>
		</tr>";
  }
}
else
{
	echo"no record found";
}
?>