<?php include("connection.php");

$id =  $_GET['uid'];

$query = "SELECT * FROM adminregister WHERE id = '$id'";
$data = mysqli_query($con, $query);
$result= mysqli_fetch_assoc($data);

?>

<head>
<link rel="stylesheet" href="style.css">
</head>
<body id="back">
<form method="POST">
<br><br>
    <table align="center" border="4">
	<tr><th><label>Edit The Record</label></th></tr>
	<tr><td><label>ID: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" value="<?php echo $result['id']; ?>"></td></tr>
	<tr><td><label>Name: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" value="<?php echo $result['name']; ?>"></td></tr>
	<tr><td><label>Username: </label><input type="text" name="username" value="<?php echo $result['username']; ?>"></td></tr>
	
	<tr><td><label>Password: </label>&nbsp;<input type="text" name="password" value="<?php echo $result['password']; ?>"></td></tr>
	<tr><td align="center"><input type="submit" name="update" class="button"></td></tr>
</form>
</body>
<?php

	if(isset($_POST['update'])){
		$name=$_POST['name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$query = "UPDATE adminregister SET name='$name',username='$username',password='$password' WHERE id='$id'";
		$q =mysqli_query($con,$query);
		
		header("location:viewadmin.php");
	}
?>
