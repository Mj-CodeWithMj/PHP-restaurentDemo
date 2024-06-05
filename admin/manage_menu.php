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
                                <h1>Menu list</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <!-- ================================== code here ================================== -->
       <div class="container">
          <table class="table table-bordered">
            <tr>
                <th>Sr no</th>
                <th>Item Name</th>
                <th>Item Image</th>
                <th>Item Description</th>
                <th>Item Price</th>
                <th>Action</th>
            </tr>
<!-- ================================== php code start ================================== -->
<?php 

    $con=mysqli_connect("localhost","root","","restaurent");
    $data=$con->query("select * from add_menu");

    while($row=$data->fetch_object())
    {

?>
            <tr>
                <td><?php echo $row->id;                ?></td>
                <td><?php echo $row->item_name;         ?></td>
                <td><?php echo $row->item_img;          ?></td>
                <td><?php echo $row->detail;            ?></td>
                <td><?php echo $row->price;             ?></td>
                <td class="text-left"><a href="delte_manage_menu.php?menu=<?php echo $row->id; ?>">
                <i class="fa fa-trash" aria-hidden="true"></i></a>/
                <a href="edit_menu.php?menu=<?php echo $row->id; ?>"><u>Edit</u></a>
                </td>
            </tr>





<?php

    }


?>
<!-- ==================================  php code end  ================================== -->         
          </table>
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
