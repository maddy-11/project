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

include 'testing.php';

?>
<!Doctype html>
<html>
<head>
	<title>Welcome <?php echo $_SESSION['_user'] ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<Link rel = "stylesheet" href ="../pizza_software/css/css_style.css" type="text/css">
	
</head>
<body>

	<section class="middle">

		<div = class="up";>
			<h1 id="h1">
				&nbsp;<?php echo "Welcome Mr. " . $_SESSION['_user']; ?>&nbsp;
			</h1>
		</div>

	<!-- ---------------------------------------------------------------------------- -->

	<section class="one">
	<section class="two">
	<section class="three">
	<div class="rec_green"></div><br><div class="rec_red"></div>
	</section>
	<section class="four">
	<h2>&nbsp;&nbsp;Students&nbsp;Pizza</h2>
	</section>
	<section class="five">
	<div class="rec_green"></div><br><div class="rec_red"></div>
	</section>
	</section>



	<script type="text/javascript">
		function validation() {

			var check = document.form1.size;
			var valid;
			for(var i=0;i<check.length;i++){

				if(check[i].checked == true)
				{

					
					alert(check[i].value);
					return false;
					
				}
		}
		}
		
	</script>


	<!-- ---------------------------------------------------------------------------- -->
		<form onsubmit ="return validation()"  name ="form1" id="formarr"  )>
		<br>
		<table style="width: 700px;">
			
			<tr>
				<th id="td">BBQ&nbsp;Chicken&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<div class = "size">
				<td>Small <input type="radio" name="size" value="BBQ Small" id="bbq1"></td>
				<td>Medium<input type="radio" name="size" value="BBQ Medium" id="bbq2"></td>	
				<td>Large<input type="radio" name="size" value="BBQ Large">  </td>
				<td>ExtraLarge<input type="radio" name="size" value="BBQ Extra Large"></td></div>
			</tr>
			<tr>
				<td id="border">Special BBQ Chicken with<br>Olive and Capsicum on top</td>
				<td id="border">Rs 300</td>
				<td id="border">Rs 600</td>
				<td id="border">Rs 800</td>
				<td id="border">Rs 1200</td>
			</tr>
			<tr>
				<td>.</td>
			</tr>
				<!-- ---------------------------------------------------------------------------- -->
				<tr>
				<th id="td">Chicken&nbsp;Fajita&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<div class = "size">
				<td>Small <input type="radio" name="siz1" value="Fajita Small"></td>
				<td>Medium<input type="radio" name="size"value="Fajita Medium"></td>	
				<td>Large<input type="radio" name="size"value="Fajita Large"></td>
				<td>ExtraLarge<input type="radio" name="size" value="Fajita ExtraLarge"></td></div>
			</tr>
			<tr  id="border">
				<td id="border">Special Boneless Chicken with our special pizza sause</td>
				<td id="border">Rs 300</td>
				<td id="border">Rs 600</td>
				<td id="border">Rs 800</td>
				<td id="border">Rs 1200</td>
				
			</tr>
			<tr>
				<td>.</td>
			</tr>
				<!-- ---------------------------------------------------------------------------- -->
				<tr>
				<th id="td">Pepperoni&nbsp;Pizza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<div class = "size">
				<td>Small <input type="radio" name="size" value="Pepperoni Small"></td>
				<td>Medium<input type="radio" name="size" value="Pepperoni Medium"></td>	
				<td>Large<input type="radio" name="size" value="Pepperoni Large"></td>
				<td>ExtraLarge<input type="radio" name="size" value="Pepperoni ExtraLarge"></td></div>
			</tr>
			<tr>
				<td id="border">Pepprone Chicken with Cheese and tasty sause</td>
				<td id="border">Rs 300</td>
				<td id="border">Rs 600</td>
				<td id="border">Rs 800</td>
				<td id="border">Rs 1200</td>
			</tr>
			<tr>
				<td>.</td>
			</tr>
				<!-- ---------------------------------------------------------------------------- -->
				<tr>
				<th id="td">Beef&nbsp;Pizza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<div class = "size">
				<td>Small <input type="radio" name="size" value="Beef Small"></td>
				<td>Medium<input type="radio" name="size" value="Beef Medium"></td>	
				<td>Large<input type="radio" name="size" value="Beef Large"></td>
				<td>ExtraLarge<input type="radio" name="size" value="Beef ExtraLarge"></td></div>
			</tr>
			<tr>
				<td id="border">Lean Ground Beef with Chadder Cheese and sause</td>
				<td id="border">Rs 300</td>
				<td id="border">Rs 600</td>
				<td id="border">Rs 800</td>
				<td id="border">Rs 1200</td>
			</tr>
			<tr>
				<td>.</td>
			</tr>
			
				<!-- ---------------------------------------------------------------------------- -->
				<tr>
				<th id="td">Musroom&nbsp;Pizza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<div class = "size">
				<td>Small <input type="radio" name="size" value="Musroom Small"></td>
				<td>Medium<input type="radio" name="size" value="Musroom Medium"></td>	
				<td>Large<input type="radio" name="size" value="Musroom Large"></td>
				<td>ExtraLarge<input type="radio" name="size" value="Musroom ExtraLarge"></td></div>
			</tr>
			<tr>
				<td id="border">Tasty Mashrooms with olive oil and Goat cheese</td>
				<td id="border">Rs 300</td>
				<td id="border">Rs 600</td>
				<td id="border">Rs 800</td>
				<td id="border">Rs 1200</td>
			</tr>
			<tr>
				<td>.</td>
			</tr>
			<!-- ---------------------------------------------------------------------------- -->
				<tr>
				<th id="td">New&nbsp;Yorker&nbsp;Pizza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<div class = "size">
				<td>Small <input type="radio" name="size" value="NY Small"></td>
				<td>Medium<input type="radio" name="size" value="NY Medium"></td>	
				<td>Large<input type="radio" name="size" value="NY Large"></td>
				<td>ExtraLarge<input type="radio" name="size" value="NY ExtraLarge"></td></div>
			</tr>
			<tr>
				<td id="border">Cheese Dough with Breast Chicken and Tomato Sause</td>
				<td id="border">Rs 300</td>
				<td id="border">Rs 600</td>
				<td id="border">Rs 800</td>
				<td id="border">Rs 1200</td>
			</tr>
			
			<tr >
				<td>.
				</td>
			</tr>
				<!-- ---------------------------------------------------------------------------- -->

		</table>
		<div class="rec_full"></div><br>

	</section>
	<section class="checkout">
	<input type="submit" name="submit" value="Add to Cart" class="submit" onsubmit return ="validation()">
	</section>
	<a href="logout.php" id="log">Log Out</a><br>

	<section class="checkout">
	<a href = "delete.php?id=<?php echo $_SESSION['ids'] ?>" id="del" >Delete</a>
	</section>
	<a href = "updates.php?id=<?php echo $_SESSION['ids' ] ?>"id="edit">Edit</a>
	<?php 

			$selectquery = "select * from user_register";

			$query=mysqli_query($conn,$selectquery);
