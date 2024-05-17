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

		<h2>E-Library</h2>
		<ol>
			<li><a href="<?= base_url(); ?>">Home</a></li>
			<li>E-Library</li>
		</ol>

	</div>
</div><!-- End Breadcrumbs -->

<!-- ======= Team Section ======= -->
<section id="elibrary" class="elibrary">
	<div class="container" data-aos="fade-up">

		<div class="section-header">
			<h2>Our Library</h2>
		</div>

		<div class="row gy-4 justify-content-center text-center"> <!-- Updated classes added: justify-content-center and text-center -->
			<embed src="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" type="application/pdf" width="100%" height="600px" />
		</div>

	</div>
</section><!-- End Team Section -->


</main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php $this->load->view("layouts/footer"); ?>
<?php $this->load->view("layouts/footerFiles"); ?>

</body>

</html>
