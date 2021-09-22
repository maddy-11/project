<!Doctype HTML>
  <head>
    <?php include 'links.php' ?>
  </head>
  <style>
  body{
    background-color: silver;
  }

  input#srch{
    width: 250px;
    height: 32px;
    display: flex;
    justify-content: left;
    align-items: center;
    margin: auto;
    border: none;
    background: rgba(0,0,0,.3);
    font-size: 16px;
    text-align: center;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    border-bottom: solid Black 2px;
  }
  button#sub{
    width: 40px;
    height: 32px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
    border: none;
    font-size: 16px;
    background: black;
    color: whitesmoke;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-bottom: solid Black 2px;
  }
  button#sub:hover{
    background: white;
    color: black;
  }
  input#srch::placeholder {
  font-size: 16px;
  color: whitesmoke;
  text-align: center;
  
}
.div{
    display: flex;
    justify-content: center;
}
</style>
  <html>
  <body>
    <br>
    <hr>
  <form method='POST' rel='nofollow' target='_blank'>
    <div class="div">
    <div>
  <input type="text" name="search" id="srch" placeholder="Search on Amazon"></div><div>
  <button type="submit" id="sub" name="submit">
    <i class="fa fa-search"></i>
</button>
  </div></div>

</body>
  </html>
  
  <?php 
  if(isset($_POST['submit']))
  {
    $srch = $_POST[('search')]; 
    header('location:https://www.amazon.com/s?k='. $srch);
    

  }

?>

  