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
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/team-header.jpg');">
	<div class="container position-relative d-flex flex-column align-items-center mt-5">

		<h2>Team</h2>
		<ol>
			<li><a href="<?= base_url(); ?>">Home</a></li>
			<li>Team</li>
		</ol>

	</div>
</div><!-- End Breadcrumbs -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
	<div class="container" data-aos="fade-up">

		<div class="section-header">
			<h2>Our Team</h2>
		</div>

		<div class="row gy-4 justify-content-center text-center"> <!-- Updated classes added: justify-content-center and text-center -->

			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
				<div class="team-member mx-auto"> <!-- Added mx-auto class for center alignment -->
					<div class="member-img">
						<img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
						<div class="social">
							<a href=""><i class="bi bi-twitter"></i></a>
							<a href=""><i class="bi bi-facebook"></i></a>
							<a href=""><i class="bi bi-instagram"></i></a>
							<a href=""><i class="bi bi-linkedin"></i></a>
						</div>
					</div>
					<div class="member-info">
						<h4>B.C.Patel</h4>
						<span>Chief Executive Officer</span>
					</div>
				</div>
			</div><!-- End Team Member -->

			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
				<div class="team-member mx-auto"> <!-- Added mx-auto class for center alignment -->
					<div class="member-img">
						<img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
						<div class="social">
							<a href=""><i class="bi bi-twitter"></i></a>
							<a href=""><i class="bi bi-facebook"></i></a>
							<a href=""><i class="bi bi-instagram"></i></a>
							<a href=""><i class="bi bi-linkedin"></i></a>
						</div>
					</div>
					<div class="member-info">
						<h4>Sandip H. Mulani</h4>
						<span>CTO</span>
					</div>
				</div>
			</div><!-- End Team Member -->

		</div>

	</div>
</section><!-- End Team Section -->


</main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php $this->load->view("layouts/footer"); ?>
<?php $this->load->view("layouts/footerFiles"); ?>

</body>

</html>
