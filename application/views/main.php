<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Visindo Meta Data</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon/favicon-16x16.png" rel="icon">
  <link href="assets/img/apple-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="assets/css/my_css.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.1.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:cs@visindometadata.com">cs@visindometadata.com</a>
        <i class="icofont-phone"></i> <a href="tel:+6282297255808"> +62 822-9725-5808</a>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a target="_blank" href="https://instagram.com/visindometadata?igshid=1o3s8kj8m3nop" class="instagram">
          <i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?=base_url()?>main">VMD<span>.</span></a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?=base_url()?>main">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#visi_misi">Visi Misi</a></li>
          <li><a href="#services">Pelayanan</a></li>
          <li><a href="#activity">Aktifitas Projek</a></li>
          <li><a href="#team">Tim Kami</a></li>
          <!--li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li-->
          <li><a href="#contact">Kontak</a></li>
          <li><a href="<?=base_url()?>Main/login_modal" data-toggle="modal" class="login_or_logout"> Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1><span> Visindo Meta Data</span>
      </h1>
      <!--h2>We are team of talanted designers making websites with Bootstrap</h2-->
      <h2></h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Mulai</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Tonton Video <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
          <h3>Temukan lebih banyak <span>Tentang Kami</span></h3>
          <!--p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p-->
          <p></p>
        </div>

        <div class="col-lg-12 text-center text-white pt-4 pt-lg-0 show-on-login" data-aos="fade-up" data-aos-delay="100" style="display: none;">
          <hr>
          <a class="btn btn-sm btn-primary" target="_blank" href="<?=base_url()?>main/about_us_page"><i class="icofont-edit"></i> Update</a>
          <hr>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?=$about_us->row()->image?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <p class="font-italic">
              <?=isset($about_us->row()->text_1) ? $about_us->row()->text_1 : ''?>
            </p>
            <p class="font-italic">
              <?=isset($about_us->row()->text_2) ? $about_us->row()->text_2 : ''?>
            </p>
            <p class="font-italic">
              <?=isset($about_us->row()->text_3) ? $about_us->row()->text_3 : ''?>
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Visi & Misi Section ======= -->
    <section id="visi_misi" class="visi_misi">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Visi Misi</h2>
          <h3><span>Visi & Misi</span> kami</h3>
          <!--p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p-->
        </div>

        <div class="col-lg-12 text-center text-white pt-4 pt-lg-0 show-on-login" data-aos="fade-up" data-aos-delay="100" style="display: none;">
          <hr>
          <a class="btn btn-sm btn-primary" target="_blank" href="<?=base_url()?>main/visi_misi_page"><i class="icofont-edit"></i> Update</a>
          <hr>
        </div>

        <div class="row">
          <div class="col-lg-6 text-center">
            <h3>
              Visi
            </h3>
            <p class="font-italic">
              <?=isset($visi_misi->row()->visi) ? $visi_misi->row()->visi : ''?>
            </p>
          </div>
          <div class="col-lg-6 text-center">
            <h3>
              Misi
            </h3>
            <p class="font-italic">
              <?=isset($visi_misi->row()->misi) ? $visi_misi->row()->misi : ''?>
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pelayanan</h2>
          <h3>Cek <span>Pelayanan</span> kami</h3>
          <!--p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p-->
          <p></p>
        </div>

        <div class="col-lg-12 text-center text-white pt-4 pt-lg-0 show-on-login" data-aos="fade-up" data-aos-delay="100" style="display: none;">
          <hr>
          <a class="btn btn-sm btn-primary" target="_blank" href="<?=base_url()?>main/pelayanan_page"><i class="icofont-edit"></i> Update</a>
          <hr>
        </div>


        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Jasa Pekerjaan</a></h4>
              <p>
                <?=isset($service->row()->jasa_pelayanan) ? $service->row()->jasa_pelayanan : ''?>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">E-Arsip</a></h4>
              <p>
                <?=isset($service->row()->e_arsip) ? $service->row()->e_arsip : ''?>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Pembangunan Aplikasi</a></h4>
              <p>
                <?=isset($service->row()->aplikasi_build) ? $service->row()->aplikasi_build : ''?>
              </p>
            </div>
          </div>

          
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="activity" class="activity team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Aktifitas Projek</h2>
          <h3><span>Aktifitas Projek</span> kami</h3>
          <!--p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p-->
          <p></p>
        </div>

        <div class="col-lg-12 text-center text-white pt-4 pt-lg-0 show-on-login" data-aos="fade-up" data-aos-delay="100" style="display: none;">
          <hr>
          <a class="btn btn-sm btn-primary" target="_blank" href="<?=base_url()?>main/activity_page"><i class="icofont-edit"></i> Update</a>
          <hr>
        </div>

        <div class="row">

          <?php 
            foreach ($activity->result() as $key => $value) {
          ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?=$value->image?>" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?=$value->title?></h4>
                <span><?=$value->desc?></span>
              </div>
            </div>
          </div>

          <?php
            }
          ?>

          <!--div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/activity/e_arsip.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Surat Ukur</h4>
                <span>Persingkat pencarian dokumen</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/activity/editor.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Development Aplikasi</h4>
                <span>Developer berpengalaman</span>
              </div>
            </div>
          </div-->

          

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tim Kami</h2>
          <h3><span>Tim</span> kami</h3>
          <!--p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p-->
          <p></p>
        </div>

        <div class="col-lg-12 text-center text-white pt-4 pt-lg-0 show-on-login" data-aos="fade-up" data-aos-delay="100" style="display: none;">
          <hr>
          <a class="btn btn-sm btn-primary" target="_blank" href="<?=base_url()?>main/team_page"><i class="icofont-edit"></i> Update</a>
          <hr>
        </div>

        <div class="row">

          <?php
            foreach ($team->result() as $data_team) {
          ?>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?=$data_team->image?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?=$data_team->nama?></h4>
                <span><?=$data_team->jabatan?></span>
              </div>
            </div>
          </div>

          <?php
            }
          ?>

          <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="300">
            <p class="font-italic">
              <button class="btn btn-primary btn-xs text-white" href="<?=base_url()?>Main/struktur_organisasi_modal" data-toggle="modal"> 
                <i class="bx bx-show"></i> Struktur Oranisasi</button>
            </p>
          </div>
          <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="300">
            <p class="font-italic">
              <button class="btn btn-primary btn-xs text-white" href="<?=base_url()?>Main/modal_team" data-toggle="modal"> 
                <i class="bx bx-show-alt"></i> Selengkapnya...</button>
            </p>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3>Silakan <span>Kontak</span> kami</h3>
          <!--p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p-->
          <p></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>
                Jln. Cemara Blok E No 10 
                <br> Kel. Rancabolang 
                <br> Kec. Gedebage, Bandung
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:cs@visindometadata.com"> cs@visindometadata.com</a></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telp</h3>
              <p><a href="tel:+6282297255808"> +62 822-9725-5808</a></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0990164639466!2d107.69172472913874!3d-6.962517368470321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c28b3774318f%3A0x5d5b110b6ea7f02a!2sJl.%20Cemara%20E%203-15%2C%20Rancabolang%2C%20Kec.%20Gedebage%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040295!5e0!3m2!1sen!2sid!4v1607400009846!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!--div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div-->

    <!--div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div-->
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright 
        <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/sweetalert.js"></script>
  <script src="assets/js/my_script.js"></script>

  <script type="text/javascript">

    $(document).ready(function(){

      alert('<?=$session?>');

        message_onlogin();
        change_login_icon();

    })

    function message_onlogin(){

      var mess = "<?=$this->session->flashdata('message')?>";

      if(mess === ""){

      }else{
        Swal.fire({
          //position: 'top-end',
          icon: 'success',
          title: mess,
          showConfirmButton: false,
          timer: 1500
        })
      }

    }

    function change_login_icon(){

      var session = "<?=$session?>";

      if(session === 'true'){
        //alert('true');
        //$("#auth_log").text("");
        $(".login_or_logout").text("Logout");
        //$("#auth_log").attr("class","icofont-logout");
        $(".login_or_logout").attr("href","<?=base_url()?>Main/logout");
        $('div.show-on-login').removeAttr("style");
        
      }else{
        //alert('false');
      }

    }
         
  </script>

</body>

</html>