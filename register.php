
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../Pizza/css/main.css">
	<?php include 'testing.php'; 
	include 'links.php' ?>
	

<!-- ===============================================================================================-->
</head>
<body>	
<div class="navmenu">
            <a href = "index.php"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "register.php"> Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "login.php"> Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
        </div>

	<!-- ------------------------------------- -->
	<div class="bg-Sign-In">
		
				<div class="form">
					<div class="grad1">
				<form class="Sign-In-form validate-form" method="POST" action="">
					<br><h1 id="title">
						Register
					</h1>

					<br><br>
						<input id="input2" type="text" name="first_name" style="height: 40px;" placeholder="&nbsp;Enter First Name"required>
						<br><br>

						<input id="input2" type="text" name="last_name" style="height: 40px;" placeholder="&nbsp;Enter Last Name"required>

					<br><br>
						<input id="input2" type="email" name="email_address" style="height: 40px;" placeholder="&nbsp;Enter Email"required>
						<br><br>
						<input id="input2" type="password" name="password" style="height: 40px;" placeholder="&nbsp;Enter Password"required>
					

					<br>
					<br>

						<input id="form_btn" type="submit" name="register" value="Register"data-toggle="tooltip" data-placement="top" title="Register"><br>
						Already a Member?<a href="login.php">Login Here</a>
							
						
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
 		
 		/*-----------------------------------------*/
 		$email=$_POST['email_address'];
			$pass=$_POST['password'];
			$email_search = "select * from user_register where email_address = '$email'";
			$query= mysqli_query($conn,$email_search);

			$count= mysqli_num_rows($query);
			
			if($count) {
				
				$email_pass = mysqli_fetch_assoc($query);
				$dbpass = $email_pass['password'];
				$_SESSION['_user']=$email_pass['first_name'];
				$_SESSION['ids']=$email_pass['ID'];

				if($pass == $dbpass) {
					?>
					<script>

						location.replace("menu.php")
					</script>
					<?php
				}
			/*	<script type="text/javascript">
				?>
					alert("successful");	
				</script>
				<?php
				/*
				/*----------------------------------------*/
 		
 	}
 	else{
 		?>
 		<script type="text/javascript">
 			alert("unseccessful");
 		</script>
 		<?php
 	}
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
</body>
</html>

<style type="text/css">
	input#form_btn {
  width: 150px;
  height: 45px;
  color: black;
  z-index: 10;
  font-weight: bold;
  display: inline-flex;
  justify-content: center;
  font-size: 18px;
  font-family: sans-serif;
  border: none;
  border-radius: 10px;
  border-bottom:solid 3px gray ;
  background: whitesmoke;
  font-weight: bold;
  justify-items: center;}

  .form{
  	width: 600px;
  	margin:50px auto auto auto;
  	
  
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
  opacity: 1; 
}
.grad1 {
  width: 100%;
  	
  background-image: linear-gradient(red, yellow);
}
</style>