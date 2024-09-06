<html>
<head>
<style>
body{
	background-image: url("t.jpg");
}	
</style>
</head>
<body>

<?php
include("connection.php");

$query="select * from product";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total !=0) {
	 ?>
	  <h2 align="center" style='color:white;'><label>Displaying All Products:</label></h2>
	  <table align="center" border="4" cellspacing="1" bgcolor="blanchedalmond">
	   <tr bgcolor="teal">
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
	    <td><center>".$result["id"]."</center></td>
		<td><center><img src='".$result["img_src"]."'height='100px' 
		width='100px'></center></td>
		<td><center>".$result["name"] ."</center></td>
		<td><center>".$result["price"] ."</center></td>
		<td><center>".$result["desc1"] ."</center></td>
		<td><center>
		
		
		<button style='background: orange;border:0px;padding:10px;'>
		<a style='color:black;text-decoration:none;' href='order.php?uid=$result[id]'>Buy Product</a></button>
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

</body>
</html>