<?php 
	session_start();


?>
<?php 
		include 'testing.php';

	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign In</title>
	<?php include 'links.php' ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../Pizza/css/main.css">
<!-- ===============================================================================================-->
</head>
<body>
	<div class="navmenu">
            <a href = "index.php"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "register.php"> Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "login.php"> Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
        </div>
<?php 
		if(isset($_POST['login']))
		{

			$email=$_POST['email'];
			$pass=$_POST['pass'];
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
				else{
					?>
					<script>
						alert("Wrong Password");
					</script>
					<?php
				}
			}
			else{
				?>
				<script type="text/javascript">
					alert("Email Doesn't Exist");
				</script>
				<?php


			}
}
	if(isset($_POST['register']))
	{
		header('location:register.php');
	}
?>

	<!-- ------------------------------------- -->
	<div class="bg-Sign-In">
		
				<div class="form">
					<div class="grad1">
				<form class="Sign-In-form validate-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
					<br><h1 id="title">
						Sign In
					</h1>

					<br><br>

						<input id="input2" type="email" name="email" style="height: 40px;" placeholder="&nbsp;Enter Email">
						
					
					<br><br>
						<input id="input2" type="password" name="pass" placeholder="&nbsp;Enter Password" style="height: 40px;">
						

					<br>
					<br>

					
							<br><div class="buttns">
							<input id="form_btn" type="submit" name="login" value="Sign In"data-toggle="tooltip" data-placement="top" title="Sign In">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="register.php" id="form_btn"data-toggle="tooltip" data-placement="top" title="Register"> Register Now</a>
						</div>
							

						
				</form>
				<br>
			</div>
			</div>
	
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

</body>
</html>

<style type="text/css">
	input#form_btn {
  width: 150px;
  height: 50px;
  color: black;
  z-index: 10;
  display: inline-flex;
  justify-content: center;
  justify-items: center;
  
  font-family: fantasy;
	font-weight: 200;
	font-size: 18px;
	border: 0px;
	border-bottom:solid 3px grey;
	
	
	border-radius: 10px;
}
a#form_btn{
	width: 140px;
  height: 48px;
  color: black;
  font-family: sans-serif;
  font-size: 18px;
  display: flex;
  align-content: center;
  align-items: center;
  font-weight: 200;
  text-decoration: none;
  justify-content: center;
  justify-items: center;
  background: whitesmoke;
  border-bottom:solid 3px gray;
  border-radius: 10px;
  font-family: fantasy;
  
}

  .form{
  	width: 600px;
  	margin: 100px auto auto auto;
  	
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
	font: calibri;
	font-weight: bold;
	font-size: 18px;
  }

  .buttns{
  	display: flex;
  	justify-items: center;
  	justify-content: center;
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
</style>