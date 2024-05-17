<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("layouts/header"); ?>
<?php $this->load->view("layouts/headerFiles"); ?>
</head>

<body class="page-index">

<?php $this->load->view("layouts/navbar"); ?>

 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center  mt-5">

        <h2>About</h2>
        <ol>
          <li><a href="<?= base_url(); ?>">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>About us</h2>
        </div>
        <div class="row gy-4" data-aos="fade-up">
         
          <!-- <div class="col-lg-4">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div> -->
          <div class="col-lg-12">
            <div class="content ps-lg-5">
              <!-- <h3>Voluptatem dignissimos provident quasi</h3> -->
              <p>
                We are a dedicated civil engineering testing
                laboratory, commited to delivering exceptional
                services. With a focus on accuracy, innovation,
                and client collaboration, our highly skilled
                team employs state-of-the-art methodologies
                to provide reliable sustainable infrastructure
                development for the betterment of society.
              </p>
              <!-- <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul> -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- MIssion/Vision SERVICE CARD -->
<section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
  <div class="container">
   
    <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-1 row-cols-md-3 justify-content-center">

      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa-regular fa-circle-check"></i>
          </div>
          <h3>Quality Policy</h3>
          <p>The Management policies of 'ITL' are as per ISO/IEC 17025:2017 and all the testing activities are confirming to relevant National/International standards.</p>
        </div>
      </div>

      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <h3>Our Mission</h3>
          <p>To provide accurate, reliable, and advanced
            civil engineering testing services, ensuring
            the highest standards of quality, safety, and
            customer satisfaction. Through continuous
            innovation, expertise, and collaboration, we
            strive to contribute to the development of
            sustainable infrastructure solutions,
            fostering growth and enhancing the
            well-being of communities.</p>
        </div>
      </div>
      
      
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa-solid fa-eye"></i>
          </div>
          <h3>Our Vision</h3>
          <p>To be the leading civil engineering testing laboratory, recognized for our commitment to delivering accurate and reliable results, excep tional customer service. We strive to contribute to the developement of safe, sustainable, and innovative infrastructure solutions, enhancing the quality of life and fostering economic growth.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ADVERTISERS SERVICE CARD ENDED -->
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Elevate Your Construction Projects with Expert Material Testing</h3>
            <p>Unlocking Superior Quality and Reliability at Our Material Testing Laboratory.</p>
            <a class="cta-btn" href="tel:84602 71803">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php $this->load->view("layouts/footer"); ?>
<?php $this->load->view("layouts/footerFiles"); ?>

</body>

</html>
