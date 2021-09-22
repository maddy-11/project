<?php 
session_start();

if(!isset($_SESSION['_user'])){

	?>
	<script type="text/javascript">
		alert("Sorry You are not Logged In");
		location.replace("login.php")
	</script>
	<?php
}
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order Form</title>
<?php include 'links.php';
include 'testing.php';?>

</head>
<body>

	 <div class="navmenu">
            <a href = "menu.php"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "updates.php?id=<?php echo $_SESSION['ids'] ?>"> Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "delete.php?id=<?php echo $_SESSION['ids'] ?>"> Delete ID</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "logout.php"> Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "cart.php?id=<?php echo $_SESSION['ids'] ?>"> <i class="fa fa-shopping-cart" style="font-size: 30px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>



		<br>
		<div class="up">
<h1 style="background: rgba(0, 0, 0, 0.5);">&nbsp;Welcome <?php echo $_SESSION['_user'] ?>!&nbsp;Select Your Favorite</h1>
		</div>
	<section class="container">
			<div class="container2">
			<h1 id="orderformhead">Pizza Point Order Form</h1></div>
			<div class="rec_full"></div>
		<div class="container2">
		<form method="POST" id="form">

			<h2 style="text-align: center;">Select Pizza</h2>
			<div class="rec_full"></div>
			<table width="450px">
			<tr>
			<th>Peperonne Pizza</th>
			<td><input type="radio" name="pizza" value="Peperonne" required></td>
			</tr>

			<tr>
			<th>Hawaiian Pizza</th>
			<td><input type="radio" name="pizza" value="Hawaiian" required></td>
			</tr>
			
			<tr>
			<th>Italian Pizza</th>
			<td><input type="radio" name="pizza" value="Italian" required></td>
			</tr>
			<tr>
			<th>Chicken Fajita Pizza</th>
			<td><input type="radio" name="pizza" value="Chicken Fajita" required></td>
			</th>
			<tr>
			<th>Meat Lovers Pizza</th>
			<td><input type="radio" name="pizza" value="Meat Lovers" required></td>
			</tr>
			<tr>
			<th style="border-bottom:none;">Margherita Pizza</th>
			<td style="border-bottom:none;"><input type="radio" name="pizza" value="Margherita" required></td>
			</tr>
		</table>
			<!-- ================================= -->
			<div class="rec_full"></div><br>
			<table width="480px">
			<h2 style="text-align: center;">Select Size</h2>
			<br><div class="rec_full"></div>
			<tr>
			<th>Small - Rs.600</th>
			<td><input type="radio" name="size" value="Small" required></td>
			</tr>

			<tr>
			<th>Medium - Rs.900</th>
			<td><input type="radio" name="size" value="Medium"required></td>
			</tr>
			
			<tr>
			<th>Large - Rs.1200</th>
			<td><input type="radio" name="size" value="Large"required></td>
			</tr>
			<tr>
			<th>Extra Large - Rs.1500</th>
			<td><input type="radio" name="size" value="Extra Large"required></td>
			</th>
			<tr>
			

			<!-- ================================= -->

			</table>
			<br>
			<table width="550px">
				<div class="rec_full"></div>
			<tr>
				<br>
			<th style="border-bottom: none;">Number of Items</th>
			<td style="border-bottom:none"><input type="Number" name="num" id="pizanum" value="1"></td>
			</tr>
			<tr>
			</table>
			<br><hr>	
				Extra Cheeze Topping! +100
				&nbsp;&nbsp;&nbsp;YES&nbsp;&nbsp;<input type="radio" name="topping" value="YES"required>
				&nbsp;&nbsp;&nbsp;&nbsp;NO&nbsp;&nbsp;<input type="radio" name="topping" value="NO"required>
			</tr>
			<hr>
		<div class="arr">
		<a href = "cart.php?id=<?php echo $_SESSION['ids'] ?>" id = "sub"data-toggle="tooltip" data-placement="top" title="Cart">View Cart</a>
		<input type="submit" value="Add To Cart" name="submit" id="sub" data-toggle="tooltip" data-placement="bottom" title="Add to Cart"></btn></div>
		</form>
	</div>
	<br>
	</section>
