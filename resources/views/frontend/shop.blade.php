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
      <!-- Page Preloder -->
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

      <!-- Breadcrumb Section Begin -->
      <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="breadcrumb__text">
                <h2></h2>
                <div class="breadcrumb__option">
                  <a href="./index.html">Home</a>
                  <span>Shop</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Breadcrumb Section End -->

      <!-- Product Section Begin -->
      <section class="product spad">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-5">
              <div class="sidebar">
                <div class="sidebar__item">
                  <h4>Categories</h4>
                  <ul>
                    <li><a href="#">Kue Kering</a></li>
                    <li><a href="#">Bolu</a></li>
                    <li><a href="#">Brownies</a></li>
                    <li><a href="#">Paketan</a></li>
                  </ul>
                </div>
                <div class="sidebar__item">
                  <h4>Tags</h4>
                  <div class="sidebar__item__size">
                    <label for="large">
                      <a href="">Mahal</a>
                    </label>
                  </div>
                  <div class="sidebar__item__size">
                    <label for="medium">
                      Murah
                      <input type="radio" id="medium" />
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-7">
              <div class="filter__item">
                <div class="row">
                  <div class="col-lg-4 col-md-5">
                    <div class="filter__sort">
                      <span>Sort By</span>
                      <select>
                        <option value="0">Default</option>
                        <option value="0">Default</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="filter__found">
                      <h6><span>15</span> Products found</h6>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-3">
                    <div class="filter__option">
                      <span class="icon_grid-2x2"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-1.jpg">
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-2.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-3.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-4.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-5.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-6.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-7.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-8.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-9.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-10.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-11.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-12.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-13.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-14.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="img/product/product-15.jpg"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Crab Pool Security</a></h6>
                      <h5>$30.00</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Product Section End -->

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
