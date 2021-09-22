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
    <title>Bill</title>
    <?php 
        include 'testing.php';
        include 'links.php';
    ?>
  </head>
<body>
     <div class="navmenu">
            <a href = "menu.php"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "updates.php?id=<?php echo $_SESSION['ids'] ?>"> Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "delete.php?id=<?php echo $_SESSION['ids'] ?>"> Delete ID</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href = "logout.php"> Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
        </div>


    <section class="bill">
        <h1 style="text-align-last:center">Your Bill</h1>
        <hr>
<table width="600px" id="clr">
      <thead>
      <tr>

        <th>Flavor</th>
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
    $sum = $row['value_sum'];
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
      <br>
      <hr>
      <?php 
      if(isset($_SESSION['_amount'])){
        ?>
            <p style="text-align-last:right">Sub Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="price" style="color:black"><b><?php echo $_SESSION['_amount'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span></p>
        <?php
      }
      else{
        ?>
        <p style="text-align-last:right">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="price" style="color:black"><b><?php echo $sum ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span></p>
        <?php
      }
      ?>
      <div class="button">
          <form method="POST">
              <input type="submit" name="submit" id="submitt" value="Return to Menu" data-toggle="tooltip" data-placement="top" title="Menu" >
          </form>
      </div>
      <?php
      if(isset($_POST['submit'])){
      $query="delete from items where user = $id";
      $equery=mysqli_query($conn,$query);
      $_SESSION['_amount']=0

?>
<script type="text/javascript">
    location.replace("menu.php");
</script>
<?php
  }
      ?>
      
  </section>
</body>
</html>

<style type="text/css">
    .bill{
        width: 700px;
        margin: 50px auto auto auto;
        padding: 10px;
        border: solid 1px;
        box-shadow: 0px 10px 20px 0px rgba(100, 108, 100, .5);

    }
    table{
        text-align: center;
        margin: auto;

    }
    .button{
        width: 200px;
        margin: auto auto auto;
    }
    input#submitt{
        background: antiquewhite;
        border: solid 1px grey;
        border-bottom: solid grey 2px;
        border-radius: 10px;
        font-size: 20px;
    }
    input#submitt:hover{
        background: black;
        color: white;
    }

</style>