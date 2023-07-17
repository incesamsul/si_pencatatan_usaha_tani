<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Si usaha tani</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/mico-html/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('template/mico-html/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('template/mico-html/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('template/mico-html/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="header_top">
                <div class="container">
                    <div class="contact_nav">
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call : +01 123455678990
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                Email : info@gmail.com
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Location
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        {{-- <a class="navbar-brand text-black" href="index.html" style="color:black">
                            <img src="" alt="">
                            based
                        </a> --}}


                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Beranda <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html"> Tentang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="treatment.html">Data</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quote_btn-container">
                                <a href="{{ URL::to('/login') }}">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>
                                        Login
                                    </span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section shadow-none">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="play_btn">
                                <button>
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </button>
                            </div>
                            <h1>
                                Sistem informasi <br>
                                <span>
                                    Usaha Tani
                                </span>
                            </h1>
                            <p>
                                Website Sistem informasi pencatatan usaha tani
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="{{ asset('img/farm.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- book section -->

    <section class="book_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <h4>
                            DATA <span>TANI</span>
                        </h4>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- end book section -->



    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> 2023
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="{{ asset('template/mico-html/js/jquery-3.4.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('template/mico-html/js/bootstrap.js') }}"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- custom js -->
    <script src="{{ asset('template/mico-html/js/custom.js') }}"></script>


</body>

</html>
