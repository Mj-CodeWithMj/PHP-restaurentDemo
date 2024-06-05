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
                                <h1>Staff list</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <!-- ================================== code here ================================== -->
       <div class="container">
           <table class="table table-bordered 10px">
            <tr>
                <th>Sr no</th>
                <th>Full Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>surname</th>
                <th>Image</th>
                <th>Mobile Number</th>
                <th>Birth Date</th>
                <th>Other deatils</th>
                <th>Action</th>
            </tr>
<!-- =================================== php connection start =================================== -->
<?php


    $con=mysqli_connect("localhost","root","","restaurent");
    $data=$con->query("select * from add_staff");

    while($row=$data->fetch_object())
    {
?> 
        <tr>
            <td><?php echo $row->id;                ?></td>
            <td><?php echo $row->fname;             ?></td>
            <td><?php echo $row->first_name;        ?></td>
            <td><?php echo $row->mid_name;          ?></td>
            <td><?php echo $row->surname;           ?></td>
            <td><?php echo $row->staff_img;         ?></td>
            <td><?php echo $row->mbl;               ?></td>
            <td><?php echo $row->bdate;             ?></td>
            <td><?php echo $row->details;           ?></td>
            <td class="text-left"><a href="delete_manage_staff.php?staff=<?php echo $row->id; ?>">
                <i class="fa fa-trash" aria-hidden="true"></i></a> /
                <a href="edit_staff.php?staff=<?php echo $row->id; ?>"><u>Edit</u></a>
            </td>

        </tr>

<?php

    }



?>
<!-- ==================================== php connection end ==================================== -->
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
