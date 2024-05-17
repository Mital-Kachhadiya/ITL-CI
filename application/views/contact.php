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
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
	<div class="container position-relative d-flex flex-column align-items-center mt-5">

		<h2>Contact</h2>
		<ol>
			<li><a href="<?= base_url(); ?>">Home</a></li>
			<li>Contact</li>
		</ol>

	</div>
</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
	<div class="container position-relative" data-aos="fade-up">

		<div class="row gy-4 d-flex justify-content-end">

			<div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

				<div class="info-item d-flex">
					<i class="bi bi-geo-alt flex-shrink-0"></i>
					<div>
						<h4>Location:</h4>
						<p>E-115, Laxminarayan Industrial Park,<br>
							BRC Comp., Surat-Navsari Road,<br>
							Udhna, Surat-Gujarat. 394210</p>
					</div>
				</div><!-- End Info Item -->

				<div class="info-item d-flex">
					<i class="bi bi-envelope flex-shrink-0"></i>
					<div>
						<h4>Email:</h4>
						<p>info.itlab365@gmail.com</p>
					</div>
				</div><!-- End Info Item -->

				<div class="info-item d-flex">
					<i class="bi bi-phone flex-shrink-0"></i>
					<div>
						<h4>Call:</h4>
						<p>+91 94288 56987</p>
						<p>+91 84602 71803</p>
					</div>
				</div><!-- End Info Item -->

			</div>

			<div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
			<div id="responseMessage"></div>
				<!-- <form action="<?= base_url('contact/send_inquiry'); ?>" method="post" role="form" class="php-email-form"> -->
				<form id="contactForm" method="post" role="form" class="php-email-form">
				<div class="row">
						<div class="col-md-6 form-group">
							<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
						</div>
						<div class="col-md-6 form-group mt-3 mt-md-0">
							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
						</div>
					</div>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
					</div>
					<div class="form-group mt-3">
						<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
					</div>
					
					<div class="text-center"><button type="submit" id="submitBtn">Send Message</button></div>
				</form>

			</div><!-- End Contact Form -->

		</div>

	</div>
</section><!-- End Contact Section -->

</main><!-- End #main -->


  <!-- ======= Footer ======= -->
<?php $this->load->view("layouts/footer"); ?>
<?php $this->load->view("layouts/footerFiles"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    // Ensure jQuery is loaded before using $
    $(document).ready(function () {
        $('#contactForm').submit(function (event) {
            event.preventDefault();

            // Display loader
            $('#submitBtn').prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...');

            $.ajax({
                url: '<?= base_url('contact/send_inquiry'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        $('#responseMessage').html('<div class="alert alert-success">Thank you for reaching out! We have received your message and will respond to you soon.</div>');
                        $('#contactForm')[0].reset(); // Reset form
                    } else {
                        $('#responseMessage').html('<div class="alert alert-danger">' + response.errors + '</div>');
                    }
                },
                error: function () {
                    $('#responseMessage').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
                },
                complete: function () {
                    // Re-enable submit button and remove loader
                    $('#submitBtn').prop('disabled', false).html('Send Message');
                }
            });
        });
    });
</script>
</body>

</html>
