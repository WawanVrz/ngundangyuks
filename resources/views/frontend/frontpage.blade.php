
@extends('frontend.master')

@section('meta_title', '')
@section('meta_description', '')
@section('meta_keyword', '')

@section('content')

<div id="wrapper">

    <!-- header begin -->
    <header>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- logo begin -->
                    <div id="logo">
                        <a href="index.html">
                            <h2>Wawan<span>&amp;</span>Yuni</h2>
                        </a>
                    </div>
                    <!-- logo close -->

                    <!-- small button begin -->
                    <span id="menu-btn"></span>
                    <!-- small button close -->

                    <span class="btn-rsvp">RSVP</span>

                    <!-- mainmenu begin -->
                    <!-- <nav>
                        <ul id="mainmenu">
                            <li><a href="">Home</a></li>
                        </ul>
                    </nav> -->

                </div>
                <!-- mainmenu close -->

            </div>
        </div>
    </header>
    <!-- header close -->

    <!-- content begin -->
    <div id="content" class="no-bottom no-top">

        <!-- rsvp popup begin -->
        <div id="popup-box" class="full-height">
            <span class="btn-close">
                <i class="fa fa-times"></i>
            </span>

            <div class="container center-y">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="deco id-color"><span>We Invite You</span></h2>
                        <h2 data-wow-delay=".2s">Saturday, 25 November 2019</h2>
                    </div>

                    <div class="spacer-double"></div>

                    <div class="col-md-5 col-md-offset-1 text-right">
                        <h3>Wedding Ceremony</h3>
                        13:00 PM - 14:00 PM<br> 100 Mainstreet Center, Sydney<br>
                    </div>

                    <div class="col-md-5">
                        <h3>Wedding Reception</h3>
                        14:00 PM - 16:00 PM<br> 100 Mainstreet Center, Sydney<br>
                    </div>

                    <div class="spacer-double"></div>

                    <form name="rsvp" id='rsvp' class="form-underline" method="post" action="rsvp.php">

                        <div class="col-md-3">
                            <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                        </div>

                        <div class="col-md-3">
                            <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                        </div>

                        <div class="col-md-3">
                            <select id="guest" name="guest" size="1" class="form-control">
                            <option value="" disabled selected>Guests</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <select id="attend" name="attend" size="1" class="form-control">
                            <option value="" disabled selected>Are you attending?</option>
                            <option>yes</option>
                            <option>no</option>
                            </select>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="spacer-single"></div>
                            <input type='submit' id='submit' value='Submit' class="btn btn-custom">
                            <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                        </div>

                    </form>

                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>
        <!-- rsvp popup close -->

        <!-- section begin -->
        <section id="section-hero" class="full-height relative z1 owl-slide-wrapper no-top no-bottom text-light" data-stellar-background-ratio=".2">
            <div class="owl-slider-nav">
                <div class="next"></div>
                <div class="prev"></div>
            </div>

            <div class="center-y fadeScroll relative" data-scroll-speed="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                <div class="spacer-single"></div>
                                <div class="col-md-5 text-right text-center-sm relative">
                                    <h2 class="name">Wawan</h2>
                                </div>
                                <div class="col-md-2 text-center">
                                    <span class="deco-big" data-scroll-speed="2">&amp;</span>
                                </div>
                                <div class="col-md-5 text-left text-center-sm relative">
                                    <h2 class="name">Yuni</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="custom-owl-slider" class="owl-slide" data-scroll-speed="2">
                <div class="item">
                    <img src="{{ asset('assets/images/slider/1.jpg') }}" alt="Slider 1">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/slider/2.jpg') }}" alt="Slider 2">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/slider/3.jpg') }}" alt="Slider 3">
                </div>
            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section id="section-couple" class="no-top">
            <div class="container relative mt-60 z-index">
                <div class="row">

                    <div class="col-md-5 col-md-offset-1 text-center">
                        <img src="{{ asset('assets/images/misc/2.jpg') }}" alt="" class="img-responsive img-rounded wow fadeInLeft" data-wow-delay=".2s" />
                        <div class="padding40">
                            <h2>Hisyam Rahmawan Suharno, S.T.,M.T</h2>
                            <p>Putra Pertama dari pasangan <br>Bapak Wawan & Ibu Wawan <br> Badung</p>
                        </div>
                    </div>

                    <div class="col-md-5 text-center">
                        <img src="{{ asset('assets/images/misc/1.jpg') }}" alt="" class="img-responsive img-rounded wow fadeInRight" data-wow-delay=".2s" />
                        <div class="padding40">
                            <h2>Ni Luh Putu Yuni Antari, S.Pd</h2>
                            <p>Putri Pertama dari pasangan <br>Bapak Yuni & Ibu Yuni <br> Tabanan</p>
                        </div>
                    </div>

                    <div class="col-md-2 col-md-offset-5 text-center absolute">
                        <span class="circle wow zoomIn" data-wow-delay=".8s">
                            <i class="fa fa-heart"></i>
                        </span>
                    </div>


                    <div class="clearfix"></div>
                </div>
            </div>

        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-quote" aria-label="section-quote-1" class="text-light" data-stellar-background-ratio=".2">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-md-8 col-md-offset-2">
                        <blockquote class="very-big text-light wow fadeIn">
                            "Love recognizes no barriers. It jumps hurdles, leaps fences, penetrates walls to arrive at its destination full of hope."
                            <span>Maya Angelou</span>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="container" style="background-size: cover;">
                <div class="row wow fadeInUp animated" style="background-size: cover; visibility: visible; animation-name: fadeInUp;">
                    <div class="col-md-12 text-center" style="background-size: cover;">
                        <h2 class="deco"><span class="id-color">Waktu Tersisa Hingga Acara</span></h2>
                    </div>
                    <div class="col-md-8 col-md-offset-2" style="background-size: cover;">
                        <div class="spacer-double" style="background-size: cover;"></div>
                        <div id="defaultCountdown" class="wow fadeIn is-countdown animated" style="background-size: cover; visibility: visible; animation-name: fadeIn;"><span class="countdown-row countdown-show3"><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Seconds</span></span></span></div>
                        <div class="spacer-single" style="background-size: cover;"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section aria-label="section" class="no-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="deco id-color"><span>You Are Invited</span></h2>
                        <h2 data-wow-delay=".2s">Saturday, 29 December 2020</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-event">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/misc/3.jpg') }}" alt="" class="img-responsive img-rounded wow fadeInLeft">
                    </div>

                    <div class="col-md-5 col-md-offset-1 pt40 pb40 wow fadeIn" data-wow-delay=".5s">
                        <h3>Akad Nikah</h3>
                        Sabtu, 29 Desember 2020<br> 10:00 AM - 12:00 PM (WITA)<br> Masjid Agung Sudirman<br> Jl. Slamet Riyadi No.1, Kota Denpasar, Bali - Indonesia <br>
                        <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                            class="btn btn-custom mt30 popup-gmaps">View on map</a>
                    </div>
                </div>

                <div class="spacer-double"></div>

                <div class="row">
                    <div class="col-md-5 pt40 pb40 text-right wow fadeIn" data-wow-delay=".5s">
                        <h3>Resepsi Pernikahan</h3>
                        Sabtu, 29 Desember 2020<br> 17:00 PM - Selesai (WITA)<br> Aston Hotel Denpasar<br> Jl. Gatot Subroto Barat No.283, Kota Denpasar, Bali - Indonesia <br>
                        <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                            class="btn btn-custom mt30 popup-gmaps">View on map</a>
                    </div>

                    <div class="col-md-6 col-md-offset-1">
                        <img src="{{ asset('assets/images/misc/4.jpg') }}" alt="" class="img-responsive img-rounded wow fadeInRight">
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-guestbook" class="text-light" data-stellar-background-ratio=".2">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <blockquote class="very-big text-light wow fadeIn">
                            "Love recognizes no barriers. It jumps hurdles, leaps fences, penetrates walls to arrive at its destination full of hope."
                            <span>Maya Angelou</span>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section id="section-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Our Gallery</h2>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-md-12">
                        <div class="de_tab tab_style_3 text-center">
                            <ul class="de_nav">
                                <li class="active" data-link="#section-services-tab"><span>The Wedding</span></li>
                                <li data-link="#section-services-tab"><span>Our Best Friends</span></li>
                            </ul>

                            <div class="de_tab_content">

                                <div id="tab1" class="tab_single_content">
                                    <div class="row">

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-1/1.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-1/1.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-1/2.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-1/2.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-1/3.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-1/3.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-1/4.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-1/4.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-1/5.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-1/5.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-1/6.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-1/6.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div id="tab2" class="tab_single_content">
                                    <div class="row">

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-3/1.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-3/1.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-3/2.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-3/2.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-3/3.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-3/3.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-3/4.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-3/4.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-3/5.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-3/5.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="col-md-4 text-center mb10">
                                            <figure class="picframe img-rounded mb20">
                                                <a class="image-popup" href="images/gallery/category-3/6.jpg">
                                                    <span class="overlay-v">
                                                        <i></i>
                                                    </span>
                                                </a>
                                                <img src="images/gallery/category-3/6.jpg" class="img-responsive img-rounded" alt="">
                                            </figure>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content close -->

    <!-- footer begin -->
    <footer>
        <div class="container text-center text-light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="hs1 wow fadeInUp">Wawan<span>&amp;</span>Yuni</h2>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12" style="font-size: 11px;">
                        &copy; Copyright 2020 - Wawan & Yuni Wedding | My Invitation. All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->

    <a href="#" id="back-to-top"></a>
    <div id="preloader">
        <div class="preloader1"></div>
    </div>
</div>

<audio loop="loop" autoplay="autoplay">
	<source src="{{ asset('assets/music/FeelsLikeaweddingDay.mp3') }}" type="audio/mpeg" />
</audio>

@endsection
