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
  <title>Cart</title>
  <link rel = "stylesheet" href="css/checkout.css">
  <?php include 'testing.php';
  include 'links.php';

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



<section class="row">
<section class="col-25">
    <div class="container">
      <h4><strong>Cart</strong>
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
        </span>
      </h4>
      <!-- ===================================================== -->
        
          <table width="600px" id="clr">
      <thead>
      <tr>

        <th>Pizza</th>
        <th>Size</th>
        <th>Number of Items</th>
        <th>Toppings</th>
        <th>Amount</th>
        <th>T.Amount</th>
      </tr>
        </thead>
    <tbody">  
        <?php
        $id = $_GET['id'];
      
      $selectquery = "select * from items where user = $id";
      $addquery = "SELECT SUM(number)FROM items where user = $id";

      $raddquery=mysqli_query($conn,$addquery);
      
      $query=mysqli_query($conn,$selectquery);
      

    /*-------------------------*/
    $result = mysqli_query($conn, "SELECT SUM(tamount) AS value_sum FROM items where user = {$id}");
    $row = mysqli_fetch_assoc($result); 
    $_SESSION['_amount']=$row['value_sum'];
    /*-------------------------*/
      while ($fetch = mysqli_fetch_array($query)) {
      ?>
      <tr>
      <td><?php echo $fetch['pizza']?> </td>
      <td><?php echo $fetch['size']?></td>
      <td style="text-align-last:center;"><?php echo $fetch['number']?></td>
      <td style="text-align-last: center;"><?php echo $fetch['topping']?></td>
      <td><?php echo $fetch['amount']?></td>
      <td><?php echo $fetch['tamount']?></td>
      </tr>
<?php
      
    }
  ?>
    </tbody>
  </table></div>
      </thead>
      <tbody">
      </table">
      <!-- ===================================================== -->
      <hr>
      
            <form method="POST">
      <input type="text" name="memberID" placeholder="Enter Member ID" id="coupon">
      
    <input id="member" type="submit" name="coupon"data-toggle="tooltip" data-placement="top" title="Get 50% Off!" value="Apply" >
    </form>       
           
              <?php 
              if(isset($_POST['coupon'])){
              $memID = $_POST['memberID'];
              
              $query = "select * from member where memberID = '$memID'";
              
              $equery= mysqli_query($conn,$query);
               
              $count= mysqli_num_rows($equery);
             

                $_SESSION['_amount']=$row['value_sum'];
              if($count)
              {
                
                $row['value_sum']=$row['value_sum']/2;
                $_SESSION['_amount']=$row['value_sum'];
              }
              else{
                ?>
                <script type="text/javascript">
                 alert("Member Not Found");
                </script>
                <?php
              }
            }


              ?>
                
            </script>
      <br>
      
                    
      <p>Total <span class="price" style="color:black"><b><?php echo $row['value_sum'] ?></b></span></p>
    </div>
  </section>
</section>
    

    <hr>
    <button class="contact3-form-btn" id="myButton2" type="submit" name="Check Out"data-toggle="tooltip" data-placement="top" title="Check Out">
                Check Out
            </button>

            <script type="text/javascript">
                document.getElementById("myButton2").onclick = function () {
                    location.href = "checkout.php";
                }
            </script>
</body>
</html>


<style type="text/css">
  .row {
  width: 700px;
  font-family: all;
  margin: 100px auto 0px auto;
  }
.contact3-form-btn {
    background: black;
    display: flex;
    justify-content: center;
    align-items: center;
    border-color: white;
    padding: 0 20px;
    min-width: 244px;
    height: 50px;
    font-family: all;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    margin-top: 8px;
    margin-bottom: 50px;
    margin: auto;
  }
  .contact3-form-btn:hover{
    background: grey;
  }

  input#member{
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
    
  }
  input#member:hover{
    background-color: black;
  }
</style>