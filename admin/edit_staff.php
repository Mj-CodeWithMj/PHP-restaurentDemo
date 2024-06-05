<?php 

    $id=$_GET['staff'];
    $con=mysqli_connect("localhost","root","","restaurent");
    $data=$con->query("select * from add_staff where id=$id");

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
                                <h1>Edit Staff Registration</span></h1>
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

                        Full Name:<input type="text" name="fname" id="fname" class="form-control" 
                        placeholder="Full Name" value="<?php echo $row->fname;             ?>">
                        <br>
                        First Name:<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" 
                                                  value="<?php echo $row->first_name;        ?>">
                        <br>
                        Middle name:<input type="text" name="mid_name" id="mid_name" class="form-control" placeholder="Middle Name" 
                                                  value="<?php echo $row->mid_name;          ?>">
                        <br>
                        Surname:<input type="text" name="surname" id="surname" class="form-control" placeholder="Surname"      value="<?php echo $row->surname;           ?>">
                        <br>
                        Staff Image:<input type="file" name="staff_img" id="staff_img" class="form-control"              value="<?php echo $row->staff_img;         ?>">
                        <br>
                        Mobile Number:<input type="number" name="mbl" id="mbl" class="form-control" placeholder="Mobile Number" value="<?php echo $row->mbl;               ?>">
                        <br>
                        Birthdate:<input type="date" name="bdate" id="bdate" class="form-control" placeholder="Birthdate"     value="<?php echo $row->bdate;             ?>">
                        <br>
                        Other details:<input type="text" name="details" id="details" class="form-control" placeholder="Other details" 
                                                    value="<?php echo $row->details;           ?>">
                        <br>
                        <input type="submit" name="submit" id="submit" value="Edit staff" 
                               class="form-control">

<?php  

}

?>
                    </form>
<!-- =================================== php connection start =================================== -->
<?php 

if($_POST)
{


  $ext = strtolower(pathinfo($_FILES["staff_img"]["name"],PATHINFO_EXTENSION));
  $name=uniqid();
  $name=$name.".".$ext;
  move_uploaded_file($_FILES["staff_img"]["tmp_name"], "staff_img/$name");

  
  $fname=$_POST['fname'];
  $first_name=$_POST['first_name'];
  $mid_name=$_POST['mid_name'];
  $surname=$_POST['surname'];                                                   
  $mbl=$_POST['mbl'];
  $bdate=$_POST['bdate'];
  $details=$_POST['details'];

  $con=mysqli_connect("localhost","root","","restaurent");
  $con->query("update add_staff set fname='$fname',first_name='$first_name',
               mid_name='$mid_name',surname='$surname', staff_img='$name' , mbl='$mbl',
               bdate='$bdate',details='$details' where id=$id");

  echo "<script>window.location.href='manage_staff.php';</script>";




}
?>
<!-- ==================================== php connection end ==================================== -->                
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
