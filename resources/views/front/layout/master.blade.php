<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | E-shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="/front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/front/css/style.css" type="text/css">
</head>

<body>
<!-- Start coding here -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!--Header-->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    abcccccc@gmail.com
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                    +84 666666666
                </div>
            </div>
            <div class="ht-right">
                <a href="login.html" class="login-panel"><i class="fa fa-user"></i>Login</a>
                <div class="lan-selector">
                    <select name="countries" id="countries" style="width: 300px" class="language_drop">
                        <option value="yt" data-image="/front/img/flag-1.jpg" data-imagecss="flag yt" data-title="English">English</option>
                        <option value="yu" data-image="/front/img/flag-2.jpg" data-imagecss="flag yu" data-title="German">German</option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="index.html">
                            <img src="/front/img/logo.png" height="25" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <div class="input-group">
                            <input type="text" placeholder="What do you need?">
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 text-right">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="si-pic"><img src="/front/img/select-product-1.jpg" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$68,88 x 1</p>
                                                    <h6>Kabino Beside Table</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="si-pic"><img src="/front/img/select-product-2.jpg" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$68,88 x 1</p>
                                                    <h6>Kabino Beside Table</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>$128.88</h5>
                                </div>
                                <div class="select-button">
                                    <a href="shopping-cart.html" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="check-out.html" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">$128.88</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>All departments</span>
                    <ul class="depart-hover">
                        <li class="active"><a href="#">Women's Clothing</a></li>
                        <li><a href="#">Men's Clothing</a></li>
                        <li><a href="#">Underware</a></li>
                        <li><a href="#">Kid's Clothing</a></li>
                        <li><a href="#">Brand codeleanon</a></li>
                        <li><a href="#">Accessories/Shoes</a></li>
                        <li><a href="#">Luxury Brands</a></li>
                        <li><a href="#">Brand Outdoor Apparel</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="#">Colection</a>
                        <ul class="dropdown">
                            <li><a href="">Men's</a></li>
                            <li><a href="">Women's</a></li>
                            <li><a href="">Kid's</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="check-out.html">Checkout</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="mobile-menu-wrap"></div>
        </div>
    </div>
</header>



@yield('body')



<!--Partner Logo Section-->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="/front/img/logo-carousel/logo-1.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="/front/img/logo-carousel/logo-2.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="/front/img/logo-carousel/logo-3.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="/front/img/logo-carousel/logo-4.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="/front/img/logo-carousel/logo-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer Section-->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="/front/img/footer-logo.png" height="25" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>1A Yet Kieu Ha Noi</li>
                        <li>Phone: +84 6666666666</li>
                        <li>Email: abccccccccc@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href=""></a>About Us</li>
                        <li><a href=""></a>Checkout</li>
                        <li><a href=""></a>Contact</li>
                        <li><a href=""></a>Serivius</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href=""></a>My Acount</li>
                        <li><a href=""></a>Contact</li>
                        <li><a href=""></a>Shopping Cart</li>
                        <li><a href=""></a>Shop</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Join Our Newsletter Now</h5>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        Copyright
                        <script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with
                        <i class="fa fa-heart-o"></i>
                        by
                        <a href="#" target="_blank">Codelearn</a>
                    </div>
                    <div class="payment-pic">
                        <img src="/front/img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Js Plugins -->
<script src="/front/js/jquery-3.3.1.min.js"></script>
<script src="/front/js/bootstrap.min.js"></script>
<script src="/front/js/jquery-ui.min.js"></script>
<script src="/front/js/jquery.countdown.min.js"></script>
<script src="/front/js/jquery.nice-select.min.js"></script>
<script src="/front/js/jquery.zoom.min.js"></script>
<script src="/front/js/jquery.dd.min.js"></script>
<script src="/front/js/jquery.slicknav.js"></script>
<script src="/front/js/owl.carousel.min.js"></script>
<script src="/front/js/owlcarousel2-filter.min.js"></script>
<script src="/front/js/main.js"></script>
</body>

</html>
