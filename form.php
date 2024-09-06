<?php include("connection.php");?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
body {
 
 background-image: url("o.jpg");
 
}
</style>

</head>
<body>
<form method="post" enctype="multipart/form-data">
<table border="2" align="center" bgcolor="lavender">
<tr><th bgcolor="teal">Add New Product</th></tr><br>
<tr><th>Product ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="id" required></th></tr>
<tr><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file"  name="upload"></th></tr>
<tr><th>Product Name:  <input type="text" name="name"required></th></tr>
<tr><th>Product Price:&nbsp;&nbsp;<input type="number" name="price" required></th></tr>
<tr><th>Description:&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="desc1" required></th></tr>
<tr><td align="center" bgcolor="teal" ><input type="submit" name="submit" style=background-color:yellow>
<input type="reset" name="reset" value="Reset" style=background-color:yellow></td></tr>
</table>
<?php

if(isset($_POST['submit'])) {
	$id=$_POST['id'];
	$filename=$_FILES['upload']['name'];
	$temp_name=$_FILES['upload']['name'];
	
	//$folder="C:\wamp\www\MCA_E_7_Harshad_Hardik_Mittal/img/".$filename;
	$folder="img/".$filename;
	
	move_uploaded_file($temp_name,$folder);
	
	$name=$_POST['name'];
	$price=$_POST['price'];
	$desc1=$_POST['desc1'];
	
	$sq="insert into product values('$id','$folder','$name','$price','$desc1')";
	$sql=mysqli_query($con,$sq);
	if($sql)
	{
		echo "<script>alert('Data Insrted')</script>";
	}	
}	

?>

</form>
</body>
</html>

<?php
include("connection.php");

$query="select * from product";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total !=0) {
	 ?>
	  <h2 align="center" style=color:red;>Displaying All Products:</h2>
	  <table align="center" border="4" cellspacing="1" align="center" bgcolor="#87CEFA">
	   <tr>
	    <th width="5%">PID</th>
        <th width="10%">Image</th>
        <th width="5%">Product Name</th>
		<th width="5%">Product Price</th>
        <th width="5%">Description</th>
        <th width="5%">Opration</th>
      </tr>
	  
	  <?php
  while($result=mysqli_fetch_assoc($data))
  {
	echo"<tr>
	    <td>".$result["id"]."</td>
		<td><img src='".$result["img_src"]."'height='100px' 
		width='100px'></td>
		<td>".$result["name"] ."</td>
		<td>".$result["price"] ."</td>
		<td>".$result["desc1"] ."</td>
		<td><center><button style='background: red;border:0px:padding:10px;'>
		<a style='color:white;text-decoration:none;' href='delete.php?id=$result[id]'>Delete</a></button>
		
		<button style='background: green;border:0px;padding:10px;'>
		<a style='color:white;text-decoration:none;' href='edit.php?uid=$result[id]'>Edit</a></button>
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