?>
			
			
	
	

	<br>
	</form>
	</section>
	
</body>
</html>
<style type="text/css">
	h1#h1{
		color: darkred;
		font-size: 30px;
		font: Georgia;
		font-weight: bold;
		background-color: rgba(199, 195, 195, .7);
}
body{
		background: url(images/3.jpg) rgba(0, 0, 0, 0.5); 
		width: 100%;
		height: 100%;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		background-blend-mode: overlay;
	}
		
	.up{
		width: 700px;
		height:250px;
		background-image: url("images/1.jpg");
		background-repeat: no-repeat;
		background-size: cover;		
		background-position: center;
		display: flex;
		align-items: center;
		justify-content: center;
		
		
	}
	

	
	.middle{
		width: 700px;
		margin: 0px auto 0px auto;
		border-style: solid;
		border-width: 2px;
		border-color: silver;
		background-color: white;

	}
	
	
	.one{
		width: 750;
		margin: auto;
		width: 750;
		

	}
	.rec_green{
		width: 200px;
		height: 10px;
		background-color: yellowgreen;
	}
	.rec_red{
		width: 200px;
		height: 10px;
		background-color: orangered;
	}
	.rec_full{
		width: 100%;
		height: 5px;
		background-color: darkred;
	}
	.two{
		background-color: antiquewhite;
		border-bottom: solid darkred;
	}
	.four{
		width: 700px;
		font-size: 18px;
	}
	th#td{
		border-right: solid;
		border-width: 2px;
		font: Georgia;
		font-size: 17px;
		color: rgba(100, 10, 10, 100);
		width: 185px;
		border-left: solid 2px;
		
	}
	td#border{
		border-bottom: solid;
		border-width: 2px;	
	}
	.checkout{
		background-color: white;
		display: flex;
		/*justify-content: center;*/
		float: right;		
	}
	.submit{
		width: 200px;
		height: 40px;
		font: georgia;
		font-family: all;
		font-weight: bold;
		font-size: 18px;
		color: white;
		background-color: black;
		border-radius: 15px;
		border-width: .1px;
	}
	
a#log{
	width: 200px;
		height: 40px;
		font: georgia;
		font-family: all;
		font-weight: bold;
		font-size: 18px;
		color: white;
		background-color: black;
		border-radius: 15px;
		border-width: .1px;
		display: flex;
		justify-content: center;
		align-items: center;
}	
a#edit{
	width: 200px;
		height: 40px;
		font: georgia;
		font-family: all;
		font-weight: bold;
		font-size: 18px;
		color: white;
		background-color: black;
		border-radius: 15px;
		border-width: .1px;
		display: flex;
		justify-content: center;
		align-items: center;
}	
a#del{
	width: 200px;
		height: 40px;
		font: georgia;
		font-family: all;
		font-weight: bold;
		font-size: 18px;
		color: white;
		background-color: black;
		border-radius: 15px;
		border-width: .1px;
		display: flex;
		justify-content: center;
		align-items: center;
}	


</style>