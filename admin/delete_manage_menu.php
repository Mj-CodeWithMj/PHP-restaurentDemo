<?php 

  $id=$_GET['menu'];
  $con=mysqli_connect("localhost","root","","restaurent");
  $data=$con->query("delete from add_menu where id=$id");


  echo "<script>window.location.href='manage_menu.php';</script>";
  


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>