<html>
<head>

<style>
body {
	background-image: url("g.gif");
   background-repeat:no-repeat;
   
   background-size: 100% 100%;
   height:462px;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.addmin {
  overflow: hidden;
  background-color: lightblue;
}

.addmin a {
  float: left;
  color: darkred;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.addmin a:hover {
  background-color: silver;
  color: black;
}


.addmin a.logout {
  float: right;
  background-color: red;
  color: white;
}
</style>
</head>
<body>

<div class="addmin">
  <a class="active" href="#home">Home</a>
  <a href="form.php">Add Product</a>
  <a href="viewuser.php">View User</a>
  <a href="viewadmin.php">View Admin</a>
  <a href="index.php" class="logout">Logout</a>
</div>

</body>
</html>
