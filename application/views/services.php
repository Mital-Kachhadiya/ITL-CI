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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center mt-5">

        <h2>Services</h2>
        <ol>
          <li><a href="<?= base_url(); ?>">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>

        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Civil Material Testing Laboratory</a></h4>
              <div class="mt-3">
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>&nbsp; Laboratory as well as on-site testing facility</li>
                <li><i class="bi bi-check-circle-fill"></i>&nbsp; Geo-Technical Investigation </li>
                <li><i class="bi bi-check-circle-fill"></i>&nbsp; Non-Destructive Testing</li>
                <li><i class="bi bi-check-circle-fill"></i>&nbsp; Mix Design(Concrete & Bitumen)</li>
              </ul>
            </div> 
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Project Management Consultancy</a></h4>
              <div class="mt-3">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp; Project proposals & Feasibility study</li>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp; Detailed planning & Scheduling </li>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp;Project Monitoring & Controlling</li>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp; Project Estimation & Budgeting</li>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp; Safety Management</li>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp; Progress report(Daily,Weekly,Monthly)</li>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp; On Site Documentation</li>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp; Drawings, Reports, Registers, Bills,etc.</li>
                </ul>
              </div> 
            </div>
          </div><!-- End Service Item -->
          

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">TPI/QA/QC</a></h4>
              <div class="mt-3">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp; Third Party Inspection</li>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp; Collaborative Site Visits </li>
                  <li><i class="bi bi-check-circle-fill"></i>&nbsp; Monitoring each & every</li>
                </ul>
              </div> 
            </div>
          </div><!-- End Service Item -->

         

       

        </div>

      </div>
    </section><!-- End Our Services Section -->

   

  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php $this->load->view("layouts/footer"); ?>
<?php $this->load->view("layouts/footerFiles"); ?>

</body>

</html>
