<html>
<head>
<title>
feedback
</title>
<style>
body{
	background-image:url('f.jpg');
	
	background-repeat:no-repeat;
   
   background-size: 100% 100%;
   height:440px;
 
}

</style>
</head>
<body>
<div class="f_form">
<form method="post">
  <table class="table" align="center" bgcolor="wheat">
  <tr>
    <td><h1 class="text=-center text-white" ><font size="16" >Feed Back</h1></td>
  </tr>
  <tr>
      <td><font size="5"><b>Enter User Name :</b></td>
  
<td><input type="text" name="txtun" class "form-control" placeholder="Enter Your Username"required></td>
</tr>
<tr>
<td><font size="5"><b>Enter Product ID :</b></td>

<td><input type="text"name="id" class="form-control"placeholder="Enter product ID" required></td>
</tr>
<tr>
<td><font size="5"><b>Enter User Opinion :</b></td>

<td><input type="text" name="txtuo" class "form-control" placeholder="Enter User Opinion"required></td>
</tr>
<tr>
<td align="center"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="btnfed" class "form_btn" value="Submit Feedback" style=background-color:red>
</td>
</tr>
<tr>
     
	 <th align="left"> <a href="userside.php" style=background-color:yellow><< Back</th>
	 </tr>
	 </table>
	</form> 
 </div>
 </body>
 </html>
 
 <?php
 
    $con=mysqli_connect("localhost","root","","myproject");
	
	if(isset($_POST["btnfed"]))
	{
		$username=$_POST["txtun"];
		$pid=$_POST["id"];
		$useropinion=$_POST["txtuo"];
		
		
		$q1="insert into feedback values ('$username','$pid','$useropinion')";
		$query=mysqli_query($con,$q1);
		if($query)
		{
			echo "<script>alert('Feedback Submitted')</script>";
		}
		else
		{
			echo "<script>alert('Feedback Not Submitted')</script>";
		}
	}
?>