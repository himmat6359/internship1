<html>
<head>
<style>
body {
	background-image: url("p.gif");
   background-repeat:no-repeat;
   
   background-size: 100% 100%;
   height:462px;
   margin: 0;
  
}

.user {
  overflow: hidden;
  background-color: lightyellow;
}

.user a {
  float: left;
  color: black;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  font-size: 20px;
}

.user a:hover {
  background-color: red;
  color: black;
}


.user a.logout {
  float: right;
  background-color: red;
  color: white;
}
</style>
</head>
<body>

<div class="user">
  <a href="#home">Home</a>
  <a href="viewproduct.php">View Product</a>
  <a href="feedback.php">Feedback</a>
  <a href="index.php" class="logout">Logout</a>
</div>


  
</div>

</body>
</html>
