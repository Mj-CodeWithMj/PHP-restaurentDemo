<?php

 
 $id=$_GET['book'];
 $con=mysqli_connect("localhost","root","","restaurent");
 $data=$con->query("delete from table_book where id=$id");



echo "<script>window.location.href = 'table_book.php';</script>";




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