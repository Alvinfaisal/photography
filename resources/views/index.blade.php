@extends('layouts.main')

@section('section')

    <!-- Home -->
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5" data-aos="fade-right">
            <h1 class="headline">One <span class="home_text">Pro</span><br>Production</h1>
            <p class="para para-light py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus tempore
                accusamus quis magnam doloremque itaque ad modi, pariatur iste labore similique officiis impedit
                aspernatur aperiam facere architecto. Eligendi, repellendus inventore!</p>
            <div class="my-3">
                <a class="btn" href="#services">Pelajari Lagi</a>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of home -->

    <!-- Services -->
    <section class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4">
                <p>OUR SERVICES</p>
                <h2 class="py-2">Pilihan Paket</h2>
                <p class="para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae asperiores, quia
                    accusantium sunt corporis optio recusandae? Nostrum libero pariatur cumque, ipsa dolores voluptatibus
                    voluptate alias sit fuga. Itaque, ea quo.</p>
            </div>
            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">WEDDING <br>PHOTOGRAPY</br></h4>
                        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>PAKET SILVER</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>PAKET GOLD</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>PAKET PLATINUM</p>
                        </div>
                        <div class="my-3">
                            <a class="btn" href="/services">Pemilihan Service</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">BIRTHDAY<br> PHOTOGRAPY</br></h4>
                        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>PAKET SILVER</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>PAKET GOLD</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>PAKET PLATINUM.</p>
                        </div>
                        <div class="my-3">
                            <a class="btn" href="/services">Pemilihan Service</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">GRADUATION PHOTOGRAPY</h4>
                        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>PAKET SILVER</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>PAKET GOLD</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>PAKET PLATINUM</p>
                        </div>
                        <div class="my-3">
                            <a class="btn" href="/services">Pemilihan Service</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of services -->

    <!-- Portofolio -->
    <div class="slider-1 testimonial text-light d-flex align-items-center">
        <section class="portofolio d-flex align-items-center py-5" id="portofolio"></section>
        <div class="container">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <p>Portofolio</p>
                    <h2 class="py-2">Contoh Hasil Kerja</h2>
                    <p class="para-light">Bebrapa contoh dari hasil perkerjaan dari team kami</p>
                </div>
            </div> <!-- end of row -->
            <div class="row p-2" data-aos="zoom-in">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <div class="d-flex pt-4">
                                            <div>
                                                <img class="" src=" ./assets/images/testimonial-1.jpg"
                                                    alt="testimonial">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <div class="d-flex pt-4">
                                            <div>
                                                <img class="" src=" ./assets/images/testimonial-1.jpg"
                                                    alt="testimonial">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <div class="d-flex pt-4">
                                            <div>
                                                <img class="" src=" ./assets/images/testimonial-1.jpg"
                                                    alt="testimonial">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <div class="d-flex pt-4">
                                            <div>
                                                <img class="" src=" ./assets/images/testimonial-1.jpg"
                                                    alt="testimonial">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of Portofolio -->

    <!-- Work -->
    <section class="work d-flex align-items-center py-5">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                    <img class="img-fluid" src="./assets/images/work.jpg" alt="work">
                </div>
                <div class="col-lg-5 d-flex align-items-center px-4 py-3" data-aos="">
                    <div class="row">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <h2 class="py-2">Mengapa Memilih Kami ?</h2>
                            <div class="d-flex align-items-center">
                                <p class="p-2"><i class="fas fa-laptop-house fa-lg"></i></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore assumenda nisi
                                    labore !</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="p-2"><i class="fas fa-laptop-house fa-lg"></i></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore assumenda nisi
                                    labore !</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="p-2"><i class="fas fa-laptop-house fa-lg"></i></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore assumenda nisi
                                    labore !</p>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of col-lg-5 -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of work -->

    <!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <p>ABOUT US</p>
                    <h1>We are top internet <br> service company</h1>
                    <p class="py-2 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed
                        accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa.
                        Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>
                    <p class="py-2 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed
                        accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa.
                        Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>

                    <div class="my-3">
                        <a class="btn" href="/about">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down">
                    <img class="img-fluid" src="./assets/images/about.jpg" alt="about">
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->

@endsection
