<!DOCTYPE html>
<html lang="en">
<head>
    <title>Single Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles/single_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
</head>

<body>
    <div class="super_container">

        <!-- Navbar -->
        <?php include 'include/navbar.php'; ?>

        <!-- Single Product Container -->
        <div class="container single_product_container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs d-flex flex-row align-items-center">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="categories.php"><i class="fa fa-angle-right"></i> Men's</a></li>
                            <li class="active"><a href="#"><i class="fa fa-angle-right"></i> Single Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Image Thumbnails -->
                <div class="col-lg-7">
                    <div class="single_product_pics">
                        <div class="row">
                            <div class="col-lg-3 thumbnails_col">
                                <div class="single_product_thumbnails">
                                    <ul>
                                        <li><img src="images/single_1_thumb.jpg" alt="" data-image="images/single_1.jpg"></li>
                                        <li class="active"><img src="images/single_2_thumb.jpg" alt="" data-image="images/single_2.jpg"></li>
                                        <li><img src="images/single_3_thumb.jpg" alt="" data-image="images/single_3.jpg"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 image_col">
                                <div class="single_product_image">
                                    <div class="single_product_image_background" style="background-image:url(images/single_2.jpg)"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="col-lg-5">
                    <div class="product_details">
                        <div class="product_details_title">
                            <h2>Pocket Cotton Sweatshirt</h2>
                            <p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis...</p>
                        </div>
                        <div class="free_delivery d-flex flex-row align-items-center">
                            <span class="ti-truck"></span><span>free delivery</span>
                        </div>
                        <div class="original_price">$629.99</div>
                        <div class="product_price">$495.00</div>
                        <ul class="star_rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <div class="product_color">
                            <span>Select Color:</span>
                            <ul>
                                <li style="background: #e54e5d"></li>
                                <li style="background: #252525"></li>
                                <li style="background: #60b3f3"></li>
                            </ul>
                        </div>
                        <div class="quantity d-flex flex-row align-items-center">
                            <span>Quantity:</span>
                            <div class="quantity_selector">
                                <span class="minus"><i class="fa fa-minus"></i></span>
                                <span id="quantity_value">1</span>
                                <span class="plus"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recently Viewed -->
        <div class="viewed">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="viewed_title_container">
                            <h3 class="viewed_title">Recently Viewed</h3>
                            <div class="viewed_nav_container">
                                <div class="viewed_nav viewed_prev"><i class="fa fa-chevron-left"></i></div>
                                <div class="viewed_nav viewed_next"><i class="fa fa-chevron-right"></i></div>
                            </div>
                        </div>

                        <div class="viewed_slider_container">
                            <div class="owl-carousel owl-theme viewed_slider">
                                <!-- Slide 1 -->
                                <div class="owl-item">
                                    <div class="viewed_item">
                                        <div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">$300</div>
                                            <div class="viewed_name"><a href="#">Product Name</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="owl-item">
                                    <div class="viewed_item">
                                        <div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
                                        <div class="viewed_content text-center">
                                            <div class="viewed_price">$300</div>
                                            <div class="viewed_name"><a href="#">Product Name</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more slides as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'include/footer.php'; ?>
    </div>

    <!-- Scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="js/single_custom.js"></script>
</body>
</html>
