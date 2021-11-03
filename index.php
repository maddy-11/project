<?php 
include_once("./index.html")
session_start();

?>



<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    
    

    <title>Welcome <?php echo $_SESSION['_user'] ?></title>
    <?php include 'links.php' ?>
</head>
<body>
<div class="navmenu">
            <a href = "index.php"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "register.php"> Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "login.php"> Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            
        </div>
   


        <div class="up";>
			
		</div>



    <div class="menu">
        <div class="heading">
            <h3>Perfect Has 7 letters, So Does Pizzzza</h3>
            <h1>&mdash; MENU &mdash;</h1>
        </div>
        <div class="food-items">
            <img src="images/PP.jpeg" width="220px" height="300px" >
            <div class="details">
                <div class="details-sub">
                    <h4>Pepperone Pizza</h4>
                    <h5 class="price"> 4.6/5 </h5>
                </div>
                <p>Pepperoni is an American variety of salami, made from cured pork and beef seasoned with paprika or other chili pepper.</p>
            </div>
        </div>

        <div class="food-items">
            <img src="images/HP.jpeg" width="220px" height="300px" >
            <div class="details">
                <div class="details-sub">
                    <h4>Hawaiian Pizza</h4>
                    <h5 class="price"> 4.5/5 </h5>
                </div>
                <p>Hawaiian pizza is a type of pizza originating in Canada, best known for having pineapple and either ham or bacon as toppings.</p>
            </div>
        </div>

        <div class="food-items">
            <img src="images/IP.png" width="220px" height="300px" >
            <div class="details">
                <div class="details-sub">
                    <h4>Italian Pizza</h4>
                    <h5 class="price"> 4.5/5 </h5>
                </div>
                <p>With real italian pizza, you will find homemade sauce made from freshly peeled tomatoes and a blend of savory, complimenting herbs.</p>
            </div>
        </div>

        <div class="food-items">
            <img src="images/CF.jpeg" width="220px" height="300px" >
            <div class="details">
                <div class="details-sub">
                    <h4>Chicken Fajita Pizza</h4>
                    <h5 class="price"> 4.7/5 </h5>
                </div>
                <p>Pizza topped with chicken, bell peppers, onions and salsa. Another family favorite that has been adapted from a Pillsbury Bake-off recipe.</p>
            </div>
        </div>

        <div class="food-items">
            <img src="images/ML.jpeg" width="220px" height="300px" >
            <div class="details">
                <div class="details-sub">
                    <h4>Meat Lovers Pizza</h4>
                    <h5 class="price"> 4.9/5 </h5>
                </div>
                <p>Meat Lover's Pizza ... Homemade thin crust pizza, topped off with two types of cheese, bacon, ham, pepperoni and hot sausage! A must make for meat lover's.</p>
            </div>
        </div>

        <div class="food-items">
            <img src="images/MP.jpeg" width=220px height="300px" >
            <div class="details">
                <div class="details-sub">
                    <h4>Margherita Pizza</h4>
                    <h5 class="price"> 4.7/5 </h5>
                </div>
                <p>Margherita Pizza cooking information, facts and recipes. An Italian pizza that historically could only be made in a wood burning oven using flatbread</p>
            </div>                    
        </div>
        
    </div>
    <div class="container-contact2-form-btn">
        <div class="wrap-contact2-form-btn">

            </script>

            
            <button class="contact2-form-btn" id="myyButton" type="submit" name="login-btns" onsubmit return="log()"data-toggle="tooltip" data-placement="top" title="Log In">
            Log In
            </button>

            <script type="text/javascript">
                document.getElementById("myyButton").onclick = function () {
                    location.href = "login.php";
                }
                
            </script>
            


            <button class="contact3-form-btn" id="myButton2" type="submit" name="ordernow-btns"data-toggle="tooltip" data-placement="top" title="Order Now">
                Order Now
            </button>
            <p>You can Order Only if You are Logged In!</p>
            <br>
            <script type="text/javascript">
                document.getElementById("myButton2").onclick = function () {
                    
                    location.replace("orderform.php?id=<?php echo $_SESSION['ids']?>");
                }
            </script>
            
        </div>
    </div>
</body>
</html>

<style type="text/css">
    h5{
        color:  orange;
    }
    
button#myButton2:hover{
  background: grey;
  color: white;  
 }
 button#myyButton:hover{
  background: red;
  color: white;  
 }
</style>
