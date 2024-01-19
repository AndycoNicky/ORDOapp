<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDO App</title>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!-- <link href="{{ url('/libs/sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{ url('/libs/app/assets/sass/app.css') }}" rel="stylesheet"> -->

    @vite(['resources/scss/app.scss'])
</head>
<body>
    
    <nav id="nav" class="nav">
        <div class="nav-container">
            <img class="nav-brand" src=" {{ url('/libs/app/assets/img/logo_white.png') }} ">
            <a href="#" class="nav-link text-white">Homepage</a>
            <a href="#" class="nav-link text-white">Tentang</a>
            <a href="#" class="nav-link text-white">Daftar Hotel</a>
            <a href="#" class="nav-link text-white">Bantuan</a>
        </div>
        <div class="nav-container">
            <button class="nav-button">
                <img class="nav-button-flag" src=" {{ url('/libs/app/assets/img/id_flag.png') }} ">
                Indonesia ( ID )
                <img class="nav-button-arrow" src=" {{ url('/libs/app/assets/img/arrow_down_2.png') }} ">
            </button>
        </div>
    </nav>

    <section class="container s1">
        <div class="section-content text-white">
            <div class="content-head">
                <img class="head-rectangle" src=" {{ url('/libs/app/assets/img/rectangle_3.png') }} ">
                <p>Hotel Operator</p>
            </div>
            <div class="content-title">Membantu Menjalankan Operasi Bisnis Pariwisata Anda</div>
            <div class="content-description">GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</div>
            <button class="content-button">Konsultasikan Bisnis Saya</button>
        </div>
        <img class="section-image" src=" {{ url('/libs/app/assets/img/p1_main.png') }} "></div>
        <div class="section-addon">
            <p class="text-white">Scroll</p>
            <img src=" {{ url('/libs/app/assets/img/arrow_down.png') }} ">
        </div>
    </section>

    <section class="container s2">
        <div class="section-content">
            <div class="content-head">
                <img class="head-rectangle" src=" {{ url('/libs/app/assets/img/rectangle_3.png') }} ">
                <p>Our Workflow</p>
            </div>
            <div class="content-title">Proses Kerja Kami dalam Meningkatkan Kualitas Properti</div>
        </div>
    </section>

    <section class="container s3">
        <div class="section-content">
            <div class="content-head">
                <img class="head-rectangle" src=" {{ url('/libs/app/assets/img/rectangle_3.png') }} ">
                <p>Our Services</p>
            </div>
            <div class="content-title">Apa Saja yang Bisa Kami Bantu ?</div>
            <div class="content-list">
                <div class="card">
                    <div class="card-head">
                        <img src=" {{ url('/libs/app/assets/img/img_list_1.png') }} ">
                        <p class="number">01</p>
                    </div>
                    <div class="card-title">Revenue Management Service</div>
                    <button class="card-button">
                        <p>Saya Tertarik</p><img src=" {{ url('/libs/app/assets/img/arrow_right.png') }} ">
                    </button>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src=" {{ url('/libs/app/assets/img/img_list_2.png') }} ">
                        <p class="number">02</p>
                    </div>
                    <div class="card-title">Full Manage Service</div>
                    <button class="card-button">
                        <p>Saya Tertarik</p><img src=" {{ url('/libs/app/assets/img/arrow_right.png') }} ">
                    </button>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src=" {{ url('/libs/app/assets/img/img_list_3.png') }} ">
                        <p class="number">03</p>
                    </div>
                    <div class="card-title">Asset Monetize Service</div>
                    <button class="card-button">
                        <p>Saya Tertarik</p><img src=" {{ url('/libs/app/assets/img/arrow_right.png') }} ">
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="container s4">
        <div class="section-content">
            <div class="content-head">
                <img class="head-rectangle" src=" {{ url('/libs/app/assets/img/rectangle_3.png') }} ">
                <p>Our Latest Projects</p>
                <img class="head-rectangle" src=" {{ url('/libs/app/assets/img/rectangle_3.png') }} ">
            </div>
            <div class="content-title">Project Terbaru Kami</div>
            <div id="splide-s4" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src=" {{ url('/libs/app/assets/img/carousel_1.png') }} ">
                            <div class="splide-overlay">
                                <div class="splide-overlay-left">
                                    <div class="overlay-head">1/4 operational project</div>
                                    <div class="overlay-title">Townhouse Oak</div>
                                    <div class="overlay-description">Brand Tertinggi di OYO</div>
                                </div>
                                <div class="splide-overlay-right">
                                    <div class="overlay-action">
                                        <img src=" {{ url('/libs/app/assets/img/arrow_right_bubble.png') }} ">
                                        <span>Lihat Detail</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="container s5">
        <div class="section-content">
            <div class="content-head">
                <img class="head-rectangle" src=" {{ url('/libs/app/assets/img/rectangle_3.png') }} ">
                <p>Our Testimonials</p>
            </div>
            <div class="content-title">Yang Klien Kami Katakan</div>
            <div class="content-quote">
                <img src=" {{ url('/libs/app/assets/img/left_quotes_sign_1.png') }} ">
                <p>GWA Group membantu hotel saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
            </div>
            <div class="content-quotee">
                <img src=" {{ url('/libs/app/assets/img/s5_yello.png') }} ">
                <div class="quotee-desc">
                    <div class="quotee-name">Chaim Desmond</div>
                    <div class="quotee-job">CEO of Yellow Hotel</div>
                </div>
            </div>
        </div>
        <div id="splide-s5" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src=" {{ url('/libs/app/assets/img/rectangle_11.png') }} ">
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container s6">
        <div class="section-content">
            <div class="content-head">
                <img class="head-rectangle" src=" {{ url('/libs/app/assets/img/rectangle_3.png') }} ">
                <p>Hubungi Kami</p>
            </div>
            <div class="content-title">Ingin Mendiskusikan Bisnis Pariwisata Anda ?</div>
            <img class="content-separator" src=" {{ url('/libs/app/assets/img/line.png') }} ">
            <div class="content-description">
                Ada kepentingan bisnismu yang ingin didikusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !
            </div>
        </div>
        <div class="section-form">
            <form class="form">
                <label>Nama Lengkap</label>
                <input type="input" name="name" placeholder="Masukkan Nama Lengkap">
                <label>Nama Perusahaan</label>
                <input type="input" name="company" placeholder="Masukkan Nama Perusahaan">
                <label>Nomor Whatsapp Aktif</label>
                <input type="input" name="phone" placeholder="Masukkan Nomor Whatsapp">
                <button type="submit">
                    <p>Jadwalkan Konsultasi</p><img src=" {{ url('/libs/app/assets/img/arrow_right.png') }} ">
                </button>
            </form>
        </div>
    </section>

    <footer>
        <img class="footer-brand" src=" {{ url('/libs/app/assets/img/logo_white.png') }} ">
        <div class="footer-category">
            <div class="footer-category-item">
                <div class="footer-item-head">Halaman Utama</div>
                <a href="#" class="footer-item">Homepage</a>
            </div>
            <div class="footer-category-item">
                <div class="footer-item-head">Perusahaan</div>
                <a href="#" class="footer-item">Tentang Kami</a>
                <a href="#" class="footer-item">Daftar Hotel</a>
            </div>
            <div class="footer-category-item">
                <div class="footer-item-head">Temukan Kami</div>
                <a href="#" class="footer-item">Bantuan</a>
                <a href="#" class="footer-item">Hubungi Kami</a>
            </div>
            <div class="footer-category-item">
                <div class="footer-item-head">Social Media</div>
                <div class="footer-social">
                    <a href="#" class="footer-social-item">
                        <img class="social-icon" src=" {{ url('/libs/app/assets/img/facebook.png') }} ">
                    </a>
                    <a href="#" class="footer-social-item">
                        <img class="social-icon" src=" {{ url('/libs/app/assets/img/youtube.png') }} ">
                    </a>
                    <a href="#" class="footer-social-item">
                        <img class="social-icon" src=" {{ url('/libs/app/assets/img/instagram.png') }} ">
                    </a>
                </div>
            </div>
        </div>
        <img class="footer-divider" src=" {{ url('/libs/app/assets/img/line_footer.png') }} ">
        <div class="footer-utils">
            <div class="footer-snk">
                <a href="#" style="margin-bottom: 20px;">Pemberitahuan Privasi</a>
                <a href="#">Syarat dan Ketentuan</a>
            </div>
            <div class="footer-lang">
                <img class="lang-icon" src=" {{ url('/libs/app/assets/img/lang_icon.png') }} ">
                <button class="footer-lang">Bahasa Indonesia<img class="lang-btn-icon" src=" {{ url('/libs/app/assets/img/arrow_down_2.png') }} "></button>
            </div>
        </div>
        <div class="footer-copyright">
            © 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk.
        </div>
    </footer>

    <script src="{{ url('/libs/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <script>
        $(document).ready(function() {
            checkScroll()

            let splide = new Splide( '#splide-s4' );
            splide.mount();
            let splide2 = new Splide( '#splide-s5' );
            splide2.mount();
        })

        $(window).scroll(function (event) {
            checkScroll()
        })

        function checkScroll() {
            if ($(window).scrollTop() > 50) {
                $("#nav").addClass("nav-scrolled")
            } else {
                $("#nav").removeClass("nav-scrolled")
            }
        }
    </script>

</body>
</html>