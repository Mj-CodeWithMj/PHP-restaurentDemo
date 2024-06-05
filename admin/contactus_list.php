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
                                <h1>Contact us list</h1>
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
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
<!-- ================================== php connection start ================================== -->
<?php 

$con=mysqli_connect("localhost","root","","restaurent");
$data=$con->query("select * from contact");

while($row=$data->fetch_object())
{

?>
  
    <tr>
        <td><?php echo $row->id;                         ?></td>
        <td><?php echo $row->name;                       ?></td>
        <td><?php echo $row->email;                      ?></td>
        <td><?php echo $row->subject;                    ?></td>
        <td class="text-left"><?php echo $row->message;  ?></td>
    </tr>


<?php 

}

?>
<!-- ==================================  php connection end  ================================== -->

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
