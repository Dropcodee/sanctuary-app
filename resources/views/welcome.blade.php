@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <!-- start slider section -->
    <section class="p-0 main-slider h-100 position-relative overflow-visible mobile-height wow fadeIn">
        <div class="swiper-full-screen swiper-container h-100 w-100 white-move">
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('images/sanctuary/img-2.jpg') }}');">
                    <div class="container position-relative full-screen">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle">
                                    <div
                                        class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom width-60 mx-auto lg-width-80 md-margin-four-bottom sm-width-90 sm-margin-15px-bottom sm-letter-spacing-0">
                                        Sanctuary Unit</div>
                                    <h6
                                        class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">
                                        DOING THE WILL OF GOD FROM THE HEART.</h6>
                                    <div><a href="https://1.envato.market/g7jrr" target="_blank"
                                            class="btn btn-deep-pink btn-rounded btn-medium no-margin-lr">Join Sanctuary
                                            Unit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('images/sanctuary/DSC_0854.JPG') }}');">
                    <div class="container position-relative full-screen">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle">
                                    <div
                                        class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom width-60 mx-auto lg-width-80 md-margin-four-bottom sm-width-90 sm-margin-15px-bottom sm-letter-spacing-0">
                                        Our Service Days</div>
                                    <h6
                                        class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">
                                        Doing Gods Will With Love</h6>
                                    <div><a href="#service-days"
                                            class=" inner-link btn btn-deep-pink btn-rounded btn-medium no-margin-lr">Our
                                            Service
                                            Days</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('images/sanctuary/DSC_0810.JPG') }}');">
                    <div class="container position-relative full-screen">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                 <!-- start slider item -->
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('images/sanctuary/DSC_0895.JPG') }}');">
                    <div class="container position-relative full-screen">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <div
                class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination d-none">
            </div>
            <div class="swiper-button-next slider-small-arrow-white"><i class="fas fa-angle-right pull-right"></i></div>
            <div class="swiper-button-prev slider-small-arrow-white"><i class="fas fa-angle-left pull-right"></i></div>
            <!-- end slider pagination -->
        </div>
        <!-- scroll down arrow -->
        <div class="scroll-down-section text-center"><a href="#about"
                class="inner-link text-uppercase text-small text-white-2 text-white-2-hover opacity5 margin-10px-bottom display-inline-block">scroll
                down</a>
            <div class="separator-line-verticle-large bg-deep-pink m-auto"></div>
        </div>
        <!-- start slider pagination -->
    </section>
    <!-- end slider section -->

    <!-- start about section -->
    <section id="about" class="wow fadeIn cover-background" style="background-image:url('images/business-about-bg.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 col-md-6 text-center sm-margin-35px-bottom wow fadeIn">
                    <img src="{{ asset('images/sanctuary/excos/Chinonso.jpeg') }}" alt="" class="w-100">
                </div>
                <div class="col-12 col-lg-6 col-md-6 padding-six-lr lg-padding-15px-lr text-center text-md-left wow fadeIn"
                    data-wow-delay="0.2s">
                    <h3 class="font-weight-600 alt-font text-extra-dark-gray">What We Do.</h3>
                    <p>Have you ever wondered how the church auditorium is kept generally so bright and clean? The Sanctuary
                        Keepers - a team of dedicated men and women, devoted to making sure that the house of God is clean,
                        tidy and well decorated. They know that cleanliness is next to Godliness so members of this Service
                        Unit work together to add beauty and decorative style to the Church, including but not limited to
                        the Church altar, Church Sanctuary and other areas of the Church.</p>
                    <a href="about-us-modern.html"
                        class="btn btn-small btn-rounded btn-dark-gray margin-20px-top sm-margin-5px-top">Join Sanctuary</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- start meeting hours section -->
    <section class="wow fadeIn cover-background" id="service-days"
        style="background-image:url('images/business-digital-bg.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small">Sanctuary Unit</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Our Service Days.</h5>
                </div>
            </div>
            <div class="row">
                <!-- start meeting day box item -->
                <div class="col-12 col-lg-4 col-md-4 sm-margin-30px-bottom wow fadeIn">
                    <div
                        class="bg-white text-center border-radius-10 padding-eighteen-all position-relative lg-padding-twelve-all">
                        <h4 class="text-light-gray text-deep-pink alt-font font-weight-300 margin-20px-bottom">01</h4>
                        <div
                            class="alt-font text-large text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600">
                            Mondays</div>
                        <p>All sanctuary unit members meet immediately after monday prayer meetings at the sacrifice
                            entrance at the university chapel.</p>
                    </div>
                </div>
                <!-- end meeting day box item -->
                <!-- start meeting day box item -->
                <div class="col-12 col-lg-4 col-md-4 sm-margin-30px-bottom wow fadeIn" data-wow-delay="0.2s">
                    <div
                        class="bg-white text-center border-radius-10 padding-eighteen-all position-relative lg-padding-twelve-all">
                        <h4 class="text-light-gray text-deep-pink alt-font font-weight-300 margin-20px-bottom">02</h4>
                        <div
                            class="alt-font text-large text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600">
                            Wednesdays</div>
                        <p>All members meet at the sacrifice entrance immediately after communion service.</p>
                    </div>
                </div>
                <!-- end meeting day box item -->
                <!-- start meeting day box item -->
                <div class="col-12 col-lg-4 col-md-4 wow fadeIn" data-wow-delay="0.4s">
                    <div
                        class="bg-white text-center border-radius-10 padding-eighteen-all position-relative lg-padding-twelve-all">
                        <h4 class="text-light-gray text-deep-pink alt-font font-weight-300 margin-20px-bottom">03</h4>
                        <div
                            class="alt-font text-large text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600">
                            Saturdays</div>
                        <p>All Sanctuary members meet at the praying ground outside the university chapel exactly
                            <strong>7:00pm</strong>
                        </p>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>
    <!-- end feature section -->

    <!-- start portfolio section -->
    <section class="wow fadeIn no-padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small">Service Days
                    </div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Our Precious Members Having Fun Doing God's Work.</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="filter-content overflow-hidden w-100 sm-padding-15px-lr">
                    <ul class="portfolio-grid work-4col gutter-medium hover-option7">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        <li class="grid-item wow fadeInUp">
                            <a href="javascript:void">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('images/sanctuary/img-7.jpeg') }}" alt="" /></div>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow fadeInUp" data-wow-delay="0.2s">
                            <a href="javascript:void">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('images/sanctuary/img-6.jpeg') }}" alt="" /></div>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow fadeInUp" data-wow-delay="0.4s">
                            <a href="javascript:void">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('images/sanctuary/img-9.jpeg') }}" alt="" /></div>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow fadeInUp" data-wow-delay="0.6s">
                            <a href="javascript:void">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('images/sanctuary/img-10.jpeg') }}" alt="" /></div>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio-item item -->
                        <li class="grid-item wow fadeInUp">
                            <a href="javascript:void">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('images/sanctuary/img-4.jpeg') }}" alt="" /></div>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow fadeInUp" data-wow-delay="0.2s">
                            <a href="javascript:void">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('images/sanctuary/DSC_0722.JPG') }}" alt="" /></div>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow fadeInUp" data-wow-delay="0.4s">
                            <a href="single-project-page-07.html">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('images/sanctuary/DSC_0709.JPG') }}" alt="" /></div>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow fadeInUp" data-wow-delay="0.6s">
                            <a href="single-project-page-08.html">
                                <figure>
                                    <div class="portfolio-img"><img src="{{ asset('images/sanctuary/DSC_0684.JPG') }}" alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <span
                                                        class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Designblast
                                                        Inc</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small">Web and
                                                        Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio section -->
@endsection
