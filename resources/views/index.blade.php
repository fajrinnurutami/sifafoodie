<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sifafoodie</title>
        <link rel="icon" type="image/x-icon" href="assets/img/icon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/frontstyles.css') }}"  rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.png" /></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Pelayanan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Produk</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Cara Pesan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('login') }}">Login</a></li>
                    
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase"></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h2 class="section-subheading text-muted">Why Choose Sifafoodie?</h2>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-file fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Halal & Higienis</h4>
                    
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-receipt fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Menu Kreatif</h4>
                        
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-truck fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Pengantaran Gratis<br> & <br>Tepat Waktu</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Indonesian Food</h2>
                    <h3 class="section-subheading text-muted">Cita Rasa Khas Indonesia dengan Beragam Rempah</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/ind-ayam-bakar-limo.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Ayam Bakar Limo</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 25.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/ind-ayam-balado.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Ayam Balado</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 25.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/ind-empal.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Nasi Lengko</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 30.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/ind-garang-asem-ayam.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Garang Asem Ayam</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 25.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/ind-pepes.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Pepes Ikan Kemangi</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 25.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/ind-rendang.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Rendang</div>
                                <br/>
                                <div class="portfolio-caption-subheading text-muted">Rp 30.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Asian Food</h2>
                    <h3 class="section-subheading text-muted">Masakan Indonesia ala Chinese Food, Japanese Food, Korean Food</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/chn-ayam-kungpao.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Ayam Kungpao</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 25.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/chn-ayam-szechuan.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Ayam Szechuan</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 25.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/chn-fish-teriyaki.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Fish Teriyaki</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 25.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal10"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/chn-mongolian-beef.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Mongolian Beef</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 30.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal11"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/chn-nasi-ayam-hainan.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Nasi Ayam Hainan</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 25.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal12"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/chn-sapi-saus-hoisin.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Sapi Saus Hoisin</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 25.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Western Food</h2>
                    <h3 class="section-subheading text-muted">Masakan Indonesia ala Western Food</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal13"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/west-beef-stew.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Beef stew</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 30.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal14"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/west-grilled-chicken-mushroom.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Grilled Chicken Mushroom</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 25.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal15"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/produk/west-grilled-shrimp.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paket Grilled Shrimp</div>
                                <div class="portfolio-caption-subheading text-muted">Rp 35.000/box</div>
                                <div class="portfolio-caption-subheading text-muted">Minimal pemesanan 10 box</div>
                            </div>
                        </div>
                    </div>
            
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Petunjuk Pemesanan</h2>
                    <h3 class="section-subheading text-muted"></h3>
                    <br/>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/how-to-order-1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Login / Registrasi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Silahkan melakukan login / registrasi di situs kami. Lengkapi data dan informasi yang dibutuhkan.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/how-to-order-2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Pilih Paket Menu</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Pilih paket yang ingin Anda pesan.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/how-to-order-3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Lengkapi Data Pemesanan</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lengkapi data pemesanan Anda, sesuai informasi yang dibutuhkan.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/how-to-order-4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Tunggu Email Konfirmasi Pemesanan dan Petunjuk Pembayaran</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Silakan konfirmasi pembayaran ke nomer handphone yang sudah diinformasikan oleh tim kami</p></div>
                        </div>
                    </li>
                    <li class="timeline-image">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/how-to-order-5.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Tunggu Pesanan Anda</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Pesanan Anda akan diantar sesuai dengan data yang telah kami terima. 
                            Jika perlu bantuan lebih lanjut, hubungi Customer Relations kami di +62 812 3456 789</p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Ketentuan Pemesanan-->
        <div class="tnc" style="border: solid 1px #f89b1c;padding:10px;align="center";>
          <h4 class="text-center">Ketentuan Pemesanan dan Pengiriman</h4>
          <div class="no-bullet f16">
            <ul removed="" -type:="" circle="">
            <li>Pemesanan kami buka setiap hari kerja (SENIN-JUMAT), mulai pukul 09.00 – 17.00.</li>
                <li>Catering akan kami antarkan setelah konfirmasi pembayaran.</li>
                <li>Konfirmasi pembayaran kami tunggu paling lambat H-2 sebelum tanggal pengiriman</li>
            </ul>          
            </div>
        </div>
      
        
        <!-- Clients-->
        <section class="py-5">
            <div class="container">
            <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Client</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/maxima.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/nurulfikri.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/kitakerja.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/plan.png" alt="" /></a>
                    </div>
                </div>
            </div>

     
       
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Sifafoodie 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right"><a class="mr-3" href="#!">Privacy Policy</a><a href="#!">Terms of Use</a></div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals--><!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Ayam Bakar Limo</h2>
                                    <p class="item-intro text-muted">Ayam Bakar Limo, Tempe Bacem, Lalapan+Sambal, Nasi Putih/Merah, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/ind-ayam-bakar-limo-full.jpg" alt="" />
                                    <p>INGREDIENT: daging ayam, jeruk limo, tempe, lalapan, sambal, nasi putih/merah, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 25.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Ayam Balado</h2>
                                    <p class="item-intro text-muted">Ayam Balado, Sayur Lodeh, Nasi Putih/Merah, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/ind-ayam-balado-full.jpg" alt="" />
                                    <p>INGREDIENT: daging ayam, wortel, labu siam, kacang panjang, terong, putren, tempe, nasi putih/merah, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 25.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Nasi Lengko</h2>
                                    <p class="item-intro text-muted">Nasi Lengko, Empal gepuk, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/ind-empal-full.jpg" alt="" />
                                    <p>INGREDIENT: nasi putih, tempe, tahu, tomat, tauge, timun, kacang tanah, daging sapi, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 30.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Garang Asem Ayam</h2>
                                    <p class="item-intro text-muted">Garang Asem Ayam, Tumis Tempe Buncis, Kuah Kaldu, Nasi putih/Merah, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/ind-garang-asem-ayam-full.jpg" alt="" />
                                    <p>INGREDIENT: daging ayam, tempe, buncis, nasi putih/merah, buah segar </p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 25.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Pepes Ikan Kemangi</h2>
                                    <p class="item-intro text-muted">Pepes Ikan Kemangi, Tahu Goreng, Sayur Asem, Nasi Putih/Merah, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/ind-pepes-full.jpg" alt="" />
                                    <p>INGREDIENT: ikan dori, daun kemangi, tahu kuning, kacang panjang, jagung, labu siam, kacang tanah, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 25.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Rendang</h2>
                                    <p class="item-intro text-muted">Rendang, Sayur Bumbu Kuning, Nasi Putih/Merah, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/ind-rendang-full.jpg" alt="" />
                                    <p>INGREDIENT: daging sapi, santan, kacang panjang, wortel, labu siam, kol, nasi putih/merah, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 30.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 7-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Ayam Kungpao</h2>
                                    <p class="item-intro text-muted">Ayam Kungpao, Capcay, Kuah Kaldu, Nasi Putih/Merah, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/chn-ayam-kungpao-full.jpg" alt="" />
                                    <p>INGREDIENT: daging ayam, kacang mete, paprika hijau, saus tiram, minyak wijen, wortel, jagung putren, kembang kol, jamur kuping, caisim, kol putih, buncis, kapri, sawi putih, nasi putih/merah, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 25.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 8-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Ayam Szechuan</h2>
                                    <p class="item-intro text-muted">Ayam Szechuan, Sapo Tahu, Kuah Kaldu, Nasi Putih/Merah, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/chn-ayam-szechuan-full.jpg" alt="" />
                                    <p>INGREDIENT: daging ayam, tahu putih, nasi putih/merah, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 25.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 9-->
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Fish Teriyaki</h2>
                                    <p class="item-intro text-muted">Fish Teriyaki, Miso Soup, Yasai Itame, Nasi Putih/Merah, Fresh Fruits</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/chn-fish-teriyaki-full.jpg" alt="" />
                                    <p>INGREDIENT: ikan dori, bawang bombay, saus teriyaki, tahu putih, miso, nasi putih/merah, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 25.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 10-->
        <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Mongolian Beef</h2>
                                    <p class="item-intro text-muted">Mongolian Beef, Green Bean with Sesame Dressing, Kuah Kaldu, Nasi Putih/Merah, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/chn-mongolian-beef-full.jpg" alt="" />
                                    <p>INGREDIENT: daging sapi, minyak canola, saus wijen, buncis, nasi putih/merah, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 30.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 11-->
        <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Nasi Ayam Hainan</h2>
                                    <p class="item-intro text-muted">Nasi Ayam Hainam, Pokcoy Garlic, Kuah Kaldu, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/chn-nasi-ayam-hainan-full.jpg" alt="" />
                                    <p>INGREDIENT: nasi putih, daging ayam, pokcoy, bawang putih, saus tiram, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 25.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 12-->
        <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Sapi Saus Hoisin</h2>
                                    <p class="item-intro text-muted">Sapi Saus Hoisin, Cah Pokcoy, Kuah Kaldu, Nasi Putih/Merah, Buah Segar</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/chn-sapi-saus-hoisin-full.jpg" alt="" />
                                    <p>INGREDIENT: daging sapi, bawang bombay, paprika merah, paprika hijau, saus hoisin, pokcoy, nasi putih/merah, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 30.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 13-->
        <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Beef Stew</h2>
                                    <p class="item-intro text-muted">Beef Stew with Vegetable, Corn Chowder, Baked Potato, Fresh Fruits</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/west-beef-stew-full.jpg" alt="" />
                                    <p>INGREDIENT: daging sapi, tomat, bay leaf, parsley, jagung manis, peterselly, kentang, margarin, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 30.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 14-->
        <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Grilled Chicken Mushroom</h2>
                                    <p class="item-intro text-muted">Grilled Chicken Mushroom Sauce, Coleslaw, Garlic Potato, Fresh Fruits</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/west-grilled-chicken-mushroom-full.jpg" alt="" />
                                    <p>INGREDIENT: daging ayam organik, jamur merang, buah segar, wortel, kol, bawang bombay, kentang, bawang putih, buah segar </p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 25.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 15-->
        <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paket Grilled Shrimp</h2>
                                    <p class="item-intro text-muted">Grilled Shrimp Lemon, Caesar Salad, Pumpkin Soup, Fresh Fruit</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/west-grilled-shrimp-full.jpg" alt="" />
                                    <p>INGREDIENT: udang, saus lemon, daging ayam, daun lettuce, roti tawar, keju, labu, susu, buah segar</p>
                                    <ul class="list-inline">
                                        <li>Harga: Rp 35.000/box</li>
                                        <li>Minimal pemesanan 10 box</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ asset('assets/mail/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('assets/mail/contact_me.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/frontscripts.js') }}"></script>
    </body>
</html>
