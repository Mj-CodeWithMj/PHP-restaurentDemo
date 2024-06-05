<?php 

  $id=$_GET['menu'];
  $con=mysqli_connect("localhost","root","","restaurent");
  $data=$con->query("select * from add_menu where id=$id");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
     include("headerlink.php"); 
    ?>
</head>

<body>

    <!--  sidebar start -->
    <?php 
     include("sidepanel.php");
    ?>
    <!--  sidebar end -->

    <!--  Header start -->
    <?php 
     include("header.php");
    ?>
    
    <!--  Header end -->

    <!--  Main body start -->

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Add Menu</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <!-- ================================== code here ================================== -->
       <div class="container">
           <div class="form-floating">
              <div class="form-group">
              	<form method="post" enctype="multipart/form-data">
<?php

while($row=$data->fetch_object())

{

?>                     
              		Item Name:<input type="text" name="item_name" id="item_name" class="form-control" placeholder="Item Name">
              		<br>
              		Item Image:<input type="file" name="item_img" id="item_img" class="form-control">
              		<br>
              		Item Description:<input type="text" name="detail" id="detail" class="form-control"
              		placeholder="Item Description">
              		<br>
              		Item Price:<input type="text" name="price" id="price" class="form-control" placeholder="Item price">
              		<input type="submit" name="submit" id="submit" value="Add Menu" 
              		class="form-control">
<?php

}

?>                    
              	</form>
<!-- ================================== php code start ================================== -->
<?php 

    $ext = strtolower(pathinfo($_FILES["item_img"]["name"],PATHINFO_EXTENSION));
    $name=uniqid();
    $name=$name.".".$ext;
    move_uploaded_file($_FILES["item_img"]["tmp_name"], "item_img/$name");

    if($_POST)
    {
       
      $item_name=$_POST['item_name'];
      $detail=$_POST['detail'];
      $price=$_POST['price'];

      $con=mysqli_connect("localhost","root","","restaurent");
      $con=query("update add_menu set item_name='$item_name',item_img='$name',detail='$detail',
        price='$price' where id=$id");

      echo "<script>window.location.href='manage_menu.php';</script>";

    }
?>
<!-- ==================================  php code end  ================================== -->
              </div>   
           </div>
       </div>
    <!-- ================================== code here ================================== --> 
        </div>
    </div>

    <!--  Main body end -->

    <!--  footerlink start -->
    <?php 
      include("footerlink.php");
    ?>
    <!--  footerlink end -->
</body>

</html>