<br>

</body>
</html>


<?php 
	if (isset($_POST['submit'])) {
		$id = $_GET['id'];
		$name = $_POST['pizza'];
		$size = $_POST['size'];
		$num = $_POST['num'];
		$toppings = $_POST['topping'];

		if ($size=="Small") {
			$amount = 600;
			if($toppings=="YES"){
				$amount = 700;
			}
			
		}
		else if($size=="Medium"){
			$amount = 900;
			if($toppings=="YES"){
				$amount = 1000;
			}
			
		}
		else if($size=="Large"){
			$amount = 1200;
			if($toppings=="YES"){
				$amount = 1300;
			}
			
		}
		else {
			$amount = 1500;
			if($toppings=="YES"){
				$amount = 1600;
			}
			
		}
		


		$query = "insert into items (pizza,size,number,topping,user,amount,tamount)values ('$name','$size','$num','$toppings','$id',$amount,$amount*$num)";

		$equery=mysqli_query($conn,$query);
		



		if($equery)
		{
			?>
			<script type="text/javascript">
				alert("Successful")
				
			</script>

			<?php
		}
		else{
			?>
			<script type="text/javascript">
				alert("Unsuccessful")
			</script>
			<?php
		}
	}
?>


<style type="text/css">
	.container{
		width: 800px;
		margin: auto;
		background: whitesmoke;
		box-shadow: 0px 10px 20px 0px rgba(200, 38, 10, 1.0);

	}
	.container2{

		display: flex;
		justify-items: center;
		justify-content: center;
		align-content: center;
		align-items: center;
		color: whitesmoke;
		
	}	
	form#form{
		width: 500px;
		color: black;
		border-radius: 30px;
		
		

	}
	table{
		text-align: left;
		font-size: 20px;
	}
	input#sub{
		width: 150px;
		height: 40px;
		border: none;
		background: rgba(0, 0, 0, 0.8);
		color: whitesmoke;
		font-size: 18px;
		border-radius: 10px;
		border-bottom:solid whitesmoke 2px ;
		display: flex;
		justify-content: center;
		align-items: center;
		align-content: center;
		margin: auto	;
	}
	input#sub:hover{
		background: orangered;
	}
	input#pizanum{
		width: 50px;
		border: none;
		color: whitesmoke;
		text-align: center;
		border-bottom:solid 2.5px whitesmoke;
		border-radius: 10px;
		background: rgba(0, 0, 0, .5);
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
  .rec_full{
		width: 100%;
		height: 5px;
		background-color: darkred;
	}
	.up{
		width: 800px;
		height:250px;
		margin: auto;
		background: url("images/1.jpg") rgba(0,0,0,.4); 
		color: whitesmoke;
		font-weight: bold;
		background-blend-mode: overlay;
		background-repeat: no-repeat;
		background-size: cover;		
		background-position: center;
		display: flex;
		align-items: center;
		justify-content: center;
		box-shadow: 0px 10px 20px 0px rgba(200, 38, 10, 1.0);
	}
		h2{
			font-size: 40px;
			font-weight: bold;
		}
		h1{
			font-size: 40px;

		}
		h1#orderformhead{
			color: black;
			font-weight: bold;
		}

		th,td{
			border-bottom: solid whitesmoke 1px;
		}

		a#sub{
		width: 150px;
		height: 40px;
		border: none;
		background: rgba(0, 0, 0, 0.8);
		color: whitesmoke;
		font-size: 18px;
		border-radius: 10px;
		border-bottom:solid whitesmoke 2px ;
		display: flex;
		justify-content: center;
		align-items: center;
		align-content: center;
		margin: auto	;
	}
	a#sub:hover{
		background: orangered;}
		.arr{
			display: flex;
		}
		hr{
			background-color: black;
		}
</style>