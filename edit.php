<?php include("connection.php");

$id =  $_GET['uid'];

$query = "SELECT * FROM product WHERE id = '$id'";
$data = mysqli_query($con, $query);
$result= mysqli_fetch_assoc($data);

?>


<head>
<style>
body {
 
 background-image: url("v.jpg");
 
}
</style>
</head>

<form method="POST" enctype="multipart/form-data" >
<br><br><br><br><br><br>
   <table border="4" align="center" >
   <tr><th style=color:red;>Update The Product Details</th></tr>
   <tr><td style=color:white;>
	<label>PID: </label>&nbsp;&nbsp;<input type="text" name="id" value="<?php echo $result['id']; ?>"></td></tr>
	
	<tr><td style=color:white;>
	<label> File: </label>&nbsp;&nbsp;<input type="file" name="upload" /></td></tr>
	
    <tr><td style=color:white;>	
	<label> Name: </label><input type="text" name="name" value="<?php echo $result['name']; ?>"></td></tr>
	
	
	<tr><td style=color:white;>
	<label> Price: </label>&nbsp;<input type="number" name="price" value="<?php echo $result['price']; ?>"></td></tr>
	
	<tr><td style=color:white;>
	<label> Desc: </label>&nbsp;<input type="text" name="desc1" value="<?php echo $result['desc1']; ?>"></td></tr>
	
	<tr><td align="center" ><input type="submit" name="update" /></td></tr>
</form>

<?php

	if(isset($_POST['update'])){
		$filename=$_FILES['upload']['name'];
		$temp_name=$_FILES['upload']['tmp_name'];
		$folder="img/".$filename;
		//$folder="C:\wamp\www\MCA_E_7_Harshad_Hardik_Mittal/img/".$filename;
		move_uploaded_file($temp_name,$folder);
		$name=$_POST['name'];
		$price=$_POST['price'];
		$desc1=$_POST['desc1'];
		$query="UPDATE product SET img_src='$folder',name='$name',price='$price',desc1='$desc1' WHERE id='$id'";
		$q=mysqli_query($con,$query);
		
		header("location:form.php");
	}
?>