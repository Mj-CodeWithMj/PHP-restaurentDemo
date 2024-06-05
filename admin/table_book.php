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
                                <h1>Guest Registered</h1>
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
            <th>Full Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>No of People</th>
            <th>Message</th>
            <th>Delete</th>
           </tr> 

    <?php 


     $con=mysqli_connect("localhost","root","","restaurent");
     $data=$con->query("select * from table_book");

     while($row=$data->fetch_object())
     {

    ?>
        <tr>
          <td><?php echo $row->id;      ?></td>
          <td><?php echo $row->fname;   ?></td>
          <td><?php echo $row->email;   ?></td>
          <td><?php echo $row->date;    ?></td>
          <td><?php echo $row->selc;    ?></td>
          <td><?php echo $row->message; ?></td>
          <td class="text-left"><a href="delete_table_book.php?book=<?php echo $row->id; ?>">
            <i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
    <?php

     }


    ?>
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
