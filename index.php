<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Erico & Riska Wedding</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- simplyCountdown -->
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css" />
    <script src="countdown/simplyCountdown.min.js"></script>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <!-- AOS - Animate on Scroll Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Splash Screen -->
    <div class="opening">
      <div class="opening-wrapper">
        <div class="open-title">Kepada <span>Bapak/Ibu/Saudara/i</span></div>
        <div class="simply-countdown"></div>
        <div class="open-info">
          <div>
            <div class="open-couples">Erico & Riska</div>
            <hr />
            <div class="open-date">07 . 12 . 2024</div>
          </div>
          <button class="btn open-btn rounded-0" type="button" onclick="openInvitation()">Buka Undangan</button>
        </div>
      </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg z-3 position-absolute w-100">
      <div class="container">
        <a class="navbar-brand">
          <img src="images/logo.svg" class="img-logo" alt="Erico & Riska" width="52" height="50" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <a class="offcanvas-title" id="offcanvasNavbarLabel">
              <img src="images/logo.svg" class="img-logo-lg" alt="Erico & Riska" width="52" height="50" />
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start align-items-lg-center flex-grow-1 pe-3">
              <li class="nav-item pb-2">
                <a class="nav-link" href="#couples">Pasangan</a>
              </li>
              <li class="nav-item pb-2">
                <a class="nav-link" href="#info">Info</a>
              </li>
              <li class="nav-item pb-2">
                <a class="nav-link" href="#story">Cerita</a>
              </li>
              <li class="nav-item pb-2">
                <a class="nav-link" href="#galleries">Galeri</a>
              </li>
            </ul>
            <a href="#wish" class="btn btn-nav mt-2" type="button">Ucapan</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <section class="hero d-flex align-items-end" id="home">
      <div class="container">
        <main class="content d-lg-flex justify-content-lg-between align-items-center">
          <div>
            <h1>Erico & Riska</h1>
            <p>وَمِنْ كُلِّ شَيْءٍ خَلَقْنَا زَوْجَيْنِ لَعَلَّكُمْ تَذَكَّرُوْنَ Segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah). Q.S Adz-Dzariyat:49</p>
          </div>
          <span>07 . 12 . 2024</span>
        </main>
      </div>
    </section>

    <!-- Pasangan -->
    <section class="couples" id="couples">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col text-lg-end" data-aos="fade-up">
            <h1 class="mb-3">Erico Rahmad Darmanto</h1>
            <p class="ps-lg-5">Putra Pertama dari Bpk. Abdul Jalal dan Ibu. Sunti Umi Arni</p>
          </div>
          <div class="col img-section">
            <img src="images/couples-img-1.png" class="couples-img" alt="Erico & Riska" />
            <img src="images/flower-ornament.png" class="ornament-img" alt="Flower Ornament" height="150" width="171" />
          </div>
          <div class="col text-lg-start" data-aos="fade-up">
            <h1 class="mb-3">Riska Dewi Suryaningrum</h1>
            <p>Putri Keempat dari Bpk. Sumanto Prayitno dan Ibu. Sukarni</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Infoemasi Acara -->
    <section class="info" id="info">
      <div class="container d-flex flex-column gap-5">
        <div class="row align-items-center justify-content-center">
          <div class="col text-center" data-aos="fade-up">
            <h1>Informasi Acara</h1>
          </div>
        </div>
        <div class="row justify-content-center info-detail">
          <div class="col-lg-5 d-flex justify-content-center">
            <div class="card border-0 rounded-0" data-aos="fade-up">
              <div class="card-body">
                <h5 class="card-title">Akad Nikah & Resepsi</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item border-0 w-100">Sabtu, 7 Desember 2024</li>
                <li class="list-group-item border-0 w-100">08.00 - selesai (Akad)</li>
                <li class="list-group-item border-0 w-100">11.00 - selesai (Resepsi)</li>
                <li class="list-group-item w-100">Gedung STIMar “AMI”, Pulo Mas, Kayu Putih, Jakarta Timur</li>
              </ul>
              <div class="card-body">
                <iframe
                  class="w-100"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.685390687617!2d106.88627846162413!3d-6.1728603003353735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f51ffaafe41b%3A0x1aa21b03eba46aa6!2sSekolah%20Tinggi%20Ilmu%20Maritim%20%22AMI%22!5e0!3m2!1sid!2sid!4v1725855667746!5m2!1sid!2sid"
                  height="152"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
              <div class="card-body d-flex flex-column gap-2">
                <a href="https://calendar.app.google/YCgmFkRtwxXBzL3r6" class="btn btn-card w-100 rounded-0" type="button">Catat Tanggalnya</a>
                <a href="https://maps.app.goo.gl/2BEBSaTw3FpnWBBr8" target="_blank" class="btn btn-outline-card w-100 rounded-0" type="button">Lihat Lokasi</a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 d-flex justify-content-center">
            <div class="card border-0 rounded-0 h-100" data-aos="fade-up">
              <div class="card-body">
                <h5 class="card-title">Ngunduh Mantu</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item border-0 w-100">Minggu, 29 Desember 2024</li>
                <li class="list-group-item border-0 w-100">18.00 - selesai</li>
                <li class="list-group-item w-100">Balai Pertemuan Bhumiku, Pemecutan Klod, Denpasar Bar., Kota Denpasar</li>
              </ul>
              <div class="card-body">
                <iframe
                  class="w-100"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.051861539352!2d115.18453329999998!3d-8.686618400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24790509439ab%3A0xa6bff03578513973!2sBalai%20Pertemuan%20Bhumiku!5e0!3m2!1sid!2sid!4v1725856903738!5m2!1sid!2sid"
                  height="152"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
              <div class="card-body d-flex flex-column gap-2">
                <a href="https://calendar.app.google/YCgmFkRtwxXBzL3r6" class="btn btn-card w-100 rounded-0" type="button">Catat Tanggalnya</a>
                <a href="https://maps.app.goo.gl/3xnccwmh6nVGBVJA9" target="_blank" class="btn btn-outline-card w-100 rounded-0" type="button">Lihat Lokasi</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Story -->
    <section class="story" id="story">
      <div class="container d-flex flex-column gap-5">
        <div class="row justify-content-center">
          <div class="col text-center" data-aos="fade-up">
            <h1>Cerita Cinta Kami</h1>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <ul class="timeline text-center">
              <!-- First Meet -->
              <li data-aos="fade-up">
                <img src="./images/story/first.png" class="timeline-img" alt="Pertama Bertemu" />
                <div class="timeline-panel text-lg-end">
                  <div class="timeline-heading mb-lg-4 mb-3">
                    <h2>Pertemuan Pertama</h2>
                    <span>Kamis, 2 Maret 2023</span>
                  </div>
                  <div class="timeline-body">
                    <p>
                      Pertama kali kita kenal melalui game online yaitu 'Mobile Legend', kebetulan juga kita mempunyai hobi yang sama yaitu bermain game disaat waktu luang. Lalu selama 1 tahun berteman, kami menjalin hubungan yang lebih
                      intens dan selama 1 tahun kami mempunyai hubungan akhirnya kami memutuskan untuk melanjutkan hubungan kami ke tahap yang lebih serius
                    </p>
                  </div>
                </div>
              </li>
              <!-- Second Meet -->
              <li class="timeline-inverted" data-aos="fade-up">
                <img src="./images/story/two.png" class="timeline-img" alt="Mulai Menjalin Kasih" />
                <div class="timeline-panel text-lg-start">
                  <div class="timeline-heading mb-lg-4 mb-3">
                    <h2>Mulai Menjalin Kasih</h2>
                    <span>Sabtu, 30 September 2023</span>
                  </div>
                  <div class="timeline-body">
                    <p>Selama berlibur di Bali, kami berdua menjadi lebih mengenal satu sama lain dan mulai menjalin hubungan ke jenjang yang lebih serius</p>
                  </div>
                </div>
              </li>
              <!-- Third Meet -->
              <li data-aos="fade-up">
                <img src="./images/story/third.png" class="timeline-img" alt="Menuju Hubungan Serius" />
                <div class="timeline-panel text-lg-end">
                  <div class="timeline-heading mb-lg-4 mb-3">
                    <h2>Menuju Hubungan Serius</h2>
                    <span>Sabtu, 18 Mei 2024</span>
                  </div>
                  <div class="timeline-body">
                    <p>Tiba hari dimana saya beserta keluarga datang menemui keluarga kekasih saya Riska di kediamannya dengan bermaksud untuk melamarnya</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="galleries">
      <div class="container d-flex flex-column gap-5">
        <div class="row justify-content-center">
          <div class="col text-center" data-aos="fade-up">
            <h1>Memori Cinta Kami</h1>
          </div>
        </div>

        <div class="row row-cols-lg-3 row-cols-2 gy-lg-4 g-3 justify-content-center">
          <div class="col" data-aos="fade-up">
            <a href="./images/galeri/FGM_4419.JPG" data-fancybox="gallery">
              <img src="./images/galeri/FGM_4419.JPG" class="gallery-img mx-auto d-block img-fluid w-100" alt="Memori Pertama" />
            </a>
          </div>
          <div class="col" data-aos="fade-up">
            <a href="./images/galeri/FGM_4452.JPG" data-fancybox="gallery">
              <img src="./images/galeri/FGM_4452.JPG" class="gallery-img mx-auto d-block img-fluid w-100" alt="Memori Kedua" />
            </a>
          </div>
          <div class="col" data-aos="fade-up">
            <a href="./images/galeri/FGM_4492.JPG" data-fancybox="gallery">
              <img src="./images/galeri/FGM_4492.JPG" class="gallery-img mx-auto d-block img-fluid w-100" alt="Memori Ketiga" />
            </a>
          </div>
          <div class="col" data-aos="fade-up">
            <a href="./images/galeri/FGM_4522.JPG" data-fancybox="gallery">
              <img src="./images/galeri/FGM_4522.JPG" class="gallery-img mx-auto d-block img-fluid w-100" alt="Memori Keempat" />
            </a>
          </div>
          <div class="col" data-aos="fade-up">
            <a href="./images/galeri/FGM_4582.JPG" data-fancybox="gallery">
              <img src="./images/galeri/FGM_4582.JPG" class="gallery-img mx-auto d-block img-fluid w-100" alt="Memori Kelima" />
            </a>
          </div>
          <div class="col" data-aos="fade-up">
            <a href="./images/galeri/FGM_4602.JPG" data-fancybox="gallery">
              <img src="./images/galeri/FGM_4602.JPG" class="gallery-img mx-auto d-block img-fluid w-100" alt="Memori Keenam" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Wish Section -->
    <section class="wish" id="wish">
      <div class="container">
        <div class="row row-cols-lg-2 row-cols-1">
          <div class="col col-lg-5 mb-3 mb-lg-0">
            <div class="card border-0 rounded-0 card-rsvp" data-aos="fade-up">
              <div class="card-body">
                <h5 class="card-title">Resepsi</h5>
              </div>
              <div class="card-body">
                <form class="row gy-3" id="myform" method="POST" type="create">
                  <div class="col-12">
                    <input type="text" class="form-control border-0 rounded-0" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" />
                  </div>
                  <div class="col-12">
                    <select id="status" name="status" class="form-select border-0 rounded-0">
                      <option selected value="Hadir">Hadir</option>
                      <option value="Tidak Hadir">Tidak Hadir</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <textarea class="form-control border-0 rounded-0" id="ucapan" name="ucapan" rows="3" placeholder="Beri ucapan"></textarea>
                  </div>
                  <div class="col-12">
                    <button type="submit" id="submit" class="btn btn-card w-100 rounded-0" onclick="save()">Kirim</button>
                  </div>
                </form>
              </div>
              <div class="card-body">
                <p>Silahkan mengisi kehadiran dan ucapan pada form diatas.</p>
              </div>
            </div>
          </div>
          <div class="col col-lg-7">
            <div class="card border-0 rounded-0 w-100 card-ucapan" data-aos="fade-up">
              <div class="card-body">
                <h5 class="card-title">Ucapan & Doa</h5>
              </div>
              <div class="card-body overflow-auto" id="comment-wish"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gift Section -->
    <section class="gift" id="gift">
      <div class="container-fluid gift-bg">
        <div class="container py-5" data-aos="fade-up">
          <div class="row row-cols-lg-3 row-cols-1 align-items-center text-center">
            <div class="col d-lg-flex mb-4 text-lg-start">
              <div>
                <i class="bi bi-gift gift-icon"></i>
              </div>
              <div class="ms-2">
                <span class="gift-subtitle">Kirim Kado Anda</span>
                <h6 class="gift-title">Kado Pernikahan</h6>
              </div>
            </div>
            <div class="col d-lg-flex me-3 mb-4 text-lg-start">
              <div>
                <i class="bi bi-geo-alt gift-icon"></i>
              </div>
              <h6 class="gift-address ms-2">Jl. Subur Gang Mirah Kecubung II No 2, Pemecutan Klod, Kec. Denpasar Bar., Kota Denpasar, Bali 80119</h6>
            </div>
            <div class="col-lg-3">
              <a href="https://api.whatsapp.com/send/?phone=62895394562656&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-card btn-gift rounded-0 text-center">Konfirmasi <i class="bi bi-whatsapp ms-2"></i></a>
            </div>
          </div>
        </div>
      </div>
      <iframe
        class="w-100"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.0587285537092!2d115.20221812435045!3d-8.669195721468899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241517dceb289%3A0xc0a13289f80dd4bb!2sDevTier%20Software!5e0!3m2!1sid!2sid!4v1726547096220!5m2!1sid!2sid"
        height="400"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </section>

    <!-- Footer Section -->
    <section class="footer" id="footer">
      <div class="container-fluid text-center footer-bg py-5">
        <h1 class="footer-title mb-4">Terima Kasih</h1>
        <p class="footer-desc mb-4">Dibuat dengan Cinta oleh DevTier Software</p>
        <ul class="footer-icons d-flex justify-content-center align-items-center">
          <li class="footer-icon">
            <a href="https://www.instagram.com/devtiersoftware?igsh=a3JlbzM5YXhmdHNw" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
          </li>
          <li class="footer-icon">
            <a href="https://api.whatsapp.com/send/?phone=6285163653403&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp"></i></a>
          </li>
          <li class="footer-icon">
            <a href="https://devtiersoftware.com/" target="_blank" rel="noopener noreferrer"><i class="bi bi-browser-chrome"></i></a>
          </li>
          <li class="footer-icon">
            <a href="https://www.linkedin.com/company/devtier-software" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
          </li>
        </ul>
      </div>
    </section>

    <!-- Audio -->
    <div id="audio-container">
      <audio id="song" autoplay loop>
        <source src="./audio/westlife-beautiful-in-white.mp3" type="audio/mp3" />
      </audio>

      <div class="audio-icon-wrapper" style="display: none">
        <i class="bi bi-disc"></i>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
      Fancybox.bind("[data-fancybox='gallery']", {
        // Your custom options
      });
    </script>

    <!-- AOS - Animate on Scroll Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- JQuery -->
    <script src="js/jquery-3.7.1.min.js"></script>

    <!-- Custom JS -->
    <script src="js/countdown-controller.js"></script>
    <script src="js/openInvitation.js"></script>
    <script src="js/urlNamaTamu.js"></script>
    <script src="js/function.js"></script>
    <script>
      const rootElement = document.querySelector(":root");

      rootElement.style.smoothBehavior = "smooth";
    </script>
    <script>
      $(document).ready(function() {
        read();
      });
    </script>
  </body>
</html>
