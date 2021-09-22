
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete</title>
</head>
<body>

</body>
</html>
<?php 
include 'testing.php';

$id=$_GET['id'];

$delquery = "delete from user_register where ID = $id";

$dquery = mysqli_query($conn,$delquery);

if($dquery){
	?>
	<script type="text/javascript">
		alert("Deleted Successfully");

	/*-----------------------------------------*/
<?php 
session_start();
session_destroy();
if(!isset($_SESSION['id'])){

	?>
	<script type="text/javascript">
		alert("Sorry You are not Logged In");
		location.replace("login.php")
	</script>
	<?php
}


/*-----------------------------------------*/
?>
<script type="text/javascript">
	alert("Account Deleted Successfully ")
	location.replace("login.php")
		</script>
	<?php
}
else
{
	?>
	<script type="text/javascript">
		alert("NO Success")
	</script>
	<?php
}

?>