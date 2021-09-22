<?php 
	session_start();
	session_destroy();
	
		header('location:login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include 'testing.php';
		include 'links.php';
	?>
  <title>Log Out</title>
    
  
</head>
<body>
