 
 <?php $page = $this->uri->segment(1); ?>
 <!-- Top Bar -->
 <div class="top-bar fixed-top" id="top-bar">
    <div class="container">
      <p>NABL Accredited as per ISO/IEC 17025:2017 (TC-13548)</p>
    </div>
  </div>
  <!-- End Top Bar -->
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo - Copy.png" alt="">
        <img src="assets/img/tagline.png" alt="">
        <!-- <h1 class="d-flex align-items-center">INTEGRITY Testing Laboratory & Research Centre</h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

			<nav id="navbar" class="navbar">
    <ul>
        <li><a href="<?= base_url() ?>" <?= $page == 'home'  || $page == '' ? 'class="active"' : '' ?>>Home</a></li>
        <li><a href="<?= base_url('about') ?>" <?= $page == 'about' ? 'class="active"' : '' ?>>About</a></li>
        <li><a href="<?= base_url('services') ?>" <?= $page == 'services' ? 'class="active"' : '' ?>>Services</a></li>
        <li><a href="<?= base_url('gallery') ?>" <?= $page == 'gallery' ? 'class="active"' : '' ?>>Gallery</a></li>
        <li><a href="<?= base_url('elibrary') ?>" <?= $page == 'elibrary' ? 'class="active"' : '' ?>>E-Library</a></li>
        <li><a href="<?= base_url('team') ?>" <?= $page == 'team' ? 'class="active"' : '' ?>>Team</a></li>
        <li><a href="<?= base_url('contact') ?>" <?= $page == 'contact' ? 'class="active"' : '' ?>>Contact</a></li>
    </ul>
</nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->
