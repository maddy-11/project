<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Header</title>
	<?php include 'links.php' ;
	include 'css/header.css';
	?>
</head>
<body>

	<div class="navigationcontainer">
		<div class="logo">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8fnsp5aAIoYz61WsTcMV1S-AvrIsWiDUpIg&usqp=CAU"width="70px" height="70px" >
			<p>PizzaPoint</p>
		</div>
		<div class="menu">
			<a href = "index.php"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href = "register.php"> Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href = "login.php"> Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href = "updates.php?id=<?php echo $_SESSION['ids'] ?>"> Settings</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href = "cart.php?id=<?php echo $_SESSION['ids'] ?>"> Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href = "cart.php"> <i class="fa fa-shopping-cart" style="font-size: 30px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		
	</div>

</body>
</html>

