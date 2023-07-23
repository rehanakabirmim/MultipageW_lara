@extends('frontend.master')

@section('main-content')

@include('frontend.layouts.hero')
    <section class="menu section-padding">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="text-center mb-lg-5 mb-4">Special Menus</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="menu-thumb">
                        <div class="menu-image-wrap">
                            <img src="{{asset('frontend')}}/images/breakfast/brett-jordan-8xt8-HIFqc8-unsplash.jpg"
                                class="img-fluid menu-image" alt="">

                            <span class="menu-tag bg-warning">Breakfast</span>
                        </div>

                        <div class="menu-info d-flex flex-wrap align-items-center">
                            <h4 class="mb-0">Morning Fresh</h4>

                            <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>12.50</span>

                            <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                <div class="reviews-stars">
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star reviews-icon"></i>
                                </div>

                                <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="menu-thumb">
                        <div class="menu-image-wrap">
                            <img src="{{asset('frontend')}}/images/lunch/farhad-ibrahimzade-MGKqxm6u2bc-unsplash.jpg"
                                class="img-fluid menu-image" alt="">

                            <span class="menu-tag bg-warning">Lunch</span>
                        </div>

                        <div class="menu-info d-flex flex-wrap align-items-center">
                            <h4 class="mb-0">Tooplate Soup</h4>

                            <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>24.50</span>

                            <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                <div class="reviews-stars">
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star reviews-icon"></i>
                                    <i class="bi-star reviews-icon"></i>
                                </div>

                                <p class="reviews-text mb-0 ms-4">50 Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="menu-thumb">
                        <div class="menu-image-wrap">
                            <img src="{{asset('frontend')}}/images/dinner/keriliwi-c3mFafsFz2w-unsplash.jpg" class="img-fluid menu-image"
                                alt="">

                            <span class="menu-tag bg-warning">Dinner</span>
                        </div>

                        <div class="menu-info d-flex flex-wrap align-items-center">
                            <h4 class="mb-0">Premium Steak</h4>

                            <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>45</span>

                            <del class="ms-4"><small>$</small>150</del>

                            <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                <div class="reviews-stars">
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star reviews-icon"></i>
                                    <i class="bi-star reviews-icon"></i>
                                </div>

                                <p class="reviews-text mb-0 ms-4">86 Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="menu-thumb">
                        <div class="menu-image-wrap">
                            <img src="{{asset('frontend')}}/images/dinner/farhad-ibrahimzade-ZipYER3NLhY-unsplash.jpg"
                                class="img-fluid menu-image" alt="">

                            <span class="menu-tag bg-warning">Dinner</span>
                        </div>

                        <div class="menu-info d-flex flex-wrap align-items-center">
                            <h4 class="mb-0">Seafood Set</h4>

                            <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>86</span>

                            <del class="ms-4"><small>$</small>124</del>

                            <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                <div class="reviews-stars">
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star reviews-icon"></i>
                                    <i class="bi-star reviews-icon"></i>
                                </div>

                                <p class="reviews-text mb-0 ms-4">44 Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="menu-thumb">
                        <div class="menu-image-wrap">
                            <img src="{{asset('frontend')}}/images/breakfast/louis-hansel-dphM2U1xq0U-unsplash.jpg"
                                class="img-fluid menu-image" alt="">

                            <span class="menu-tag bg-warning">Breakfast</span>
                        </div>

                        <div class="menu-info d-flex flex-wrap align-items-center">
                            <h4 class="mb-0">Burger Set</h4>

                            <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>20.50</span>

                            <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                <div class="reviews-stars">
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star reviews-icon"></i>
                                </div>

                                <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="menu-thumb">
                        <div class="menu-image-wrap">
                            <img src="{{asset('frontend')}}/images/lunch/farhad-ibrahimzade-D5c9ZciQy_I-unsplash.jpg"
                                class="img-fluid menu-image" alt="">

                            <span class="menu-tag bg-warning">Lunch</span>
                        </div>

                        <div class="menu-info d-flex flex-wrap align-items-center">
                            <h4 class="mb-0">Healthy Soup</h4>

                            <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>34.20</span>

                            <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                <div class="reviews-stars">
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star-fill reviews-icon"></i>
                                    <i class="bi-star reviews-icon"></i>
                                    <i class="bi-star reviews-icon"></i>
                                </div>

                                <p class="reviews-text mb-0 ms-4">64 Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="BgImage"></section>
    <section class="news section-padding">
        <div class="container">
            <div class="row">

                <h2 class="text-center mb-lg-5 mb-4">News &amp; Events</h2>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="news-thumb mb-4">
                        <a href="news-detail.html">
                            <img src="{{asset('frontend')}}/images/news/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg"
                                class="img-fluid news-image" alt="">
                        </a>

                        <div class="news-text-info news-text-info-large">
                            <span class="category-tag bg-danger">Featured</span>

                            <h5 class="news-title mt-2">
                                <a href="news-detail.html" class="news-title-link">Healthy Lifestyle and happy
                                    living tips</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="news-thumb mb-4">
                        <a href="news-detail.html">
                            <img src="{{asset('frontend')}}/images/news/stefan-johnson-xIFbDeGcy44-unsplash.jpg" class="img-fluid news-image"
                                alt="">
                        </a>

                        <div class="news-text-info news-text-info-large">
                            <span class="category-tag bg-danger">Featured</span>

                            <h5 class="news-title mt-2">
                                <a href="news-detail.html" class="news-title-link">How to make a healthy meal</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="news-thumb mb-lg-0 mb-lg-4 mb-0">
                        <a href="news-detail.html">
                            <img src="{{asset('frontend')}}/images/news/gilles-lambert-S_LhjpfIdm4-unsplash.jpg" class="img-fluid news-image"
                                alt="">
                        </a>

                        <div class="news-text-info">
                            <span class="category-tag me-3 bg-info">Promotions</span>

                            <strong>8 April 2022</strong>

                            <h5 class="news-title mt-2">
                                <a href="news-detail.html" class="news-title-link">Is Coconut good for you?</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="news-thumb mb-lg-0 mb-lg-4 mb-2">
                        <a href="news-detail.html">
                            <img src="{{asset('frontend')}}/images/news/caroline-attwood-bpPTlXWTOvg-unsplash.jpg"
                                class="img-fluid news-image" alt="">
                        </a>

                        <div class="news-text-info">
                            <span class="category-tag">News</span>

                            <h5 class="news-title mt-2">
                                <a href="news-detail.html" class="news-title-link">Salmon Steak Noodle</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="news-thumb mb-4">
                        <a href="news-detail.html">
                            <img src="{{asset('frontend')}}/images/news/louis-hansel-GiIiRV0FjwU-unsplash.jpg" class="img-fluid news-image"
                                alt="">
                        </a>

                        <div class="news-text-info">
                            <span class="category-tag me-3 bg-info">Meeting</span>

                            <strong>30 April 2022</strong>

                            <h5 class="news-title mt-2">
                                <a href="news-detail.html" class="news-title-link">Making a healthy salad</a>
                            </h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection



