<!DOCTYPE html>
<html lang="en">

<head>
     <?php

    include("headerlink.php");

   ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
           <?php

                include("nav.php")

            ?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Shakshouka.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Shakshouka</span>
                                                <span class="text-primary">₹120</span>
                                            </h5>
                                            <small class="fst-italic">Shakshouka is a mediterranean dish of eggs poached in a hearty, spiced sauce made of tomatoes.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Macaroni Pola.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Macaroni Pola</span>
                                                <span class="text-primary">₹130</span>
                                            </h5>
                                            <small class="fst-italic">Macaroni Pola is a delicious dish with macaroni in malabar style. You may also call it macaroni cake / pancake / pizza.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mushroom and Cheese Omelette</span>
                                                <span class="text-primary">₹150</span>
                                            </h5>
                                            <small class="fst-italic">This delicious omelette is enjoyed by kids as well as adults. It can be served as brunch or snack too. It tastes best when served hot .Serve it with buttered bread or toast.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Cheesy Chicken Dinner Rolls.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cheesy Chicken Rolls</span>
                                                <span class="text-primary">₹190</span>
                                            </h5>
                                            <small class="fst-italic">Here is the recipe of a delicious Cheesy Chicken Rolls . These rolls stuffed with chicken and cheese is simply WOW</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Instant wheat flour dosa.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Wheat Flour Dosa</span>
                                                <span class="text-primary">₹110</span>
                                            </h5>
                                            <small class="fst-italic">This recipe makes it a good option for breakfast or dinner. This is a soft version of dosa, hence it’s suitable for babies too.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Chicken Oats.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Oats</span>
                                                <span class="text-primary">₹170</span>
                                            </h5>
                                            <small class="fst-italic">Chicken Oats also be called oats haleem or cheat haleem. It can be served for Lunch, dinner & ifthar too.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Grilled Egg Sandwich.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Grilled Egg Sandwich</span>
                                                <span class="text-primary">₹185</span>
                                            </h5>
                                            <small class="fst-italic">A simple and delicious grilled sandwich using egg filling ! Try it out !</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/tea coffe.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tea,Coffe</span>
                                                <span class="text-primary">₹40,45</span>
                                            </h5>
                                            <small class="fst-italic"> Tea and Coffe</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Mutton Rezala.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mutton Rezala</span>
                                                <span class="text-primary">₹230</span>
                                            </h5>
                                            <small class="fst-italic">Mutton Rezala, A Bengali Dish is a delicious curry which is made in Yogurt, Cashew and Poppy seeds paste that gives it a rich flavour.<br><b>complimentry:</b>Served with 2 Tandoori Roti or 2 Naan</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Murgh Ajmeri.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Murgh Ajmeri</span>
                                                <span class="text-primary">₹250</span>
                                            </h5>
                                            <small class="fst-italic">It is a spicy chicken delicacy where the marinated chicken pieces are slow cooked with Indian spices.<br><b>complimentry:</b>Served with 2 Tandoori Roti or 2 Naan</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/CHICKEN KEEMA MATAR.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Keema Matar</span>
                                                <span class="text-primary">₹260</span>
                                            </h5>
                                            <small class="fst-italic">Since keema matar is the most popular dish served at almost every other restaurant in India and across South-east Asia, therefore, you will find many variations of Chicken keema matar.<br><b>complimentry:</b>Served with 2 Tandoori Roti or 2 Naan or one bowl Rice</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/POT INDIAN CHICKEN CURRY.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pot Indian Chicken Curry</span>
                                                <span class="text-primary">₹290</span>
                                            </h5>
                                            <small class="fst-italic">Aromatic yet mild Instant Pot Indian Chicken Curry is a quick and easy one-pot meal that comes together in less than an hour.<br><b>complimentry:</b>Served with 2 Butter Roti or one bowl Rice</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/CHICKEN BIRYANI.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Biryani</span>
                                                <span class="text-primary">₹290</span>
                                            </h5>
                                            <small class="fst-italic">Packed with fragrant rice and juicy, tender pieces of chicken, it’s a perfect one-pot dinner recipe that your whole family will love.<br><b>complimentry:</b>Served with 2 Cold Drinks or 2 Butter Milk</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Jeera Rice Recipe.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Jeera Rice </span>
                                                <span class="text-primary">₹210</span>
                                            </h5>
                                            <small class="fst-italic">Jeera Rice-Cumin And Ghee Flavored Rice is the simplest rice recipe that you can serve with your meals.<br><b>complimentry:</b>Served with 2 Cold Drinks or 2 Butter Milk</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/BAKED HERB CHICKEN.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Baked Herb Chicken</span>
                                                <span class="text-primary">₹270</span>
                                            </h5>
                                            <small class="fst-italic">With just a handful of ingredients and in less than 40 minutes, you have a perfectly baked chicken on the table that is juicy, delicious, and so incredibly flavorful.<br><b>complimentry:</b>Served with 2 Cold Drinks or 2 Butter Milk</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Tandoori Roti.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Butter Roti,Tandoori Roti,Naan Roti    </span>
                                                <span class="text-primary">₹35,45,50</span>
                                            </h5>
                                            <small class="fst-italic">Butter Roti,Tandoori Roti,Naan Roti.Rates are According Roti.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Chicken Sizzler.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Sizzler</span>
                                                <span class="text-primary">₹350</span>
                                            </h5>
                                            <small class="fst-italic">Chicken sizzler uses a marinated, crispy, and tender chicken breast served with stir-fried vegetables and rice on a hot plate.<br><b>complimentry:</b>Served with 2 Cold Drinks.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/chiken 65.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken 65</span>
                                                <span class="text-primary">₹250</span>
                                            </h5>
                                            <small class="fst-italic">One of the spiciest chicken delicacies of South Indian cuisine, Chicken 65 is a delight for lovers.<br><b>complimentry:</b>Served with 2 Cold Drinks.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/CHICKEN BIRYANI.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>ChiCken Biryani</span>
                                                <span class="text-primary">₹290</span>
                                            </h5>
                                            <small class="fst-italic">Packed with fragrant rice and juicy, tender pieces of chicken, it’s a perfect one-pot dinner recipe that your whole family will love.<br><b>complimentry:</b>Served with 2 Cold Drinks or 2 Butter Milk</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/soup.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Manchow Soup</span>
                                                <span class="text-primary">₹200</span>
                                            </h5>
                                            <small class="fst-italic">This hot and spicy Indo-Chinese soup is popular in India.This hot and spicy Indo-Chinese soup is popular in India and is a favorite.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/dinner special.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Jumbo Mix Dinner Special</span>
                                                <span class="text-primary">₹450</span>
                                            </h5>
                                            <small class="fst-italic">This is mix jambo dinner special pack include starter,meal,drinks.  </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/malai tika pulao.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Malai Tika Pulao</span>
                                                <span class="text-primary">₹250</span>
                                            </h5>
                                            <small class="fst-italic">Packed with fragrant rice and juicy, tender pieces of chicken, it’s a perfect one-pot dinner recipe that your whole family will love.<br><b>complimentry:</b>Served with 2 Cold Drinks or 2 Butter Milk</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/fried rice.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Fried Rice</span>
                                                <span class="text-primary">₹220</span>
                                            </h5>
                                            <small class="fst-italic">This contain of chiness style making chiken fried rice.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/Tandoori Roti.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Butter Roti,Tandoori Roti,Naan Roti    </span>
                                                <span class="text-primary">₹35,45,50</span>
                                            </h5>
                                            <small class="fst-italic">Butter Roti,Tandoori Roti,Naan Roti.Rates are According Roti.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        

        <!-- Footer Start -->
        <?php 

            include("footer.php");

         ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php
     
        include 'footer_link.php';

     ?>
 </body>

</html>