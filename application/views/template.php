<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Arsip Surat</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/gambar/favicon.ico" />
	<link href="<?= base_url() ?>assets/fa/css/all.css" rel="stylesheet">
	<!--load all styles -->
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
</head>

<body>
	<div class="d-flex" id="wrapper">
		<!-- Sidebar-->
		<div class="border-end bg-white" id="sidebar-wrapper">
			<div class="sidebar-heading bg-light">Menu</div>

			<div class="list-group list-group-flush">
				<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('')?>"><i class="fa fa-star" aria-hidden="true"></i>&nbsp; Arsip</a>
				<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('welcome/about')?>"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; About</a>
			</div>
		</div>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			<!-- Page content-->
			<div class="container-fluid">
				<?php $this->load->view($view_name); ?>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JS-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="<?= base_url() ?>assets/js/scripts.js"></script>
</body>

</html>
