<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bites Of Joy</title>
        <!-- Google Font -->
        <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
        rel="stylesheet"
        />

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
    </head>

    <body>
        <div id="preloder">
            <div class="loader"></div>
        </div>
        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6"></div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__right">
                                <div class="header__top__right__auth">
                                    <a class="d-inline" href="#"><i class="fa fa-user"></i> Login</a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="#"
                                        ><i class="fa fa-user"></i> Register</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="./index.html"
                                ><img src="img/logo.png" alt=""
                            /></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active">
                                    <a href="./index.html">Home</a>
                                </li>
                                <li><a href="./shop-grid.html">Shop</a></li>
                                <li>
                                    <a href="#">Categories</a>
                                    <ul class="header__menu__dropdown">
                                        <li>
                                            <a href="./shop-details.html"
                                                >Shop Details</a
                                            >
                                        </li>
                                        <li>
                                            <a href="./shoping-cart.html"
                                                >Shoping Cart</a
                                            >
                                        </li>
                                        <li>
                                            <a href="./checkout.html"
                                                >Check Out</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li>
                                    <a href="#"
                                        ><i class="fa fa-shopping-bag"></i>
                                        <span>3</span></a
                                    >
                                </li>
                            </ul>
                            <div class="header__cart__price">
                                item: <span>Rp 60000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section End -->
        
        @yield('content')

         <!-- Js Plugins -->
        <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>