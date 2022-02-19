<!--

=========================================================
* Swipe - Mobile App One Page Bootstrap 5 Template
=========================================================

* Product Page: https://themesberg.com/product/bootstrap/swipe-free-mobile-app-one-page-bootstrap-5-template
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Contact us if you want to remove it.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>{{Fungsi::app_nama()}}</title>


@stack('before-style')
@include('includes.landingstyle')
@stack('after-style')
<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <header class="header-global" id="home">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-theme-secondary">
        <div class="container position-relative">
            <a class="navbar-brand mr-lg-4" href="{{ url('/') }}">
                <img class="navbar-brand-dark" src="{{ asset('/') }}assets/template/swipe/assets/img/light.svg" alt="Logo light">
                <img class="navbar-brand-light" src="{{ asset('/') }}assets/template/swipe/assets/img/dark.svg" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse mr-auto" id="navbar_global">

            {{-- sidebar --}}
            @include('includes.landingtopbar')

            </div>
            <div class="d-flex align-items-center">
                <a href="{{route('login')}}" class="btn btn-outline-soft d-none d-md-inline mr-md-3 animate-up-2">Login</a>
                <a href="{{route('register')}}"  class="btn btn-md btn-tertiary text-white d-none d-md-inline animate-up-2">Register<i class="fas fa-rocket ml-2"></i></a>
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</header>
    <main>
        <!-- Hero -->
        <section class="section section-header text-dark pb-md-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center mb-5 mb-md-7">
                        <h1 class="display-2 font-weight-bolder mb-4">
                           {{Fungsi::app_nama()}}
                        </h1>
                        <p class="lead mb-4 mb-lg-5">Made with Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}).</p>
                        <div>
                            <a href="#" class="btn btn-dark btn-download-app mb-xl-0 mr-2 mr-md-3">
                                <span class="d-flex align-items-center">
                                    <span class="icon icon-brand mr-2 mr-md-3"><span class="fab fa-apple"></span></span>
                                    <span class="d-inline-block text-left">
                                        <small class="font-weight-normal d-none d-md-block">Available on</small> App Store
                                    </span>
                                </span>
                            </a>
                            <a href="#" class="btn btn-dark btn-download-app">
                                <span class="d-flex align-items-center">
                                    <span class="icon icon-brand mr-2 mr-md-3"><span class="fab fa-google-play"></span></span>
                                    <span class="d-inline-block text-left">
                                        <small class="font-weight-normal d-none d-md-block">Available on</small> Google Play
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-10 justify-content-center">
                        <img class="d-none d-md-inline-block" src="{{ asset('/') }}assets/template/swipe/assets/img/illustrations/scene.svg" alt="Mobile App Mockup">
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg py-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card border-0 bg-white text-center p-1">
                            <div class="card-header bg-white border-0 pb-0">
                                <div class="icon icon-lg icon-primary mb-4">
                                    <span class="fas fa-money-bill-wave"></span>
                                </div>
                                <h2 class="h3 text-dark m-0">Pay better</h2>
                            </div>
                            <div class="card-body">
                                <p>
                                    Speed through checkout and offset delivery at the same time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card border-0 bg-white text-center p-1">
                            <div class="card-header bg-white border-0 pb-0">
                                <div class="icon icon-lg icon-primary mb-4">
                                    <span class="fas fa-map-marked-alt"></span>
                                </div>
                                <h2 class="h3 text-dark m-0">Track better</h2>
                            </div>
                            <div class="card-body">
                                <p>
                                    Get real-time delivery updates from cart to home in one place.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 bg-white text-center p-1">
                            <div class="card-header bg-white border-0 pb-0">
                                <div class="icon icon-lg icon-primary mb-4">
                                    <span class="fas fa-shopping-basket"></span>
                                </div>
                                <h2 class="h3 text-dark m-0">Shop better</h2>
                            </div>
                            <div class="card-body">
                                <p>
                                    Upgrade with personal settings from your favorite stores.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg" id="about">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-7">
                    <div class="col-12 col-lg-8 text-center">
                        <h2 class="h1 mb-4">Better in every way</h2>
                        <p class="lead">Self-Service Analytics or ad hoc reporting gives users the ability to develop rapid reports, empowering users to analyze their data.</p>
                    </div>
                </div>
                <div class="row row-grid align-items-center mb-5 mb-lg-7">
                    <div class="col-12 col-lg-5">
                        <h2 class="mb-4">A thoughtful way to pay</h2>
                        <p>Simpler App remembers your important details, so you can fill carts, not forms. And everything is encrypted so you can speed safely through checkout.</p>
                        <p>Now, you can offset the carbon emissions produced by your deliveries—for free. All you have to do is check out with Shop Pay, one of the first carbon-neutral way to pay.</p>
                        <a href="#" class="btn btn-dark mt-3 animate-up-2">
                            Learn More
                            <span class="icon icon-xs ml-2">
                                <i class="fas fa-external-link-alt"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 ml-lg-auto">
                        <img src="{{ asset('/') }}assets/template/swipe/assets/img/illustrations/scene-3.svg" class="w-100" alt="">
                    </div>
                </div>
                <div class="row row-grid align-items-center mb-5 mb-lg-7">
                    <div class="col-12 col-lg-5 order-lg-2">
                        <h2 class="mb-4">Get it. Don't sweat it.</h2>
                        <p>We track your desktop and mobile keyword rankings from any location and plot your full ranking history on a handy graph.</p>
                        <p>You can set up automated ranking reports to be sent to your email address, so you’ll never forget to check your ranking progress.</p>
                        <a href="#" class="btn btn-dark mt-3 animate-up-2">
                            Learn More
                            <span class="icon icon-xs ml-2">
                                <i class="fas fa-external-link-alt"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 mr-lg-auto">
                        <img src="{{ asset('/') }}assets/template/swipe/assets/img/illustrations/scene-2.svg" class="w-100" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card border-light p-4">
                            <div class="card-body">
                                <h2 class="display-2 mb-2">98%</h2>
                                <span>Average satisfaction rating received in the past year.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card border-light p-4">
                            <div class="card-body">
                                <h2 class="display-2 mb-2">24/7</h2>
                                <span> Our support team is a quick chat or email away.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card border-light p-4">
                            <div class="card-body">
                                <h2 class="display-2 mb-2">220k+</h2>
                                <span>Extension installs from the two major mobile app stores.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section section-sm py-0">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col">
                        <h2 class="h6 font-weight-bold text-brown">We're proudly featured by</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col d-flex justify-content-center flex-wrap">
                        <a href="#" aria-label="Stripe brand logo" class="icon icon-xl icon-dark mr-4 mr-sm-5"
                        data-toggle="tooltip" data-placement="top" title="Stripe">
                            <span class="fab fa-stripe"></span>
                        </a>
                        <a href="#" aria-label="Digg brand logo" class="icon icon-xl icon-dark mr-4 mr-sm-5"
                        data-toggle="tooltip" data-placement="top" title="Digg">
                            <span class="fab fa-digg"></span>
                        </a>
                        <a href="#" aria-label="FedEx brand logo" class="icon icon-xl icon-dark mr-4 mr-sm-5"
                        data-toggle="tooltip" data-placement="top" title="FedEx">
                            <span class="fab fa-fedex"></span>
                        </a>
                        <a href="#" aria-label="Ember brand logo" class="icon icon-xl icon-dark mr-4 mr-sm-5"
                        data-toggle="tooltip" data-placement="top" title="Ember">
                            <span class="fab fa-ember"></span>
                        </a>
                        <a href="#" aria-label="Beyond brand logo" class="icon icon-xl icon-dark mr-4 mr-sm-5"
                        data-toggle="tooltip" data-placement="top" title="Beyond">
                            <span class="fab fa-d-and-d-beyond"></span>
                        </a>
                        <a href="#" aria-label="AngryCreative brand logo" class="icon icon-xl icon-dark"
                        data-toggle="tooltip" data-placement="top" title="AngryCreative">
                            <span class="fab fa-angrycreative"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="section section-lg pb-0" id="testimonials">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center mb-5 mb-lg-6">
                        <h2 class="display-3 mb-4">Customers love it</h2>
                        <p class="lead">The final result of our formula at work. Check out what our clients <br class="d-none d-lg-inline-block"> have to say about our mobile app and our support team.</p>
                    </div>
                </div>
                <div class="row mt-lg-6">
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card border-light">
                            <div class="card-body text-center py-5">
                                <img class="image-sm img-fluid mx-auto mb-3" src="{{ asset('/') }}assets/template/swipe/assets/img/clients/airbnb.svg" alt="Airbnb brand">
                                <span class="d-block">
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star far fa-star text-warning"></span>
                                </span>
                                <p class="px-2 my-4">Swipe has replaced the whiteboard for us! Being able to jump in the same file with someone fills the gap of not being able to gather in person.</p>
                                <a href="#" class="btn btn-link text-black">
                                    <span class="mr-2"><span class="fas fa-book-open"></span></span>
                                    <span class="font-weight-bold">Read story</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card border-light mt-lg-n6">
                            <div class="card-body text-center py-5">
                                <img class="image-sm img-fluid mx-auto mb-3" src="{{ asset('/') }}assets/template/swipe/assets/img/clients/corsair.svg" alt="Corsair brand">
                                <span class="d-block">
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star far fa-star text-warning"></span>
                                </span>
                                <p class="px-2 my-4">Swipe has replaced the whiteboard for us! Being able to jump in the same file with someone fills the gap of not being able to gather in person.</p>
                                <a href="#" class="btn btn-link text-black">
                                    <span class="mr-2"><span class="fas fa-book-open"></span></span>
                                    <span class="font-weight-bold">Read story</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card border-light">
                            <div class="card-body text-center py-5">
                                <img class="image-sm img-fluid mx-auto mb-3" src="{{ asset('/') }}assets/template/swipe/assets/img/clients/paypal.svg" alt="Paypal brand">
                                <span class="d-block">
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star far fa-star text-warning"></span>
                                </span>
                                <p class="px-2 my-4">Swipe has replaced the whiteboard for us! Being able to jump in the same file with someone fills the gap of not being able to gather in person.</p>
                                <a href="#" class="btn btn-link text-black">
                                    <span class="mr-2"><span class="fas fa-book-open"></span></span>
                                    <span class="font-weight-bold">Read story</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0 mt-lg-4">
                        <div class="card border-light">
                            <div class="card-body text-center py-5">
                                <img class="image-sm img-fluid mx-auto mb-3" src="{{ asset('/') }}assets/template/swipe/assets/img/clients/ebay.svg" alt="Google brand">
                                <span class="d-block">
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star far fa-star text-warning"></span>
                                </span>
                                <p class="px-2 my-4">Swipe has replaced the whiteboard for us! Being able to jump in the same file with someone fills the gap of not being able to gather in person.</p>
                                <a href="#" class="btn btn-link text-black">
                                    <span class="mr-2"><span class="fas fa-book-open"></span></span>
                                    <span class="font-weight-bold">Read story</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0 mt-lg-n5">
                        <div class="card border-light">
                            <div class="card-body text-center py-5">
                                <img class="image-sm img-fluid mx-auto mb-3" src="{{ asset('/') }}assets/template/swipe/assets/img/clients/northwestern.svg" alt="northwestern brand">
                                <span class="d-block">
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star far fa-star text-warning"></span>
                                </span>
                                <p class="px-2 my-4">Swipe has replaced the whiteboard for us! Being able to jump in the same file with someone fills the gap of not being able to gather in person.</p>
                                <a href="#" class="btn btn-link text-black">
                                    <span class="mr-2"><span class="fas fa-book-open"></span></span>
                                    <span class="font-weight-bold">Read story</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-lg-4">
                        <div class="card border-light">
                            <div class="card-body text-center py-5">
                                <img class="image-sm img-fluid mx-auto mb-3" src="{{ asset('/') }}assets/template/swipe/assets/img/clients/elastic.svg" alt="Elastic brand">
                                <span class="d-block">
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star fas fa-star text-warning"></span>
                                    <span class="star far fa-star text-warning"></span>
                                </span>
                                <p class="px-2 my-4">Swipe has replaced the whiteboard for us! Being able to jump in the same file with someone fills the gap of not being able to gather in person.</p>
                                <a href="#" class="btn btn-link text-black">
                                    <span class="mr-2"><span class="fas fa-book-open"></span></span>
                                    <span class="font-weight-bold">Read story</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg" id="faq">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center mb-4 mb-lg-5">
                        <h2 class="display-3 mb-4">Facts & Questions</h2>
                        <p class="lead">Have a question? Read through our FAQ below. If you can't find an answer, <br class="d-none d-lg-inline-block"> please email our support team. We're here to help.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <!--Accordion-->
                        <div class="accordion" id="accordionExample">
                            <div class="card border-light mb-0">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="h6 mb-0 font-weight-bold">What is the purpose of a FAQ?</span>
                                            <span class="icon"><span class="fas fa-plus"></span></span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                                            helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-light mb-0">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="h6 mb-0 font-weight-bold">What is a FAQ document?</span>
                                            <span class="icon"><span class="fas fa-plus"></span></span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                                            helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-light mb-0">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="h6 mb-0 font-weight-bold">What are the top 10 interview questions?</span>
                                            <span class="icon"><span class="fas fa-plus"></span></span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                                            helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-light mb-0">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span class="h6 mb-0 font-weight-bold">Cookies?</span>
                                            <span class="icon"><span class="fas fa-plus"></span></span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                                            helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-light mb-0">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <span class="h6 mb-0 font-weight-bold">Copyright Notice</span>
                                            <span class="icon"><span class="fas fa-plus"></span></span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                                            helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of Accordion-->
                    </div>
                </div>
            </div>
        </section>
        <div class="section bg-soft" id="download">
            <figure class="position-absolute top-0 left-0 w-100 d-none d-md-block mt-n3">
                <svg class="fill-soft" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 43.4" style="enable-background:new 0 0 1920 43.4;" xml:space="preserve">
                   <path d="M0,23.3c0,0,405.1-43.5,697.6,0c316.5,1.5,108.9-2.6,480.4-14.1c0,0,139-12.2,458.7,14.3 c0,0,67.8,19.2,283.3-22.7v35.1H0V23.3z"></path>
                </svg>
            </figure>
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-12 col-lg-6">
                        <span class="h5 text-muted mb-2 d-block">Download App</span>
                        <h2 class="display-3 mb-4">Get started in seconds</h2>
                        <p class="lead text-muted">Quickly connect to tools and services such as Google Analytics, Intercom or Github to track, measure and optimize performance. </p>
                        <div class="mt-4 mt-lg-5">
                            <a href="#" class="btn btn-dark btn-download-app mb-xl-0 mr-2 mr-md-3">
                                <span class="d-flex align-items-center">
                                    <span class="icon icon-brand mr-2 mr-md-3"><span class="fab fa-apple"></span></span>
                                    <span class="d-inline-block text-left">
                                        <small class="font-weight-normal d-none d-md-block">Available on</small> App Store
                                    </span>
                                </span>
                            </a>
                            <a href="#" class="btn btn-dark btn-download-app">
                                <span class="d-flex align-items-center">
                                    <span class="icon icon-brand mr-2 mr-md-3"><span class="fab fa-google-play"></span></span>
                                    <span class="d-inline-block text-left">
                                        <small class="font-weight-normal d-none d-md-block">Available on</small> Google Play
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 ml-lg-auto">
                        <img class="d-none d-lg-inline-block" src="{{ asset('/') }}assets/template/swipe/assets/img/illustrations/scene-3.svg" alt="Mobile App Illustration">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer py-5 pt-lg-6">
    <div class="sticky-left d-flex align-items-center bg-white p-3 pt-4 px-4 border border-soft shadow-sm rounded">
        <span class="mr-3 d-block font-small mb-1">Open source ❤️</span>
        <!-- Place this tag where you want the button to render. -->
        <a class="github-button" href="https://github.com/themesberg/swipe-one-page-bootstrap-5-template" data-color-scheme="no-preference: light; light: light; dark: dark;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/swipe-one-page-bootstrap-5-template on GitHub">Star</a>
    </div>
    <div class="sticky-right">
        <a href="#home" class="icon icon-primary icon-md btn btn-icon-only btn-white border border-soft shadow-soft animate-up-3">
            <span class="fas fa-chevron-up"></span>
        </a>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4">
                <p>Swipe is a beautiful and free one page Bootstrap 5 Template created to showcase your awesome mobile app.</p>
                <ul class="social-buttons mb-5 mb-lg-0">
                    <li>
                        <a href="https://twitter.com/themesberg" aria-label="twitter social link" class="icon icon-md icon-twitter mr-3">
                            <span class="fab fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/themesberg/" class="icon icon-md icon-facebook mr-3" aria-label="facebook social link">
                            <span class="fab fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/themesberg" aria-label="github social link" class="icon icon-md icon-github mr-3">
                            <span class="fab fa-github"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://dribbble.com/themesberg" class="icon icon-md icon-dribbble" aria-label="dribbble social link" >
                            <span class="fab fa-dribbble"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-5 mb-lg-0">
                <span class="h5">Themesberg</span>
                <ul class="footer-links mt-2">
                    <li><a target="_blank" href="https://themesberg.com/blog">Blog</a></li>
                    <li><a target="_blank" href="https://themesberg.com/products">Products</a></li>
                    <li><a target="_blank" href="https://themesberg.com/about">About Us</a></li>
                    <li><a target="_blank" href="https://themesberg.com/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mb-5 mb-lg-0">
                {{-- <span class="h5 mb-3 d-block">Subscribe</span>
                <form action="#">
                    <div class="form-row mb-2">
                        <div class="col-12">
                            <input type="email" class="form-control mb-2" placeholder="example@company.com" name="email" aria-label="Subscribe form" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark shadow-soft btn-block" data-loading-text="Sending">
                                <span>Subscribe</span>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="text-muted font-small m-0">No spam. Pinky swear.</p> --}}
            </div>
        </div>
        <hr class="bg-light my-2">
        <div class="row pt-2 pt-lg-5">
            <div class="col mb-md-0">
                <a href="#" target="_blank" class="d-flex justify-content-center">
                    <img src="{{ asset('/') }}assets/template/swipe/assets/img/themesberg.svg" height="25" class="mb-3" alt="Themesberg Logo">
                </a>
            <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                <p class="font-weight-normal font-small mb-0">Copyright © BaemonTeam 2022-<span class="current-year">2020</span>. All rights reserved. Template By themesberg</p>
                </div>
            </div>
        </div>
    </div>
</footer>


{{-- script --}}
@stack('before-script')
@include('includes.landingscript')
@stack('after-script')

</body>

</html>
