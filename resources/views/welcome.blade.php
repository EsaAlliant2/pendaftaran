<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>potoub</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset ('asset2/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset ('asset2/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset ('asset2/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset ('asset2/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <!-- <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div> -->
    <!-- end loader -->
    <div class="wrapper">
        <!-- end loader -->
        <div class="sidebar">

            <!-- Sidebar  -->
            <nav id="sidebar">
    <div id="dismiss">
        <i class="fa fa-arrow-left"></i>
    </div>
    <ul class="list-unstyled components">
        <li class="active"> <a href="#">Home</a> </li>
        <li><a href="#about">About </a> </li>
        <li><a href="#work">Work</a> </li>
    </ul>
</nav>
</div>
            <!-- akhir sidebar -->

            <!-- Navbar -->
            <div id="content">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-1 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <!-- {{-- <div class="center-desk">
                                <div class="logo">
                                    <img src="images/unnamed.jpg" />
                                </div>
                            </div> --}} -->
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-9 col-md-9 col-sm-9">
                        <ul class="btn">
                            <li class="down_btn"><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            <li><button type="button" id="sidebarCollapse">
                                    <img src="images/menu_icon.png" alt="#" />
                                </button>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
            <!-- akhir navbar -->

            <!-- banner -->
            <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                        <div class="text-bg">
                                            <h1>SMK<br> Antartika 1 <br>Sidoarjo</h1>
                                            <p>Aplikasi Web Penerimaan Peserta Didik Baru Tahun Pelajaran 2023 / 2024 SMK ANTARTIKA 1 SIDOARJO </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                        <div class="images_box">
                                            <figure><img src="images/img2.png"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid ">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                        <div class="text-bg">
                                            <h1>SMK<br> Antartika 1 <br>Sidoarjo</h1>
                                            <p>Aplikasi Web Penerimaan Peserta Didik Baru Tahun Pelajaran 2023 / 2024 SMK ANTARTIKA 1 SIDOARJO </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                        <div class="images_box">
                                            <figure><img src="images/img2.png"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="carousel-caption ">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                        <div class="text-bg">
                                            <h1>SMK<br> Antartika 1 <br>Sidoarjo</h1>
                                            <p><i class="fa fa-map-marker"> Jl.Siwalanpanji, Kec. Buduran Sidoarjo, Indonesia </i>  <i class="fa fa-phone"> +6231-8962851</i> </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                        <div class="images_box">
                                            <figure><img src="images/img2.png"></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
            <!-- end banner -->

            <!-- about -->
            <div id="about" class="about">
                <div class="container-fluid">
                    <div class="row d_flex">
                        <div class="col-md-5">
                            <div class="about_img">
                                <figure><img src="images/depan.jpg" alt="#" /></figure>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="titlepage">
                                <h2>Informasi <span class="blu">Sekolah</span></h2>
                                <p>SMK Antartika 1 Sidoarjo adalah sekolah SMK di sidoarjo dengan menjamin mutu industri di dalamnya. Dengan mengusung Moto "Pilih Sekolah yang Berkualitas Bukan Janji Tapi Bukti".</p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end about -->

            <!-- choose  section -->
            <!-- <div class="choose ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Why <span class="blu"> Choose Us</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="choose_bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                   
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 padding_left0">
                                        <div class="choose_box">
                                            <i><img src="images/admin.png" alt="#" /></i>
                                            <h3> Ad Minim</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end choose  section -->
            <!-- work -->
            <div id="work" class="work">
                <div class="container-fluid">
                    <div class="row d_flex">
                        <div class="col-md-7">
                            <div class="titlepage">
                                <h2>Visi <span class="blu">Misi</span></h2>
                                <p>Visi : Terwujudnya peserta didik yang unggul dalam bidang akademik dan non akademik, Terwujudnya komunitas belajar sepanjang hayat yaitu sekolah sebagai tempat saling belajar dan berkembang bagi guru sebagai ahli, peserta didik, serta orang tua dan masyarakat, Terwujudnya pendidikan yang mengedepankan pembentukan profil pelajar Pancasila, yang memiliki enam dimensi utama yaitu: a. Beriman, bertakwa kepada Tuhan Yang Maha Esa, dan berakhlak mulia,

                                    b. Mandiri,
                                    
                                    c. Bernalar Kritis,
                                    
                                    d. Kreatif,
                                    
                                    e. Bergotong-royong, dan
                                    
                                    f. Berkebinekaan global. </p>
                                <p>Misi :  1. Mewujudkan lulusan yang unggul dalam bidang akademik dan non akademik.

                                    a. Menentukan kriteria ketuntasan belajar peserta didik
                                    
                                    b. Menentukan kriteria lulusan terutama pada ujian sekolah untuk semua mata pelajaran
                                    
                                    c. Mengikutsertakan peserta didik untuk kegiatan lomba minimal tingkat kecamatan hingga sampai tingkat internasional,
                                
                                   2. Mewujudkan pendidikan yang mengedepankan pembentukan komunitas belajar sepanjang hayat yaitu guru, peserta didik dan orang tua saling belajar sepanjang hidupnya.

                                    a. Membuka ruang kelas open class untuk guru lain bisa saling melihat dan belajar proses pembelajaran di kelas.
                                    
                                    
                                    b. Mengaktifkan kegiatan MGMP sekolah untuk forum diskusi dalam merencanakan pembelajaran, melaksanakan pembelajaran, dan penilaian
                                    
                                    c. Mengikuti pendidikan dan atau pelatihan yang relevan dengan mata pelajaran yang diampu untuk dapat meningkatkan kualitas pengetahuan, keterampilan, dan wawasan guru agar lebih profesional.
                                    
                                    d. Memfasilitasi kegiatan ekstrakurikuler pilihan berdasarkan minat dan potensi peserta didik dalam segala bidang, misalnya studi club seperti: club robotik, klub penelitian remaja, club kreativitas siswa, club ajang prestasi siswa, dll.
                                    
                                    e. Melakukan sosialisasi kepada komunitas orang tua terkait dengan pola/strategi pendampingan belajar online (belajar dari rumah) pada masa pandemi untuk putra dan putrinya.</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="work_img">
                                <figure><img src="images/work_img.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end work -->

            <!-- request -->
            <!-- <div id="contact" class="request">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Request <span class="white">A call Back</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form id="request" class="main_form">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Email" type="type" name="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Phone Number" type="type"
                                            name="Phone Number">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="textarea" placeholder="Message" type="type"
                                            Message="Name">Message </textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="send_btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end request -->

            <!--  footer -->
            <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-8 col-sm-6">
                                        <div class="address">
                                            <h3>Address </h3>
                                        </div>
                                        <ul class="location_icon">
                                            <li><i class="fa fa-map-marker"> Jl.Siwalanpanji, Kec. Buduran Sidoarjo, Indonesia</i>  <i class="fa fa-phone"> +6231-8962851</i></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="address">
                                            <h3>Links</h3>
                                            <ul class="Menu_footer">
                                                <li class="active"> <a href="#">Home</a> </li>
                                                <li><a href="#about">About </a> </li>
                                                <li><a href="#work">Work</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-5 col-sm-6">
                                        <div class="address">
                                            <h3>Follow Us</h3>
                                        </div>
                                        <ul class="social_icon">
                                            <li><a href="">Facebook <i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"> Twitter<i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"> Linkedin<i class="fa fa-linkedin-square"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="https://youtube.com/@1akun365"> Youtube<i class="fa fa-youtube-play"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.instagram.com/invites/contact/?i=2cx2isqyvnni&utm_content=9twb1v2"> Instagram<i class="fa fa-instagram"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- <div class="col-md-7 col-sm-6">
                                        <div class="address">
                                            <h3>Newsletter </h3>
                                        </div>
                                        <form class="bottom_form">
                                            <input class="enter" placeholder="Enter Your Email" type="text"
                                                name="Enter Your Email">
                                            <button class="sub_btn">subscribe</button>
                                        </form>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->

        </div>

        <div class="overlay"></div>
        <!-- Javascript files-->
        <script src="{{asset ('asset2/js/jquery.min.js')}}"></script>
        <script src="{{asset ('asset2/js/popper.min.js')}}"></script>
        <script src="{{asset ('asset2/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset ('asset2/js/jquery-3.0.0.min.js')}}"></script>
        <!-- sidebar -->
        <script src="{{asset ('asset2/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset ('asset2/js/custom.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });

        </script>
        <script>
            $(document).ready(function () {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function () {

                    $(this).addClass('transition');
                }, function () {

                    $(this).removeClass('transition');
                });
            });

        </script>
        <script>
            // This example adds a marker to indicate the position of Bondi Beach in Sydney,
            // Australia.
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 11,
                    center: {
                        lat: 40.645037,
                        lng: -73.880224
                    },
                });

                var image = 'images/maps-and-flags.png';
                var beachMarker = new google.maps.Marker({
                    position: {
                        lat: 40.645037,
                        lng: -73.880224
                    },
                    map: map,
                    icon: image
                });
            }

        </script>
        <!-- google map js -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
        </script>
        <!-- end google map js -->
</body>

</html>
