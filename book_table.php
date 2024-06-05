    <!DOCTYPE html>
<html lang="en">

<head>
     <?php

    include("headerlink.php");

   ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
 function a1()
 {
 

  var fname=$("#fname").val();
  if(fname=="")
  {
    alert("Enter Full Name");
    return false;
  }

  var email=$("#email").val();
  if(email=="")
  {
    alert("Enter email");
    return false;
  } 

  var date=$("#date").val();
  if(date=="")
  {
    alert("Enter date");
    return false;
  }

  var selc=$("#selc").val();
  if(selc=="Select No Of People")
  {
    alert("Select No Of People");
    return false;
  }

  var message=$("#message").val();
  if(message=="")
  {
    alert("Enter message");
    return false;
  }




 }
</script>   

</head>

<body>
    <div class="container-xxl bg-white p-0">
    


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php

                include("nav.php")

            ?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Book Table</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Book Table</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Book table Start -->
               
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/xPPLbEFbCAo" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Your Name" >
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="date" class="form-control datepicker-input" 
                                        name="date" id="date" placeholder="Date" data-target="#date3" data-toggle="datepicker">
                                        <label for="date">Date</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="selc" id="selc">
                                          <option>Select No Of People</option>  
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" name="message" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" name="submit" id="submit" value="Book Now" class="form-control" onclick="return a1();">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- php databse work start  -->
    <?php 

        if($_POST)
       {     

        $fname=$_POST['fname'];
        $email=$_POST['email'];
        $date=$_POST['date'];
        $selc=$_POST['selc']; 
        $message=$_POST['message']; 
       
        $con=mysqli_connect("localhost","root","","restaurent");

        $con->query("INSERT INTO `table_book`(`fname`, `email`, `date`, `selc`, `message`) VALUES ('$fname','$email','$date','$selc','$message')");



        }
    ?>
    <!-- php databse work end  -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" 
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Reservation end -->
        
    <!-- Footer Start -->
    
        <?php 

            include("footer.php");

         ?>

    <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php 
        include ("footer_link.php");

     ?>
     
</body>

</html>