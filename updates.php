<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>


	<title>Update</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../Pizza/css/main.css">
	<?php include 'testing.php';
	include 'links.php';
	?>


  <title>My Example</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
	include 'testing.php';
  ?>
</head>
<body>
 <div class="navmenu">
            <a href = "menu.php"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "updates.php?id=<?php echo $_SESSION['ids'] ?>"> Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "delete.php?id=<?php echo $_SESSION['ids'] ?>"> Delete ID</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "logout.php"> Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "cart.php?id=<?php echo $_SESSION['ids'] ?>"> <i class="fa fa-shopping-cart" style="font-size: 30px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

<section class="container">
<form style="width:200px" method="POST" action="">
	<table>
<!-- ---------------------------------------------------- -->
		<?php 
		

		$ids=$_GET['id'];

		$jquery="select * from user_register where ID = {$ids}";
		
		$data=mysqli_query($conn,$jquery);
		
		$fetch=mysqli_fetch_array($data);
	
 if(isset($_POST['update'])) {

	$id=$_GET['id'];
	$fname= $_POST['first_name'];
 	$lname= $_POST['last_name'];
 	$email=$_POST['email_address'];
 	$pass=$_POST['password'];
 	
 	$updatequery = ("UPDATE user_register set ID = $ids,first_name='$fname', last_name='$lname',email_address='$email', password='$pass' where ID = $id");
 	$x = mysqli_query($conn,$updatequery);

$jquery="select * from user_register where ID = {$ids}";
		
		$data=mysqli_query($conn,$jquery);
		
		$fetch=mysqli_fetch_array($data);

 	if ($x) {

 	}
 	else{
 		?>
 		<script type="text/javascript">
 			alert("Data not inserted");
 		</script>
 		<?php 
}
				
 	}
			
 
?>
<?php 
	$id=$_GET['id'];
		$query="select * from user_register where ID = {$id}";
		$d=mysqli_query($conn,$query);
		$count= mysqli_num_rows($d);
 		if($count) {
				$namefetch = mysqli_fetch_assoc($d);
				$_SESSION['_user']=$namefetch['first_name'];
			}
?>

<!-- ---------------------------------------------------- -->
	


<!-- ===============================================================================================-->
<body>



	<!-- ------------------------------------- -->
	<div class="bg-Sign-In">
		
				<div class="form">
					<div class="grad1">
				<form class="Sign-In-form validate-form" method="POST" action="">
					<br><h1 id="title">
						Update
					</h1>

					<br><br>
						<input id="input2" type="text" name="first_name" style="height: 40px;" placeholder="&nbsp;Enter First Name"value="<?php echo $fetch['first_name']?>" required>
						<br><br>

						<input id="input2" type="text" name="last_name" style="height: 40px;" placeholder="&nbsp;Enter Last Name" value="<?php echo $fetch['last_name'] ?>" required>

					<br><br>
						<input id="input2" type="email" name="email_address" style="height: 40px;" placeholder="&nbsp;Enter Email" value="<?php echo $fetch['email_address'] ?>" required>
						<br><br>
						<input id="input2" type="password" name="password" style="height: 40px;" placeholder="&nbsp;Enter Password" value="<?php echo $fetch['password'] ?>" required>
					

					<br>
					<br>

						<input id="form_btn" type="submit" name="update" value="Update"data-toggle="tooltip" data-placement="top" title="Update"><br>
						
							
						
				</form>
				<br>
			</div>
			</div>
<!--===============================================================================================-->

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>	
<?php 
	
 if(isset($_POST['register'])) {

 
 
 	$fname= $_POST['first_name'];
 	$lname=$_POST['last_name'];
 	$email=$_POST['email_address'];
 	$pass=$_POST['password'];
 	
$inquery = ("insert into user_register (first_name,last_name,email_address,password)values('$fname','$lname','$email','$pass')");
 	$x = mysqli_query($conn,$inquery);
 	
 	if ($x) {
 		?>
 		<script type="text/javascript">
 			alert("You Registered Successfully! Please Log In agian to Continue");
 			location.replace('login.php');
 		</script>
 		<?php
 	}
 	else{
 		?>
 		<script type="text/javascript">
 			alert("Email Already Exists");
 		</script>
 		<?php 
 	}
 }
?>
</section>
</body>
</html>

<style type="text/css">
	input#form_btn {
  width: 150px;
  height: 45px;
  color: red;
  z-index: 10;
  font-weight: bold;
  display: inline-flex;
  justify-content: center;
  font-size: 18px;
  font-family: sans-serif;
  border: none;
  border-radius: 10px;
  border-bottom:solid 2px gray ;
  font-weight: bold;
  justify-items: center;}

  .form{
  	width: 600px;
  	margin: 100px auto auto 250px;
  	background-image: linear-gradient(red, yellow);
  	justify-items: center;
  	justify-content: center;
  	text-align: center;
  	border-radius: 10px;
		box-shadow: 0px 10px 20px 0px rgba(200, 38, 10, 1.0);
  }
  body{
  	background: url(images/3.jpg) rgba(0, 0, 0, 0.5);
  	background background-repeat: no-repeat;
  	background-size: cover;
  	background-position: center	;
  	background-blend-mode: overlay;
  	font-family: all;
	font: georgia;
	font-weight: bold;
	font-size: 18px;
  }

h1{

	color: antiquewhite;
	text-align: center;
	width: 200px;
	border-radius: 10px;
	border-bottom:solid 2px whitesmoke ;
	margin: auto;
	font-family: all;
	font: georgia;
	font-weight: bold;
	background: rgba(0, 0, 100, .3);
}
input#input2{
	width: 320px;
	text-align: left;
	font: georgia 18px;
	border-radius: 10px;
	border-width: 0px;
	background: rgba(0, 0, 0, 0.3);
	border-bottom-style: solid;
	border-bottom-width: 2px;
	border-bottom-color: whitesmoke;
	color: white;


}
input#input2::placeholder {
  color: antiquewhite;
  opacity: 1; /* Firefox */
}
.grad1 {
  width: 100%;
  	
  background-image: linear-gradient(red, yellow);
}
.container{
	width: 100%;
	margin: auto;
}
</style>