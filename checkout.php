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
  <title>View Cart</title>
  <?php 
  include 'links.php';
  include 'css/checkout.css';
  include 'testing.php';
  ?>
  <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>
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
<div id="map"></div>
  <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </div>
<section class="row">
  <section class="col-75">
    <div class="container">
      <form method="POST" style="width: 650px;">

        
          <div class="col-50" style="font-size:18px">
            <h3>Delivery Address</h3>
            
            <label for="adr"><i class="fa fa-map-marker" style="font-size:20px"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="CUI Abbottabad">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Abbottabad">

            
              <div class="rows" style="width:650px">
                <div class="col-50">
                <label for="province">Province</label>
                <input type="text" id="province" name="province" placeholder="KPK">
              </div>
              <div class="col-50">
                <label for = "phone"><i class="fa fa-phone"></i> Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="03*********">
              </div>
            </div>
          </div>

          <div class="col-50">
            <hr>
            <h3>Payment</h3>
            <label>Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy; font-size: 30px;"></i>
              <i class="fa fa-cc-paypal" style="color:blue;font-size: 30px;"></i>
              <i class="fa fa-cc-mastercard" style="color:orangered;font-size: 30px;"></i>
              <i class="fa fa-cc-discover" style="color:red;font-size: 30px;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="card_name" placeholder="Syed Mehmood Shah"required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="card_number" placeholder="1111222233334444"required>
            <div class="rows" style="width: 650px;">
              <div class="col-50">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="exp_month" placeholder="01"required>
          </div>
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="exp_year" placeholder="2021" required>
              </div>

              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
            </div>
              </div>
          </div>
        </div>
        <hr>
        
        <input type="submit" value="Continue to checkout" class="btn"data-toggle="tooltip" name="submit" data-placement="top" title="Check Out">

      </form>
    </div>
  </section>
</section>
  <br>
</body>
</html>


  

<?php 
if(isset($_POST['submit'])){  
  ?>


  <?php
      
      $cdname=$_POST['card_name'];
      $crdnum=$_POST['card_number'];
      $crdmonth=$_POST['exp_month'];
      $crdyr=$_POST['exp_year'];
      $crdcvv=$_POST['cvv'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $province = $_POST['province'];
      $phone = $_POST['phone'];

      $myquery= "insert into Billing_address (Address,City,Province,phone)values('$address','$city','$province','$phone');";
    $m=mysqli_query($conn,$myquery);
    
    

      $query = "select * from card where crd_num = '$crdnum'";
      $equery= mysqli_query($conn,$query);

      $count= mysqli_num_rows($equery);

      $cdata = mysqli_fetch_assoc($equery);
      

  if($count){
      /* -------------------------------*/      
      $cname = $cdata['crd_name'];
      $cname = $cdata['crd_name'];
      $cmonth = $cdata['crdex'];
      $cyear = $cdata['crdyr'];
      $ccvv = $cdata['cvv'];


      if($cdname == $cname){
                
        if($crdmonth == $cmonth){

        if($crdyr == $cyear){

        if($crdcvv == $ccvv){
        ?>
        <script type="text/javascript">
          alert("Successful");
          location.replace("bill.php?id=<?php echo $_SESSION['ids'] ?>");
        </script>
        <?php

      }}}}}
      
      /* -------------------------------*/ 
  
  else{
        ?>
      <script type="text/javascript">
        alert("Sorry Card Was Declined");
      </script>
    <?php
    
  }
}
  

  ?>



<style>
  body{
    width: 100%;
    height: 100%;
    /*background: url(images/3.jpg) rgba(0, 0, 0, 0.5);*/
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center ;
    background-blend-mode: overlay;
    font-family: all ;
}
</style>
  

