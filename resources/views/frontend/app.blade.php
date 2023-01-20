<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
            rel="stylesheet">

        <title>Profil - Man 4 Ciamis</title>

        <!-- Bootstrap core CSS -->
        <link
            href="{{asset('home/vendor/bootstrap/css/bootstrap.min.css')}}"
            rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{asset('home/assets/css/fontawesome.css')}}">
        <link
            rel="stylesheet"
            href="{{asset('home/assets/css/templatemo-grad-school.css')}}">
        <link rel="stylesheet" href="{{asset('home/assets/css/owl.css')}}">
        <link rel="stylesheet" href="{{asset('home/assets/css/lightbox.css')}}">
        <!-- TemplateMo 557 Grad School https://templatemo.com/tm-557-grad-school -->
    </head>

    <body>

        <!--header-->
        <header class="main-header clearfix" role="header">
            <div class="logo">
                <!-- <img src="{{asset('home/assets/images/unnamed.jpg')}}" alt="" width="60"
                height="25" class="d-inline-block align-text-top"> -->
                <a href="/">
                    <img
                        src="{{asset('home/assets/images/man.png')}}"
                        alt="logo"
                        width="200px"
                        height="50px">
                    <!-- <em>logo</em> -->
                </a>
            </div>
            <a href="#menu" class="menu-link">
                <i class="fa fa-bars"></i>
            </a>
            <nav id="menu" class="main-nav" role="navigation">
                <ul class="main-menu">
                    <li>
                        <a href="#section1">Home</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#section2">About Us</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#section2">Who we are?</a>
                            </li>
                            <li>
                                <a href="#section3">What we do?</a>
                            </li>
                            <li>
                                <a href="#section3">How it works?</a>
                            </li>
                            <li>
                                <a href="" rel="sponsored" class="external">External URL</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#section4">Article</a>
                    </li>
                    <!-- <li><a href="#section5">Video</a></li> -->
                    <li>
                        <a href="#section6">Contact</a>
                    </li>
                    <li>
                        <a href="{{route('login')}}" class="external">Login</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- ***** Main Banner Area Start ***** -->
        <section class="section main-banner" id="top" data-section="section1">
            <video autoplay="autoplay" muted="muted" loop="loop" id="bg-video">
                <source src="{{asset('home/assets/images/video.mp4')}}" type="video/mp4"/>
            </video>

            <div class="video-overlay header-text">
                <div class="caption">
                    <h6>Senior High School</h6>
                    <h2>
                        <em>Man 4</em>
                        Ciamis</h2>
                    <div class="main-button">
                        <div class="scroll-to-section">
                            <a href="#section2">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Main Banner Area End ***** -->

        <section class="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="features-post">
                            <div class="features-content">
                                <div class="content-show">
                                    <h4>
                                        <i class="fa fa-pencil"></i>All Courses</h4>
                                </div>
                                <div class="content-hide">
                                    <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros
                                        a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus,
                                        laoreet libero eu, vehicula libero.</p>
                                    <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis
                                        mi. In mollis eros a posuere imperdiet.</p>
                                    <div class="scroll-to-section">
                                        <a href="#section2">More Info.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="features-post second-features">
                            <div class="features-content">
                                <div class="content-show">
                                    <h4>
                                        <i class="fa fa-graduation-cap"></i>Virtual Class</h4>
                                </div>
                                <div class="content-hide">
                                    <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros
                                        a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus,
                                        laoreet libero eu, vehicula libero.</p>
                                    <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis
                                        mi. In mollis eros a posuere imperdiet.</p>
                                    <div class="scroll-to-section">
                                        <a href="#section3">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="features-post third-features">
                            <div class="features-content">
                                <div class="content-show">
                                    <h4>
                                        <i class="fa fa-book"></i>Real Meeting</h4>
                                </div>
                                <div class="content-hide">
                                    <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros
                                        a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus,
                                        laoreet libero eu, vehicula libero.</p>
                                    <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis
                                        mi. In mollis eros a posuere imperdiet.</p>
                                    <div class="scroll-to-section">
                                        <a href="#section4">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section why-us" data-section="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Why choose Grad School?</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id='tabs'>
                            <ul>
                                <li>
                                    <a href='#tabs-1'>Best Education</a>
                                </li>
                                <li>
                                    <a href='#tabs-2'>Top Management</a>
                                </li>
                                <li>
                                    <a href='#tabs-3'>Quality Meeting</a>
                                </li>
                            </ul>
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('home/assets/images/choose-us-image-01.png')}}" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Best Education</h4>
                                            <p>Grad School is free educational HTML template with Bootstrap 4.5.2 CSS
                                                layout. Feel free to use it for educational or commercial purposes. You may want
                                                to make
                                                <a href="https://paypal.me/templatemo" target="_parent" rel="sponsored">a little donation</a>
                                                to TemplateMo. Please tell your friends about us. Thank you.</p>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('home/assets/images/choose-us-image-02.png')}}" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Top Level</h4>
                                            <p>You can modify this HTML layout by editing contents and adding more pages as
                                                you needed. Since this template has options to add dropdown menus, you can put
                                                many HTML pages.</p>
                                            <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio,
                                                nec interdum quam felis non ante.</p>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('home/assets/images/choose-us-image-03.png')}}" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Quality Meeting</h4>
                                            <p>You are NOT allowed to redistribute this template ZIP file on any template
                                                collection website. However, you can use this template to convert into a
                                                specific theme for any kind of CMS platform such as WordPress. For more
                                                information, you shall
                                                <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a>
                                                now.</p>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section coming-soon" data-section="section3">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <div class="continer centerIt">
                            <div>
                                <h4>Take
                                    <em>any online course</em>
                                    and win $326 for your next class</h4>
                                <div class="counter">

                                    <div class="days">
                                        <div class="value">00</div>
                                        <span>Days</span>
                                    </div>

                                    <div class="hours">
                                        <div class="value">00</div>
                                        <span>Hours</span>
                                    </div>

                                    <div class="minutes">
                                        <div class="value">00</div>
                                        <span>Minutes</span>
                                    </div>

                                    <div class="seconds">
                                        <div class="value">00</div>
                                        <span>Seconds</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="right-content">
                            <div class="top-content">
                                <h6>Register your free account and
                                    <em>get immediate</em>
                                    access to online courses</h6>
                            </div>
                            <form id="contact" action="" method="get">
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset>
                                            <input
                                                name="name"
                                                type="text"
                                                class="form-control"
                                                id="name"
                                                placeholder="Your Name"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <input
                                                name="email"
                                                type="text"
                                                class="form-control"
                                                id="email"
                                                placeholder="Your Email"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <input
                                                name="phone-number"
                                                type="text"
                                                class="form-control"
                                                id="phone-number"
                                                placeholder="Your Phone Number"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Get it now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section courses" data-section="section4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Choose Your Article</h2>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{asset('home/assets/images/courses-01.jpg')}}" alt="Course #1">
                            <div class="down-content">
                                <h4>Digital Marketing</h4>
                                <p>You can get free images and videos for your websites by visiting Unsplash,
                                    Pixabay, and Pexels.</p>
                                <div class="author-image">
                                    <img src="{{asset('home/assets/images/author-01.png')}}" alt="Author 1">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Pay
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('home/assets/images/courses-02.jpg')}}" alt="Course #2">
                            <div class="down-content">
                                <h4>Business World</h4>
                                <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a
                                    lectus ac ipsum porta.</p>
                                <div class="author-image">
                                    <img src="{{asset('home/assets/images/author-02.png')}}" alt="Author 2">
                                </div>
                                <div class="text-button-free">
                                    <a href="#">Free
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('home/assets/images/courses-03.jpg')}}" alt="Course #3">
                            <div class="down-content">
                                <h4>Media Technology</h4>
                                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas
                                    finibus lobortis enim.</p>
                                <div class="author-image">
                                    <img src="{{asset('home/assets/images/author-03.png')}}" alt="Author 3">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Pay
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/courses-04.jpg" alt="Course #4">
                            <div class="down-content">
                                <h4>Communications</h4>
                                <p>Download free images and videos for your websites by visiting Unsplash,
                                    Pixabay, and Pexels.</p>
                                <div class="author-image">
                                    <img src="assets/images/author-04.png" alt="Author 4">
                                </div>
                                <div class="text-button-free">
                                    <a href="#">Free
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/courses-05.jpg" alt="">
                            <div class="down-content">
                                <h4>Business Ethics</h4>
                                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas
                                    finibus lobortis enim.</p>
                                <div class="author-image">
                                    <img src="assets/images/author-05.png" alt="">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Pay
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/courses-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Photography</h4>
                                <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a
                                    lectus ac ipsum porta.</p>
                                <div class="author-image">
                                    <img src="assets/images/author-01.png" alt="">
                                </div>
                                <div class="text-button-free">
                                    <a href="#">Free
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/courses-02.jpg" alt="">
                            <div class="down-content">
                                <h4>Web Development</h4>
                                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas
                                    finibus lobortis enim.</p>
                                <div class="author-image">
                                    <img src="assets/images/author-02.png" alt="">
                                </div>
                                <div class="text-button-free">
                                    <a href="#">Free
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/courses-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Learn HTML CSS</h4>
                                <p>You can get free images and videos for your websites by visiting Unsplash,
                                    Pixabay, and Pexels.</p>
                                <div class="author-image">
                                    <img src="assets/images/author-03.png" alt="">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Pay
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/courses-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Social Media</h4>
                                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas
                                    finibus lobortis enim.</p>
                                <div class="author-image">
                                    <img src="assets/images/author-04.png" alt="">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Pay
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/courses-05.jpg" alt="">
                            <div class="down-content">
                                <h4>Digital Arts</h4>
                                <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a
                                    lectus ac ipsum porta.</p>
                                <div class="author-image">
                                    <img src="assets/images/author-05.png" alt="">
                                </div>
                                <div class="text-button-free">
                                    <a href="#">Free
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/courses-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Media Streaming</h4>
                                <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas
                                    finibus lobortis enim.</p>
                                <div class="author-image">
                                    <img src="assets/images/author-01.png" alt="">
                                </div>
                                <div class="text-button-pay">
                                    <a href="#">Pay
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section video" data-section="section5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="left-content">
                            <span>our presentation is for you</span>
                            <h4>Watch the video to learn more
                                <em>about Grad School</em>
                            </h4>
                            <p>You are NOT allowed to redistribute this template ZIP file on any template
                                collection website. However, you can use this template to convert into a
                                specific theme for any kind of CMS platform such as WordPress. You may
                                <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a>
                                for details.
                                <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod
                                    odio, nec interdum quam felis non ante.</p>
                            <div class="main-button">
                                <a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <article class="video-item">
                            <div class="video-caption">
                                <h4>Power HTML Template</h4>
                            </div>
                            <figure>
                                <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play"><img src="assets/images/main-thumb.png"></a>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="section contact" data-section="section6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Let’s Keep In Touch</h2>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <!-- Do you need a working HTML contact-form script? Please visit
                        https://templatemo.com/contact page -->
                        {{-- send email --}}
                        @if (session('status'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('status') }}
                        </div>

                        @endif

                        <form id="contact" action="{{route('email')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input
                                            name="name"
                                            type="text"
                                            class="form-control"
                                            id="name"
                                            placeholder="Your Name"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input
                                            name="email"
                                            type="text"
                                            class="form-control"
                                            id="email"
                                            placeholder="Your Email"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <textarea
                                            name="body"
                                            rows="6"
                                            class="form-control"
                                            id=""
                                            placeholder="Your message..."
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Send Message Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div id="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19146.981136755712!2d108.58196552612843!3d-7.464450505840284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e658f45ebdc8a2b%3A0xf102638a5bd6beb4!2sMAN%204%20Ciamis!5e0!3m2!1sid!2sid!4v1674243099237!5m2!1sid!2sid"
                                width="100%"
                                height="422px"
                                frameborder="0"
                                style="border:0"
                                allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <i class="fa fa-copyright"></i>
                            Copyright 2023 by MAN 4 CIAMIS | Design:
                            <a href="" rel="sponsored" target="_parent">Ihya Natik Wibowo</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('home/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{asset('home/assets/js/isotope.min.js')}}"></script>
        <script src="{{asset('home/assets/js/owl-carousel.js')}}"></script>
        <script src="{{asset('home/assets/js/lightbox.js')}}"></script>
        <script src="{{asset('home/assets/js/tabs.js')}}"></script>
        <script src="{{asset('home/assets/js/video.js')}}"></script>
        <script src="{{asset('home/assets/js/slick-slider.js')}}"></script>
        <script src="{{asset('home/assets/js/custom.js')}}"></script>
        <script>
            //according to loftblog tut
            $('.nav li:first').addClass('active');

            var showSection = function showSection(section, isAnimate) {
                var direction = section.replace(/#/, ''),
                    reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                    reqSectionPos = reqSection
                        .offset()
                        .top - 0;

                if (isAnimate) {
                    $('body, html').animate({
                        scrollTop: reqSectionPos
                    }, 800);
                } else {
                    $('body, html').scrollTop(reqSectionPos);
                }

            };

            var checkSection = function checkSection() {
                $('.section').each(function () {
                    var $this = $(this),
                        topEdge = $this
                            .offset()
                            .top - 80,
                        bottomEdge = topEdge + $this.height(),
                        wScroll = $(window).scrollTop();
                    if (topEdge < wScroll && bottomEdge > wScroll) {
                        var currentId = $this.data('section'),
                            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                        reqLink
                            .closest('li')
                            .addClass('active')
                            .siblings()
                            .removeClass('active');
                    }
                });
            };

            $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
                if ($(e.target).hasClass('external')) {
                    return;
                }
                e.preventDefault();
                $('#menu').removeClass('active');
                showSection($(this).attr('href'), true);
            });

            $(window).scroll(function () {
                checkSection();
            });
        </script>
    </body>
</html>