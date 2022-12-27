@extends('landingpage.index')
@section('content')
 <div class="container-xxl hero-header" style="background-color: #6785FF">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Welcome to SI Laundry</h1>
                            <p class="text-white pb-3 animated zoomIn" >Jasa Cuci, Setrika, Mengeringkan Pakaian sekitar Jakarta Barat </br>Solusi Pakaian Kotor di SI Laundry aja, Pelayananya baik dan ramah, dan ada berbagai fasilitas menarik di SI Laundry</p>
                            <a href="" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">All Services</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="{{url('img/foto/home.png')}}" style="width: 80%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Service SI Laundry Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                        <h2 class="mb-5">MENGAPA HARUS MEMILIH LAYANAN KAMI</h2>
                        <p>Karena kami senantiasa memberikan layanan Terbaik kami serta dengan harga terjangkau, di SI Laundry tersedia laundry kiloan maupun laundry satuan yang Berkualitas dan juga Amanah.</p>
                    </div>
                    <div class="">
                        <div class="row g-5">
                           <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="bi bi-1-circle text-white"></i>
                                    </div>
                                    <h6 class="mb-0">One Day Service</h6>
                                </div>
                                <span>Jasa Cuci Setrika sehari jadi, jadi bagi yg terburu-buru waktunya tidak usah khawatir karena di SI Laundry memberikan pelayanan one day service.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="bi bi-truck text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Layanan antar jemput laundry</h6>
                                </div>
                                <span>Layanan antar jemput Pakaian anda sekitar Jakarta Barat.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="bi bi-droplet-fill text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Dry Cleaning</h6>
                                </div>
                                <span>Metode pencucian tanpa menggunakan air sama sekali. Sebagai gantinya, proses dry cleaning menggunakan cairan solvent berupa perkloroetilena (PCE) sehingga membersihkan kotoran pada pakaian tanpa merusak serat pakaian.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-smile-beam text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Laundry Khusus</h6>
                                </div>
                                <span>Layanan Cuci Baju Setrika Pakaian Khusus dan jangan khawatir kami sangat menjaga Privasi pelanggan kami.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-headset text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Menjaga Data Privasi Pelanggan</h6>
                                </div>
                                <span>Kami sangat menjaga Prioritas data Pelanggan Kami Sehingga tidak perlu takut kami menyebarkan data anda, jika salah satu karyawan kami membocorkan data anda, Kami siap menerima konsekuensinya.</span>
                            </div>
                             <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="bi bi-yelp text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Pewangi</h6>
                                </div>
                                <span>Parfum SI laundry Berkualitas Harum Wangi Segar Awet Tahan Lama solusi perawatan pakaian anda.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services SI Laundry End -->

        <!-- Jasa SI Laundry Start -->
        <div class="container-xxl">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Service</div>
                    <h2 class="mb-4 ">JASA LAUNDRY KAMI</h2><hr></br></br>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon" style="background-color: #6785FF">
                                    <i class="bi bi-basket2-fill fa-2x" style="background-color: #6785FF"></i>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">LAUNDRY KILOAN</h5>
                                <span>Jasa laundry baju kiloan di Sekitar jakarta Barat, cocok untuk pakaian sehari-hari. Sudah termasuk cuci, gosok dan lipat. Bisa antar-jemput</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon" style="background-color: #6785FF">
                                    <i class="bi bi-archive-fill fa-2x" style="background-color: #6785FF"></i>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">LAUNDRY SATUAN</h5>
                                <span>Jasa laundry satuan seperti kemeja, jas dll.  Sangat cocok untuk pakaian spesial anda. Pengerjaan yang detail, bersih  dengan harga terjangkau.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon" style="background-color: #6785FF">
                                    <i class="bi bi-easel3-fill fa-2x" style="background-color: #6785FF"></i>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">JASA CUCI PERLENGKAPAN TIDUR</h5>
                                <span>Laundry perlengkapan tidur anda seperti Selimut, Spring Bad, Sarung Bantal dengan harga terjangkau, bersih, cepat dan kami melayani antar jemput.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon" style="background-color: #6785FF">
                                    <i class="bi bi-wind fa-2x" style="background-color: #6785FF"></i>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">JASA CUCI SEPATU</h5>
                                <span>Ingin sepatu anda selalu bersih dan wangi, kami akan membersihkan dan memberikan perawatan pada sepatu kesayangan anda.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon" style="background-color: #6785FF">
                                    <i class="bi bi-yin-yang fa-2x" style="background-color: #6785FF"></i>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">JASA CUCI BONEKA</h5>
                                <span>Ingin Boneka kesayangan anda selalu bersih dan wangi, kami akan membersihkan dan memberikan perawatan pada boneka kesayangan anda.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon" style="background-color: #6785FF">
                                    <i class="bi bi-xbox fa-2x" style="background-color: #6785FF"></i>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">JASA CUCI PERLENGKAPAN BAYI</h5>
                                <span>Laundry perlengkapan bayi anda seperti stroller, box bayi dengan harga terjangkau, bersih, cepat dan kami melayani antar jemput.</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jasa SI Laundry End -->

        <!-- Harga Paket SI Laundry Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Price</div>
                    <h2 class="mb-5">Harga di SI Laundry!</h2>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-tags-fill fa-2x mb-3" style="color: #6785FF"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">Paket 1</h5>
                                <small>Rp.50.000/5kg</small>
                            </div>
                        </div>
                        <p>Cuci Kering Setrika Pakaian, Paket ini tersedia jika pelanggan sudah berlanggan di SI Laundry</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-tags-fill fa-2x mb-3" style="color: #6785FF"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">Paket 2</h5>
                                <small>Rp.42.000/5kg</small>
                            </div>
                        </div>
                        <p>Cuci Kering Lipat Pakaian, Paket ini tersedia jika pelanggan sudah berlanggan di SI Laundry</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-tags-fill fa-2x mb-3" style="color: #6785FF"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">Paket 3</h5>
                                <small>Rp.70.000/6kg</small>
                            </div>
                        </div>
                        <p>Cuci Kering Lipat Setrika Perlengkapan Tidur, Paket ini tersedia jika pelanggan sudah berlanggan di SI Laundry</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-tags-fill fa-2x mb-3" style="color: #6785FF"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">Paket 4</h5>
                                <small>Rp.75.000/10kg</small>
                            </div>
                        </div>
                        <p>Cuci Kering Lipat Setrika Perlengkapan Tidur dan Pakaian, Paket ini tersedia jika pelanggan sudah berlanggan di SI Laundry</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-tags-fill fa-2x mb-3" style="color: #6785FF"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">Paket 5</h5>
                                <small>Rp.5.000/kg</small>
                            </div>
                        </div>
                        <p>Cuci Kering Boneka, Paket ini tersedia jika pelanggan sudah berlanggan di SI Laundry</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-cash-coin fa-2x mb-3" style="color: #6785FF"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">Paket Hemat</h5>
                                <small>Rp.100.000/16kg</small>
                            </div>
                        </div>
                        <p>Cuci Kering Setrika Lipat Pakaian,Boneka, Perlengkapan Tidur, Paket ini tersedia jika pelanggan sudah berlanggan di SI Laundry</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-alexa fa-2x mb-3" style="color: #6785FF"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">Laundry Kiloan</h5>
                                <small>Rp.5.000/kg</small>
                            </div>
                        </div>
                        <p>Cuci Kering Pakaian dan Boneka</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-alexa fa-2x mb-3" style="color: #6785FF"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">Laundry Kiloan</h5>
                                <small>Rp.8.000/kg</small>
                            </div>
                        </div>
                        <p>Cuci Kering Setrika Pakaian</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-alexa fa-2x mb-3" style="color: #6785FF"></i>
                            <div class="ps-3">
                                <h5 class="mb-1">Laundry Kiloan</h6>
                                <small>Rp.10.000/kg</small>
                            </div>
                        </div>
                        <p>Cuci Kering Setrika Perlengkapan Tidur</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Harga Paket SI Laundry End -->

        <!-- Diskon Start -->
        <div class="container-xxl my-6 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #6785FF">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Cucian Numpuk Tapi Malas Nyuci ?</h3>
                        <small class="text-white"> Layanan Antar Jemput </small><br>
                        <small class="text-white"> Hubungi Kami : <i class="fas fa-phone-volume"></i> 0823-7654-9876</small>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="max-height: 250px;" src="img/newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Diskon End -->

        @endsection