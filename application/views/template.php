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

	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />

</head>

<body>
	<div class="d-flex" id="wrapper">
		<!-- Sidebar-->
		<div class="border-end bg-white" id="sidebar-wrapper">
			<div class="sidebar-heading bg-light">Menu</div>

			<div class="list-group list-group-flush">
				<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('') ?>"><i class="fa fa-star" aria-hidden="true"></i>&nbsp; Arsip</a>
				<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('welcome/about') ?>"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; About</a>
			</div>
		</div>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			<!-- Page content-->
			<div class="container-fluid">
			<?php if($this->session->flashdata('msg')): ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<?php echo $this->session->flashdata('msg'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>
				<?php $this->load->view($view_name); ?>
			</div>
		</div>
	</div>

	<?php if ($surat != null) {
		foreach ($surat as $s) { ?>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal<?= $s->id_surat; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							Apakah anda yakin ingin menghapus arsip surat ini ?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
							<a href="<?= base_url('welcome/hapusData/') . $s->id_surat ?>" class="btn btn-primary">Ya!</a>
						</div>
					</div>
				</div>
			</div>
	<?php }
	} ?>
	<!-- Bootstrap core JS-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="<?= base_url() ?>assets/js/scripts.js"></script>


</body>

</html>