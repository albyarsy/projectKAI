@extends('layouts.frontend')

@section('content')
        <!-- Breadcrumb Section Begin -->
        <section class="mb-5">
            <div class="container">
                <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/logo.jpg') }}">
                    <div class="hero__text">
                        <span>CINEMA</span>
                            <h2>ITT Flix <br /></h2>
                            <p>Mari menonton dengan nyaman di ITT Flix <br> Dari Kami untuk Anda</p>
                            <a href="#" class="primary-btn">BELANJA SEKARANG</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Categories Section Begin -->
        <section class="categories mt-5">
            <div class="container">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/airmata.jpg') }}"
                            >
                                <h5><a href="#">Drama</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/ashiapman.jpeg') }}"
                            >
                                <h5><a href="#">Action</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/bumimanusia.jpg') }}"
                            >
                                <h5><a href="#">Drama Romance</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/babyblues.jpeg') }}"
                            >
                                <h5><a href="#">Drama Comedy</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/justmom.jpg') }}"
                            >
                                <h5><a href="#">Comedy</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->

        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Featured Product</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/cuan.jpg') }}">
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Gampang Cuan</a></h6>
                                <h5>Rp 20.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/dearnathan.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Dear Nathan</a></h6>
                                <h5>Rp 20.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/helloghost.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Hello Ghost</a></h6>
                                <h5>Rp 20.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/june&kopi.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">June & Kopi</a></h6>
                                <h5>Rp 20.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/keluargacemara.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Keluarga Cemara</a></h6>
                                <h5>Rp 20.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/layanganputus.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Layangan Putus</a></h6>
                                <h5>Rp 25.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/mencuriradensaleh.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Mencuri Raden Saleh</a></h6>
                                <h5>Rp 20.000</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/susahsinyal.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Susah Sinyal</a></h6>
                                <h5>Rp 20.000</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Section End -->
@endsection
