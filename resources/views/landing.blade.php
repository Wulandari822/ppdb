<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PPDB SMK Wikrama</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/hero2.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">PPDB</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Beranda</a>
                        <a href="#overview" class="nav-item nav-link">Jurusan</a>
                        <a href="#features" class="nav-item nav-link">Tentang Kami</a>
                        <a href="#testimonial" class="nav-item nav-link">Testimoni</a>
                        <a href="#contact" class="nav-item nav-link">Hubungi Kami</a>
                    </div>
                    <a href="" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Login</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">PPDB TP 2023-2024 SMK Wikrama Bogor</h1>
                            <p class="text-white pb-3 animated slideInDown">Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <b>PENDAFTARAN PPDB</b> dibawah ini!</p>
                            <div class="position-relative w-100 mt-3">
                                <a href="{{route('index')}}" class="btn btn-light"style="font-family: #EDF5FF;"><b>PENDAFTARAN PPDB</b></a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid rounded animated zoomIn" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-edit text-primary mb-4"></i>
                            <h5 class="mb-3">Motto</h5>
                            <p class="m-0">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-sync text-primary mb-4"></i>
                            <h5 class="mb-3">Afirmasi</h5>
                            <p class="m-0">Pada MU Negri - Kami berjanji - Lulus Wikrama Siap Membangun Negri</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-draw-polygon text-primary mb-4"></i>
                            <h5 class="mb-3">Attitude</h5>
                            <p class="m-0">Aku Ada Lingkungan ku Bahagia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Advanced Feature Start -->
        <div class="container-xxl py-6" id="features">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h1 class="mb-3">Tentang kami</h1>
                    <p class="mb-5">SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu adalah sekretaris dengan jumlah hanya 34 siswa

Kompetensi keahlian di SMK Wikrama Bogor pun terus berkembang. SMK Wikrama Bogor membuka 7 kompetensi keahlian, diantaranya (1) Otomatisasi dan Tata Kelola Perkantoran; (2) Teknik Komputer dan Jaringan; (3) Rekayasa Perangkat Lunak; (4) Multimedia; (5) Bisnis Daring dan Pemasaran; (6) Tata Boga; dan (7) Perhotelan</p>
                </div>
            </div>
        </div>
        <!-- Advanced Feature End -->


        <!-- Overview Start -->
        <div class="container-xxl bg-light my-6 py-5" id="overview">
            <div class="container">
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-1.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">01</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Pengembangan Perangkat Lunak dan GIM (PPLG)</h5>
                        </div>
                        <p class="mb-4"><b>Keunggulan</b></p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Desktop Programming</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Web Programming</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Database Administration</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Mobile Programming & Bussiness Analyst</p>
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">02</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Teknik Jaringan Komputer dan Telekomunikasi (TJKT)</h5>
                        </div>
                        <p class="mb-4"><b>Keunggulan</b></p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>CNAP (Cisco Networking Academy Program)</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>MCNA (Mikrotik Certified Network Associate).</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-2.jpg">
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-3.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">03</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Desain Komunikasi Visual (DKV)</h5>
                        </div>
                        <p class="mb-4"><b>Keunggulan</b></p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Production House</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Radio & Televisi</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Studio foto, Percetakan Grafis, Corporate Brand Identity, Penerbit Majalah/Koran, dll.</p>
                    </div>
                <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">04</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Pemasaran (PMN)</h5>
                        </div>
                        <p class="mb-4"><b>Keunggulan</b></p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Foto Produk</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Desain</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Copy Writing, dll.</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-4.jpg">
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-5.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">05</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Manajemen Perkantoran dan Layanan Bisnis (MPLB)</h5>
                        </div>
                        <p class="mb-4"><b>Keunggulan</b></p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Juara II lomba keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun 2016</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Juara I lomba olimpiade sekretaris tingkat nasional tahun 2017</p>
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">06</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Kuliner (KLN)</h5>
                        </div>
                        <p class="mb-4"><b>Keunggulan</b></p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Bekerja di Restoran, Hotel</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Rumah sakit, Katering, dll.</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-6.jpg">
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/overview-7.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">07</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">Perhotelan (HTL)</h5>
                        </div>
                        <p class="mb-4"><b>Keunggulan</b></p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Siswa Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Overview End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-6" id="testimonial">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Testimoni</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat bermanfaat dan akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Ahmad Munito (2000)</h5>
                                <span>Administrasi Perkantoran (APK)</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI yang sangat memudahkan siswa.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Kamaludin (2016)</h5>
                                <span>Rekayasa Perangkat Lunak (RPL)</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>SMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, melainkan melebihi dari apa yang dibutuhkan di dunia kerja pada umumnya.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/user.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Lutfi Hakim (2011)</h5>
                                <span>Rekayasa Perangkat Lunak (RPL)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-6" id="contact">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-3">Kontak Pendaftaran</h1>
                        <p class="mb-4">Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146 prohumasi@smkwikrama.net</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Kontak Kami</p>
                                <a style="text-decoration: underline !important; font-weight: bold !important" href="https://wa.me/6281909242411">CS 1: hubungi kami (klik disini)</a><br>
                                <a style="text-decoration: underline !important; font-weight: bold !important" href="https://wa.me/6281909242411">CS 2: hubungi kami (klik disini)</a>
                            </div>
                        </div>
                        <div class="position-relative">
                                <a href="{{route('index')}}" class="btn btn-primary rounded-pill py-2 px-4">DAFTAR SEKARANG</a>
                            </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Alamat Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">+62</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Kirim pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                <div class="col-md-6 col-lg-3 pt-4">
                <img src="img/logo.png" style="max-width: 100px; max-height: 100px;">
                <div class="d-flex pt-3">
                            <a class="btn btn-outline-light btn-social" href="https://instagram.com/smkwikrama?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/school/smkwikramabogor/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
</div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Alamat<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Wangun Kelurahan Sindangsari Bogor Timur 16720</p>
                        <p><i class="fa fa-phone-alt me-3"></i>0251-8242411</p>
                        <p><i class="fa fa-envelope me-3"></i>prohumasi@smkwikrama.net</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Tautan<span></span></p>
                        <a class="btn btn-link" href="#home">Beranda</a>
                        <a class="btn btn-link" href="#overview">jurusan</a>
                        <a class="btn btn-link" href="#features">Tentang Kami</a>
                        <a class="btn btn-link" href="#testimonial">Testimoni</a>
                        <a class="btn btn-link" href="#contact">Hubungi Kami</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Kontak Sekolah<span></span></p>
                        <p>Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146 prohumasi@smkwikrama.net</p>
                        <div class="position-relative w-100 mt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; 2022 by Wulandari</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>