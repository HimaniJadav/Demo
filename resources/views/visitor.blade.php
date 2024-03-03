<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('new_user/images/icons/favicon.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/vendor/MagnificPopup/magnific-popup.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('new_user/css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <header class="header-v3">
        <!-- Header desktop -->
        <div class="container-menu-desktop trans-03">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop p-l-45">

                    <!-- Logo desktop -->
                    <a href="#" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color:white; text-decoration: none;" class="logo">
                        <!-- <img src="{{asset('new_user/images/icons/logo-02.png')}}" alt="IMG-LOGO"> -->
                        <h1>
                            कला-Sparsh
                        </h1>


                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        <ul class="main-menu">
                            <li>
                                <a href="{{route('user.home')}}">Home</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="index.html">Homepage 1</a></li>
                                    <li><a href="home-02.html">Homepage 2</a></li>
                                    <li><a href="home-03.html">Homepage 3</a></li>
                                </ul> -->
                            </li>

                            <li>
                                <a href="#">GALLERY</a>
                            </li>
                            <li>
                                <button class="btn btn-light" style="border-radius: 15px; "><a style="color: black;" href="{{route('user.user_login')}}">LOGIN</a> </button>
                            </li>
                            <li>
                                <button class="btn btn-light" style="border-radius: 15px; "><a style="color: black;" href="{{route('user.register')}}">REGISTER</a></button>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->

                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="{{asset('new_user/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
                <div class="flex-c-m h-full p-r-5">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="main-menu-m">
                <li>
                    <a href="{{route('user.home')}}">Home</a>
                    <!-- <ul class="sub-menu-m">
                        <li><a href="index.html">Homepage 1</a></li>
                        <li><a href="home-02.html">Homepage 2</a></li>
                        <li><a href="home-03.html">Homepage 3</a></li>
                    </ul> -->
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="#">VIEW GALLERY</a>
                </li>



                <li>
                    <a href="about.html">About</a>
                </li>

                <li>
                    <a href="contact.html">Contact</a>
                </li>

            </ul>
        </div>

        <!-- Modal Search -->

    </header>






    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1 rs2-slick1">
            <div class="slick1">
                <!-- <div class="item-slick1 bg-overlay1 homeback" style="background-image: url(images/slide-05.jpg);" data-thumb="images/thumb-01.jpg" data-caption="Women’s Wear"> -->
                <div class="item-slick1 bg-overlay1 homeback" style="background-image: url({{ asset('new_user/images/slide-02.jpg') }});" data-thumb="{{asset('new_user/images/thumb-01.jpg')}}" data-caption="Women’s Wear">
                    <div class="container h-full">
                        <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                <span class="ltext-202 txt-center cl0 respon2">
                                    Men's Collection
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                    New arrivals
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 bg-overlay1" style="background-image: url({{ asset('new_user/images/slide-07.jpg') }});" data-thumb="{{asset('new_user/images/thumb-02.jpg')}}" data-caption="Men’s Wear">
                    <div class="container h-full">
                        <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                <span class="ltext-202 txt-center cl0 respon2">
                                    Men New-Season
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                    Jackets & Coats
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 bg-overlay1" style="background-image: url({{ asset('new_user/images/slide-06.jpg') }});" data-thumb="{{asset('new_user/images/thumb-03.jpg')}}" data-caption="Men’s Wear">
                    <div class="container h-full">
                        <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                                <span class="ltext-202 txt-center cl0 respon2">
                                    Men Collection
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                                <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                    NEW SEASON
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                                <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-slick1-dots p-lr-10"></div>
        </div>
    </section>


    <!-- Banner -->
    <div class="container mt-5 mb-5">
        <div class="row"></div>
    </div>

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            About
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Our Story
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                        </p>
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="{{asset('new_user/images/about-01.jpg')}}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Our Mission
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Mauris non lacinia magna. Sed nec lobortis dolor. Vestibulum rhoncus dignissim risus, sed consectetur erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam maximus mauris sit amet odio convallis, in pharetra magna gravida. Praesent sed nunc fermentum mi molestie tempor. Morbi vitae viverra odio. Pellentesque ac velit egestas, luctus arcu non, laoreet mauris. Sed in ipsum tempor, consequat odio in, porttitor ante. Ut mauris ligula, volutpat in sodales in, porta non odio. Pellentesque tempor urna vitae mi vestibulum, nec venenatis nulla lobortis. Proin at gravida ante. Mauris auctor purus at lacus maximus euismod. Pellentesque vulputate massa ut nisl hendrerit, eget elementum libero iaculis.
                        </p>

                        <div class="bor16 p-l-29 p-b-9 m-t-22">
                            <p class="stext-114 cl6 p-r-40 p-b-11">
                                Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
                            </p>

                            <span class="stext-111 cl8">
                                - Steve Job’s
                            </span>
                        </div>
                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{asset('new_user/images/about-02.jpg')}}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                pant
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                shirt
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                tshirt
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Watches
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Track Order
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Returns
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shipping
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        <!-- Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879 -->
                        Sardar Vallabhbhai Global University,
                        Chimanbhai Patel Institute Campus,
                        Opp. Karnavati Club,
                        Next to Shapath IV, S.G. Raod, Sarkhej - Gandhinagar Hwy,
                        Prahlad Nagar,
                        Ahmedabad, Gujarat 380015
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Newsletter
                    </h4>

                    <form>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="exaple@gmail.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-t-40">
                <!-- <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="{{asset('new_user/images/icons/icon-pay-01.png')}}" alt="ICON-PAY">
                            </a>

                            <a href="#" class="m-all-1">
                                <img src="{{asset('new_user/images/icons/icon-pay-02.png')}}" alt="ICON-PAY">
                            </a>

                            <a href="#" class="m-all-1">
                                <img src="{{asset('new_user/images/icons/icon-pay-03.png')}}" alt="ICON-PAY">
                            </a>

                            <a href="#" class="m-all-1">
                                <img src="{{asset('new_user/images/icons/icon-pay-04.png')}}" alt="ICON-PAY">
                            </a>

                            <a href="#" class="m-all-1">
                                <img src="{{asset('new_user/images/icons/icon-pay-05.png')}}" alt="ICON-PAY">
                            </a>
                        </div> -->

                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; <script>
                        document.write(new Date().getFullYear());
                    </script> कला-Sparsh :- All rights reserved | DEVELOPED BY :- DEV SHAH <i class="fa fa-heart-o" aria-hidden="true"></i> &amp; Desgined by:- JEEL PATEL , KEYUR PARMAR <a href="https://themewagon.com" target="_blank"></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>



    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/jquery/jquery-3.2.1.min.js')}}">
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('new_user/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/select2/select2.min.js')}}"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('new_user/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('new_user/js/slick-custom.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/parallax100/parallax100.js')}}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/sweetalert/sweetalert.min.js')}}"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('new_user/js/main.js')}}"></script>


</body>

</html>